

<?php
require_once('./stripe/lib/Stripe.php');

$stripe = array(
    "secret_key"      => "sk_test_dgMj1YCWrYZu9rUwMdYMwy5k",
    "publishable_key" => "pk_test_hRtsw77pTcUjhl30IF3IlT9Z"
);

Stripe::setApiKey($stripe['secret_key']);
?>

