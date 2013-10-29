<form action="charge.php" method="POST" id="payment-form">
    <span class="payment-errors"></span>

    <div class="form-row">
        <label>
            <span>Card Number</span>
            <input type="text" size="20" id="montant" data-stripe="number"/>
        </label>
    </div>

    <div class="form-row">
        <label>
            <span>CVC</span>
            <input type="text" size="4" data-stripe="cvc"/>
        </label>
    </div>

    <div class="form-row">
        <label>
            <span>Expiration (MM/YYYY)</span>
            <input type="text" size="2" data-stripe="exp-month"/>
        </label>
        <span> / </span>
        <label>
            <input type="text" size="4" data-stripe="exp-year"/>
        </label>
    </div>

    <button type="submit">Submit Payment</button>
</form>

