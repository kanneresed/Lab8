<?php require_once('./config.php'); ?>
<form action="charge.php" method="post">
    <input type="number" id="montant" name="montant" value="montant"/>
    <input type="text" name="email" value="email"/>
    <script
        src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
        data-key="pk_test_hRtsw77pTcUjhl30IF3IlT9Z"
        data-amount=""
        data-name="Demo Site"
        data-description="2 widgets ($20.00)"
        data-currency="cad"
        data-image="/128x128.png">
    </script>



</form>