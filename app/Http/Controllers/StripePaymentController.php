<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Error;
use App\product;


class StripePaymentController extends Controller
{
  public function postStripePayment(Request $request) {
    
    Stripe::setApiKey('sk_test_51J5VfyLC7Uq3V5YFCOAvqyQR3zmg4YAlDf8beJRp7tY8zSTKIpvc4jJfVQSsqutnqLMM71pi11hbfhdIS1IpBdMy00vlt2pYF1');
    
    function calculateOrderAmount(array $items): int {
      $orderAmount = 0;
      
      foreach ($items as $item) {
        $laptop = product::find($item['id']);
        $orderAmount += ($laptop->product_price * $item['qty']); // Re-calculate order amount from server product_price
      }
      return $orderAmount;
    }
    
    try {
      $json_obj = $request->all();
    
      $paymentIntent = PaymentIntent::create([
        'amount' => calculateOrderAmount($json_obj['items']),
        'currency' => 'vnd',
      ]);
    
      $output = [
        'clientSecret' => $paymentIntent->client_secret,
        // 'clientSecret' => calculateOrderAmount($json_obj['items'])
      ];
    
      http_response_code(200);
      return json_encode($output);
    } catch (Error $e) {
      http_response_code(500);
      return json_encode(['error' => $e->getMessage()]);
    }

  }
}
