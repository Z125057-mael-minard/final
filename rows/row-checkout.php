<div class="container">
    <div class="container-fluid">
        <div class="checkout-container">
            <form action="php_scripts/checkout.php" method="post">
                <h3>Shipping information</h3>
                <input type="text" name="shipping_name" placeholder="Name" required>
                <input type="text" name="shipping_country" placeholder="Country" required>
                <input type="text" name="shipping_city" placeholder="City" required>
                <input type="text" name="shipping_street" placeholder="Street" required>
                <input type="text" name="shipping_houseNr" placeholder="House Nr" required>

                <h3>Creditcard info</h3>
                <input type="text" name="creditcard_name" placeholder="Name" required>
                <input type="date" name="creditcard_expDate" placeholder="Expiration date" required>
                <input type="text" name="creditcard_csv" placeholder="CSV" required>

                <input type="submit">
            </form>
        </div>
    </div>
</div>