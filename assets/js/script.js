window.addEventListener("scroll", function () {
    var nav = document.querySelector("nav");
    nav.classList.toggle("sticky", window.scrollY > 0)
});


var navList = document.getElementById('navList');
function showMenu() {
    navList.style.right = "0";
}

function hideMenu() {
    navList.style.right = "-300px";
};