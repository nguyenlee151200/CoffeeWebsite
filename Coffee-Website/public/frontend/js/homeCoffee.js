document.addEventListener("DOMContentLoaded",function(){
    var navbar = $(".navbar");
    $(window).scroll(function(){
        var oTop = $(".service_area").offset().top-window.innerHeight;
        if($(window).scrollTop()>oTop){
            navbar.addClass('navbar_fixed');
			
        }else{
             navbar.removeClass('navbar_fixed');
			
        }
    });
     var social= $(".social");
     $(window).outerWidth(function(){
        var oWidth=$(".col-md-2.col-12").offset().width-window.innerWidth;
        if($(window).innerWidth()<oWidth ){
            social.removeClass('.col-md-2.col-12');
        }
     });
    $(function(){
        new WOW().init();
        
    }); 

    const container = document.querySelector('.rating');
    const items = container.querySelectorAll('.rating-item')
    container.onClick = e =>{
        const elClass = e.target.classList;
        if(!elClass.container('active')){
            items.forEach(
                item => item.classList.remove('active')
                
            );
            console.log(e.target.getAttribute("data-rate"));
            elClass.add('active');
           
        }
    };
},false)
    // document.addEventListener("DOMContentLoaded",function(){
    //     var navbar = $(".navbar");
    //     $(window).scroll(function(){
    //         var oTop = $(".team").offset().top-window.innerHeight;
    //         if($(window).scrollTop()>oTop){
    //             navbar.addClass('navbar_fixed');
    //         }else{
    //              navbar.removeClass('navbar_fixed');
    //         }
    //     });

    const menu = document.querySelector(".menu");
    const menuMain = menu.querySelector(".menu-main");
    const goBack = menu.querySelector(".go-back");
    const menuTrigger = document.querySelector(".mobile-menu-trigger");
    const closeMenu = menu.querySelector(".mobile-menu-close");
    let subMenu;
    menuMain.addEventListener("click", (e) =>{
        if(!menu.classList.contains("active")){
            return;
        }
      if(e.target.closest(".menu-item-has-children")){
           const hasChildren = e.target.closest(".menu-item-has-children");
         showSubMenu(hasChildren);
      }
    });
    goBack.addEventListener("click",() =>{
         hideSubMenu();
    })
    menuTrigger.addEventListener("click",() =>{
         toggleMenu();
    })
    closeMenu.addEventListener("click",() =>{
         toggleMenu();
    })
    document.querySelector(".menu-overlay").addEventListener("click",() =>{
        toggleMenu();
    })
    function toggleMenu(){
        menu.classList.toggle("active");
        document.querySelector(".menu-overlay").classList.toggle("active");
    }
    function showSubMenu(hasChildren){
       subMenu = hasChildren.querySelector(".sub-menu");
       subMenu.classList.add("active");
       subMenu.style.animation = "slideLeft 0.5s ease forwards";
       const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
       menu.querySelector(".current-menu-title").innerHTML=menuTitle;
       menu.querySelector(".mobile-menu-head").classList.add("active");
    }
   
    function  hideSubMenu(){  
       subMenu.style.animation = "slideRight 0.5s ease forwards";
       setTimeout(() =>{
          subMenu.classList.remove("active");	
       },300); 
       menu.querySelector(".current-menu-title").innerHTML="";
       menu.querySelector(".mobile-menu-head").classList.remove("active");
    }
    
    window.onresize = function(){
        if(this.innerWidth >991){
            if(menu.classList.contains("active")){
                toggleMenu();
            }
   
        }
    }