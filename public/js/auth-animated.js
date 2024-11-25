var show = document.querySelector(".log");
var hide = document.querySelector(".reg");

document.querySelector(".but1").addEventListener("click", function () {
    show.classList.remove("active");
    hide.classList.add("active");
});

document.querySelector(".but2").addEventListener("click", function () {
    show.classList.add("active");
    hide.classList.remove("active");
});