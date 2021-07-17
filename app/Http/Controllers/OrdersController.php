<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user_index($stage)
    {
        switch ($stage) {
            case 'waiting-delivery':
                $userOrders = Auth::user()->orders()->where('status', 'wait--delivery')->paginate(5);
                break;
            case 'complete':
                $userOrders = Auth::user()->orders()->where('status', 'Complete')->paginate(5);
                break;  
            default:
                $userOrders = Auth::user()->orders()->paginate(5);
                break;
        }
        
        $userOrders->transform(function($order, $key) {
            $order->cart_info = json_decode($order->cart_info, TRUE);
            $order->delivery_info = json_decode($order->delivery_info, TRUE);
            $order->payment_info = json_decode($order->payment_info, TRUE);
            return $order;
        });
        // DD($userOrders);
        // DD($userOrders[5]->products);
        return view('order.user_orders', [
            'userOrders' => $userOrders,
            'orderStage' => $stage
        ]);
    }


    public function admin_index() {
        return view('order.admin_order_management');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = $request->all();
        $relatedProductIds = [];
        $cartInfo = json_decode($order['cart_info'], TRUE);
        foreach ($cartInfo['items'] as $item) {
            array_push($relatedProductIds, $item['id']);
        }
        
        $newOrder = Auth::user()->orders()->create([
            'cart_info' => $order['cart_info'],
            'delivery_info' => $order['delivery_info'],
            'payment_info' => $order['payment_info'],
            'status' => $order['status']
        ]);

        //Insert INTO pivot table (order_product) for many-many relationship
        $newOrder->products()->attach($relatedProductIds);

        //Kill old cart in session
        $request->session()->forget('cart');
        
        http_response_code(200);
        return 'Order successful';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('order.details');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
