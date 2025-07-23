let pred = document.getElementById("checkout_input_1");
pred.style.boxShadow = "0 0 5px rgba(0,0,0,0.75)";
for (let i = 2; i <= 8; i++) {
    let cur = document.getElementById("checkout_input_" + i);
    if (pred.offsetTop !== cur.offsetTop)
    {
        pred.style.borderTopRightRadius = "25px";
        pred.style.borderBottomRightRadius = "25px";
        cur.style.borderTopLeftRadius = "25px";
        cur.style.borderBottomLeftRadius = "25px";
    }
    cur.style.boxShadow = "0 0 5px rgba(0,0,0,0.75)";
    pred = cur;
}