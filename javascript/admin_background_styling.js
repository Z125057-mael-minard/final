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
let season = admin_getSeason(new Date());

let adminHeader = document.getElementById("admin_header");
let add = document.getElementById("add_product");
let edit = document.getElementById("edit_product");
let orderBack = document.getElementById("order_details_back");

if (adminHeader !== null)
{
    adminHeader.style.backgroundImage = "url('../" + season + "')";
    adminHeader.style.backgroundSize = back_width + "px";
}
if (add !== null)
{
    add.style.backgroundImage = "url('../" + season + "')";
    add.style.backgroundSize = back_width + "px";
}
if (edit !== null)
{
    edit.style.backgroundImage = "url('../" + season + "')";
    edit.style.backgroundSize = back_width + "px";
}
if (orderBack !== null)
{
    orderBack.style.backgroundImage = "url('../" + season + "')";
    orderBack.style.backgroundSize = back_width + "px";
}

function admin_getSeason(date)
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

function admin_set_disks()
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
        y = Math.floor(Math.random() * (screen_height-200) -(size*0.75)) + 1000;
        disk.style.top = y + "px";
        disk.style.left = x + "px";
        disk.style.width = size + "px";
        disk.style.height = size + "px";
        disk.style.backgroundImage = "url('../" + season + "')";
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
