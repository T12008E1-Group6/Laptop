<?php

namespace App\Http\Controllers;

use App\comment_rating;
use Illuminate\Http\Request;

class CommentRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function admin_index($status) {
        switch ($status) {
            case 'waiting-check':
                $comment_ratings = comment_rating::where('status', 'waiting-check')
                            ->orderBy('created_at', 'desc')
                            ->paginate(7);
                break;
            case 'approved':
                $comment_ratings = comment_rating::where('status', 'approved')
                            ->orderBy('created_at', 'desc')
                            ->paginate(7);
                break;
            case 'rejected':
                $comment_ratings = comment_rating::where('status', 'rejected')
                            ->orderBy('created_at', 'desc')
                            ->paginate(7);
                break;
            default:
                $comment_ratings = comment_rating::orderBy('created_at', 'desc')
                            ->paginate(7);
                break;
        }

        return view('comment_rating.admin_comment_rating', [
            'comment_ratings' => $comment_ratings,
            'status' => $status
        ]);        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment_rating = $request->all();

        foreach ($comment_rating['commentRating'] as $cr) {
            if ($cr['ratingPoint'] < 5) {
                comment_rating::updateOrCreate(
                    [
                        'product_id' => $cr['productId'],
                        'user_id' => $comment_rating['user_id'],
                        'order_id' => $comment_rating['order_id']
                    ],
                    [
                        'comment_contents' => $cr['comment'],
                        'rating_points' => $cr['ratingPoint'],
                        'status' => 'waiting-check'
                    ]
                );
            } else {
                comment_rating::updateOrCreate(
                    [
                        'product_id' => $cr['productId'],
                        'user_id' => $comment_rating['user_id'],
                        'order_id' => $comment_rating['order_id']
                    ],
                    [
                        'comment_contents' => $cr['comment'],
                        'rating_points' => $cr['ratingPoint'],
                        'status' => 'approved'
                    ]
                );
            }
        }
        http_response_code(200);
        return 'successful';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comment_rating  $comment_rating
     * @return \Illuminate\Http\Response
     */
    public function show(comment_rating $comment_rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comment_rating  $comment_rating
     * @return \Illuminate\Http\Response
     */
    public function edit(comment_rating $comment_rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comment_rating  $comment_rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment_rating $comment_rating)
    {
        //
    }

    public function admin_update_status(Request $request) {
        $comment_ratingsStatus = $request->all();
        foreach ($comment_ratingsStatus as $os) {
            comment_rating::where('id', $os['comment_ratingId'])
                    ->update([
                        'status' => $os['comment_ratingstatus']
                    ]);
        }
        http_response_code(200);
        return 'successful';
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comment_rating  $comment_rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment_rating $comment_rating)
    {
        //
    }

}
