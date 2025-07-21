function is_cart_empty(n)
{
    document.write(n);
    let message = document.getElementById("empty_cart");
    let checkout = document.getElementById("checkout_button");
    if (n !== 0)
    {
        message.style.display = "none";
        checkout.disabled = false;
    }
    else
    {
        message.style.display = "flex";
        checkout.disabled = true;
    }
}