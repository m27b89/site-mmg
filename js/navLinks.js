const navLinks = document.querySelectorAll(".menu__link");
const menuIcon = document.querySelector(".menu__link--icon");
const menuSubtitle = document.querySelectorAll(".menu__list-sub-item");
const titleDataForMenu = document.querySelector("#title__data");
//mob
const navLinksMob = document.querySelectorAll(".navigation__link");
const menuGamburger = document.querySelector(".menu__gamburger");
const menuGamburgerTop = document.querySelector(".t-gamburger");
const menuGamburgerBetween = document.querySelector(".b-gamburger");
const menuGamburgerBottom = document.querySelector(".bt-gamburger");
const menuNabigation = document.querySelector(".menu__navigation");

menuGamburger.addEventListener('click', function(){
    if(menuGamburgerTop.classList.contains('activeMob')){
        menuGamburgerTop.classList.remove('activeMob');
        menuGamburgerBetween.classList.remove('activeMob');
        menuGamburgerBottom.classList.remove('activeMob');
        menuNabigation.classList.remove('activeMob')
        setTimeout(function(){menuNabigation.style.display = "none"},1000);
    }
    else{
        menuNabigation.style.display = "block";
        setTimeout(function(){menuGamburgerTop.classList.add('activeMob');
        menuGamburgerBetween.classList.add('activeMob');
        menuGamburgerBottom.classList.add('activeMob');
        menuNabigation.classList.add('activeMob'),1000});
    }
    
})

for( let link of navLinksMob){
    link.addEventListener('click', function(){
        if(this.classList.contains('menu__link--active')){
            this.classList.remove('menu__link--active');
        }
        else{
            this.classList.add('menu__link--active')
            switch(this.innerHTML){
                case "Home":
                    clearColorLinks();
                    this.classList.add('menu__link--active');
                        break;
                case "News": 
                    clearColorLinks();
                    scrollToTop(1178);
                    this.classList.add('menu__link--active');
                        break;
                case "Products": 
                    this.classList.remove('menu__link--active');
                        break;
                case "Download":
                    clearColorLinks();
                    scrollToTop(1825);
                    this.classList.add('menu__link--active');
                        break;
                case "Contact":
                    clearColorLinks();
                    scrollToTop(3250);
                    this.classList.add('menu__link--active');
                        break;
                case "Login":
                    clearColorLinks();
                        break;
                default: break;
             };
        };
    });
};

menuSubtitle.forEach(list => {
    list.addEventListener('click', function(){
        titleDataForMenu.style.display = "block";
        setTimeout(clearTitleDataForMenu, 1500);
    })
})

function clearTitleDataForMenu(){
    titleDataForMenu.style.display = "none";
}

function clearColorLinks(){
    navLinks.forEach(link => {
        link.classList.remove('menu__link--active');
    })
};

for( let link of navLinks){
    link.addEventListener('click', function(){
        if(this.classList.contains('menu__link--active')){
            this.classList.remove('menu__link--active');
        }
        else{
            this.classList.add('menu__link--active')
            switch(this.innerHTML){
                case "Home":
                    clearColorLinks();
                    this.classList.add('menu__link--active');
                        break;
                case "News": 
                    clearColorLinks();
                    scrollToTop(1178);
                    this.classList.add('menu__link--active');
                        break;
                case "Products": 
                    this.classList.remove('menu__link--active');
                        break;
                case "Download":
                    clearColorLinks();
                    scrollToTop(1825);
                    this.classList.add('menu__link--active');
                        break;
                case "Contact":
                    clearColorLinks();
                    scrollToTop(3250);
                    this.classList.add('menu__link--active');
                        break;
                case "Login":
                    clearColorLinks();
                        break;
                default: break;
             };
        };
    });
};

function scrollToTop(eventList){
        window.scroll({
            left: 0,
            top: eventList,
            behavior: 'smooth',
        });
};