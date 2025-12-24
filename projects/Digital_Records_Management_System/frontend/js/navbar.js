
const links = document.querySelectorAll('.link');
const  tabContents = document.querySelectorAll(".tabContent")

// looping through the array/list of navbar links
links.forEach((link,index)=>{

    link.addEventListener('click',()=>{
        
        // looping each tab to remove the active_link class if it exist in any
        links.forEach((tab)=>{

            tab.classList.remove("active_link");
            console.log("activated mood");

        });

         tabContents.forEach((tabContent)=>{
            tabContent.classList.remove("sectionActive");
        })

        // console.log(index) 
        // adding the active_link class to the link that is just been clicked
        link.classList.add("active_link");
        tabContents[index].classList.add("sectionActive");
    });
});








