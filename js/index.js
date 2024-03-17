const links = document.querySelectorAll("nav li");

icons.addEventListener("click", () => {
    console.log('hey')
    nav.classList.toggle("active")
})

links.forEach((link) => {
    link.addEventListener("click", () => {
        nav.classList.remove("active");
    })
})