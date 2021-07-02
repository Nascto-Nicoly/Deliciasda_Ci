
function openNav() {

    var x = document.getElementById("menu");

    if (x.className === "menu") {
        x.className += "menujs";
    } else {
        x.className = "menu";
    }
}