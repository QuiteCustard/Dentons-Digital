const toggle = document.querySelector(".menu-button");
const headerMenu = document.querySelector(".main-nav");

toggle.addEventListener("click", () =>{
    toggle.classList.toggle("open");
    headerMenu.classList.toggle("hidden");
    
    setTimeout(() => {
        headerMenu.classList.toggle("show");
    }, 100)
});