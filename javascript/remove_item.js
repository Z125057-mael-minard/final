function remove_item(product_id) {
    const formData = new FormData();
    formData.append("item_id", itemId);
    formData.append("quantity", 1); // hardcoded for now
    formData.append("action", "add"); // hardcoded for now

    fetch("api/store_shoppingcartitem.php", {
        method: "POST",
        body: formData,
        credentials: "include" // to maintain PHP session
    })
        .then(response => response.json())
        .then(data => {
            console.log("Item added to cart:", data);
            // You can show a toast message or visual feedback here
            var AddToCart_icon = "add_carticon_" + itemId;
            var RemoveFromCart_icon = "remove_carticon_" + itemId;
            document.getElementById(AddToCart_icon).style.display = "none";
            document.getElementById(RemoveFromCart_icon).style.display = "block";
        })
        .catch(error => {
            console.error("Error adding to cart:", error);
        });
}