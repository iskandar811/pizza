<script>
<?php

include '_dbconnect.php';
session_start();

require 'vendor/autoload.php';

$stripe = new \Stripe\StripeClient('sk_test_51NMj4oHPGZa72dDEXxUoz4RntXrFRnxmBGVd5gJByVGDenZFxLlFz847gUNRccZov4PrAMjinWGOBXR0pkccsuI700e9CROX2U');

$checkout_session = $stripe->checkout->sessions->create([
  'line_items' => [[
    'price_data' => [
      'currency' => 'myr',
      'product_data' => [
        'name' => 'Pizza',
      ],
      'unit_amount' => 2000,
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => 'http://localhost:4242/success',
  'cancel_url' => 'http://localhost/spasstwo/stripe/cancel.php',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
?>
</script>