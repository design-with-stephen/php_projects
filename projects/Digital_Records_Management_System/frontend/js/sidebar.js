// sidebar
const close_sidebar = document.querySelector(".fa-xmark");
const hamburger = document.querySelector(".fa-bars-staggered");
const sidebar = document.querySelector(".sidebar");

hamburger.addEventListener("click", () => {

    if(!sidebar.classList.contains("active")){

        sidebar.classList.add("active");
        document.body.classList.add("sidebar-open");
    
    }else{

        sidebar.classList.remove("active");
        document.body.classList.remove("sidebar-open");
    }
    
});


close_sidebar.addEventListener("click", () => {

    sidebar.classList.remove("active");
    document.body.classList.remove("sidebar-open");

    // alert("hi");
});