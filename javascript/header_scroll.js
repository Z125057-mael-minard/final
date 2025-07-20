let p_y = window.scrollY;
window.onscroll = function header_scroll()
    {
        let h = document.getElementById("header");
        if (h === null)
        {
            h = document.getElementById("admin_header");
        }
        let cur_y = window.scrollY;
        if(p_y > cur_y && h.style.top !== "0")
        {
            h.style.top = "0";
        }
        else
        {
            h.style.top = "-127.5px";
        }
        p_y = cur_y;
    }