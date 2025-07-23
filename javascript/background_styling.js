let screen_height = document.body.scrollHeight;
let screen_width = window.innerWidth;
let back_width = screen_width;
if(screen_width < 600)
{
    back_width = screen_width * 3;
}
else if(screen_width < 900)
{
    back_width = screen_width * 1.5;
}
let season = getSeason(new Date());

let header = document.getElementById("header");
let slide = document.getElementById("slider_container");
let filter = document.getElementById("filter-container");
let login = document.getElementById("login_button");
let register = document.getElementById("register_button");
let addToCart = document.getElementById("add_to_cart")
let checkout = document.getElementById("checkout_button");
let send = document.getElementById("send_checkout");
let thanks = document.getElementById("thank_you");
let success = document.getElementById("successful_register");
let account = document.getElementById("account_info_container");
let accountInfoButton = document.getElementById("account_info_change");
let accountPassButton = document.getElementById("account_password_change");
let accountChanges =document.getElementById("account_change_yes");

if (header !== null)
{
    header.style.backgroundImage = "url('" + season + "')";
    header.style.backgroundSize = back_width + "px";
}
if (filter !== null)
{
    filter.style.backgroundImage = "url('" + season + "')";
    filter.style.backgroundSize = back_width + "px";
}
if (slide !== null)
{
    slide.style.backgroundImage = "url('" + season + "')";
    slide.style.backgroundSize = back_width + "px";
}
if (login !== null)
{
    login.style.backgroundImage = "url('" + season + "')";
    login.style.backgroundSize = back_width + "px";
}
if (register !== null)
{
    register.style.backgroundImage = "url('" + season + "')";
    register.style.backgroundSize = back_width + "px";
}
if (addToCart !== null)
{
    addToCart.style.backgroundImage = "url('" + season + "')";
    addToCart.style.backgroundSize = back_width + "px";
}
if (checkout !== null)
{
    checkout.style.backgroundImage = "url('" + season + "')";
    checkout.style.backgroundSize = back_width + "px";
}
if (send !== null)
{
    send.style.backgroundImage = "url('" + season + "')";
    send.style.backgroundSize = back_width + "px";
}
if (thanks !== null)
{
    thanks.style.backgroundImage = "url('" + season + "')";
    thanks.style.backgroundSize = back_width + "px";
}
if (success !== null)
{
    success.style.backgroundImage = "url('../" + season + "')";
    success.style.backgroundSize = back_width + "px";
}
if (account !== null)
{
    account.style.backgroundImage = "url('" + season + "')";
    account.style.backgroundSize = back_width + "px";
}
if (accountInfoButton !== null)
{
    accountInfoButton.style.backgroundImage = "url('" + season + "')";
    accountInfoButton.style.backgroundSize = back_width + "px";
}
if (accountPassButton !== null)
{
    accountPassButton.style.backgroundImage = "url('" + season + "')";
    accountPassButton.style.backgroundSize = back_width + "px";
}
if (accountChanges !== null)
{
    accountChanges.style.backgroundImage = "url('" + season + "')";
    accountChanges.style.backgroundSize = back_width + "px";
}

function getSeason(date)
{
    const month = date.getMonth();
    const day = date.getDate();

    if ((month === 11 && day >= 1) || month === 0 || month === 1) {
        return "imgs/Winter_blur.png";
    } else if (month === 2 || month === 3 || month === 4) {
        return "imgs/Blossom_blur.png";
    } else if (month === 5 || month === 6 || month === 7) {
        return "imgs/Summer_blur.png";
    } else if (month === 8 || month === 9 || month === 10) {
        return "imgs/Fall_blur.png";
    } else {
        return "";
    }
}

function set_disks()
{
    let disk;
    let size;
    let x;
    let y;
    let innerDisks = 3;

    for (let i = 1; i < 12; i++) {
        //disk setting
        disk = document.getElementById("disk-" + i);
        size = Math.floor(Math.random() * screen_width * 0.5 + 200);
        x = Math.floor(Math.random() * screen_width -(size*0.5));
        y = Math.floor(Math.random() * (screen_height-500)) -(size*0.75) + 1500;
        disk.style.top = y + "px";
        disk.style.left = x + "px";
        disk.style.width = size + "px";
        disk.style.height = size + "px";
        disk.style.backgroundImage = "url('" + season + "')";
        disk.style.backgroundSize = back_width + "px";

        //white inner disk probable setting
        if (innerDisks > 0 && Math.floor(Math.random() * 5) === 1)
        {
            let innerDisk = document.getElementById("inner-disk-" + innerDisks);
            innerDisk.style.top = (y + size * 0.075) + "px";
            innerDisk.style.left = (x + size * 0.075) + "px";
            innerDisk.style.width = (size * 0.85) + "px";
            innerDisk.style.height = (size * 0.85) + "px";
            innerDisk.style.borderWidth = (size * 0.25) + "px";
            innerDisks--;
        }
    }
}
