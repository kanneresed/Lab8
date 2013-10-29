<?php
require_once(dirname(__FILE__) . '/config.php');
$token  = $_POST['stripeToken'];
try{
    $customer = Stripe_Customer::create(array(
        'email' => $_POST['email'],
        'card'  => $token
));
}catch(Exception $e)
{
    echo $e;
}
$charge = Stripe_Charge::create(array(
    'customer' => $customer->id,
    'amount'   => $_POST['montant'],
    'currency' => 'cad'
));

echo '<h1>Successfully charged '. $_POST["montant"].'$ </h1>';
?>

