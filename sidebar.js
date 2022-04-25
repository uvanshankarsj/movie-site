const menuiconbutton=document.querySelector("[data-menu-icon-btn]")
const sidebar=document.querySelector("[data-sidebar]")
const content=document.querySelector("[data-content]")
const likebutton=document.querySelector("[like-change]")

menuiconbutton.addEventListener("click", ()=>{
    sidebar.classList.toggle("open")
    content.classList.toggle("open")
    likebutton.classList.toggle("open")
})
likebutton.addEventListener("click", ()=>{
    likebutton.classList.toggle("liked")
})
