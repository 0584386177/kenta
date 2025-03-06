// document.addEventListener("DOMContentLoaded",()=>{
//     const arrowDownMenu = document.querySelectorAll(".arrow-down-menu");
//     arrowDownMenu.forEach(elems => {
        
//     });
// })

const  tabItems = document.querySelectorAll(".tab-item");
    tabItems.forEach(item => {
        item.addEventListener("click",() =>{
            tabItems.forEach(tab => tab.classList.remove('active'));
            item.classList.add('active');
            
        })

    });