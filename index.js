var page = 1;
function OpenEgg(){
    var page1 = document.getElementById('form1');
    var page2 = document.getElementById('form2');
    if(page == 1)
    {
        page1.style.height = "0px";
        page2.style.height = "500px";
        page = 2;
    }
    else
    {
        page2.style.height = "0px";
        page1.style.height = "500px";
        page = 1;
    }
}