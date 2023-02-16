const toggle = document.querySelector(".menu-button");
const headerMenu = document.querySelector(".menu-header-menu-container");

toggle.addEventListener("click", () =>{
    toggle.classList.toggle("open");
    headerMenu.classList.toggle("hidden");
    
    setTimeout(() => {
        headerMenu.classList.toggle("show");
    }, 100)
});