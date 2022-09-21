import { frontPage } from './frontPage';




let sidebar = document.querySelector(".sidebar");
sidebar.querySelector(".sidebar-content").style.setProperty('--height-sidebar', `${window.innerHeight * 0.01}px`);
window.addEventListener("resize", customMargin);

function customMargin() {
    document.documentElement.style.setProperty("--margin-left", `${sidebar.offsetWidth - 1}px`);
}
 
customMargin();

const header = document.querySelector(".header"),
    main = document.querySelector(".main");
window.addEventListener("resize", marginMain);

function marginMain() {
    let myHeight = document.documentElement.clientHeight - header.offsetHeight;
    main.style.setProperty("--margin-top", `${header.offsetHeight - 3}px`);
    main.style.setProperty("--height", `${myHeight}px`);
}

marginMain();

// let vh = window.innerHeight * 0.01;
// document.documentElement.style.setProperty('--vh', `${vh}px`);

window.addEventListener('resize', customVH);

function customVH() {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
}
 
customVH();

const burger = document.querySelector(".burger"),
    navigation = document.querySelector(".nav");
burger.addEventListener("click", function () {
    burger.classList.toggle("active");
    navigation.classList.toggle("active");
});

let nav_list = document.querySelectorAll(".nav-item");

nav_list.forEach(item => {
    item.addEventListener("click", function () {

        if (item.closest("nav")){
            burger.classList.remove("active");
            navigation.classList.remove("active");
        }
    })
})

// console.log(document.querySelectorAll("section"))
const sections = document.querySelectorAll("section"),
    nav_item = document.querySelectorAll(".nav-link");

for (let i = 0; i < sections.length; i++) {
    window.addEventListener("scroll", function () {
        let userScroll = window.pageYOffset + document.documentElement.clientHeight,
            topElement = sections[i].offsetTop,
            bottomElement = sections[i].offsetTop + sections[i].offsetHeight;

        if (userScroll >= topElement && userScroll <= bottomElement){
            nav_item.forEach(item => {
                item.classList.remove("active");
                if (item.getAttribute("href") === `#${sections[i].id}`){
                    item.classList.add("active");
                }
            })
        } if (userScroll < sections[0].offsetTop){
            nav_item.forEach(item => {
                item.classList.remove("active");
            })
        }
    })
}

const popUp = document.querySelector(".popup"),
      popUp_close = document.querySelectorAll(".popup-close"),
      popUp_open = document.querySelectorAll(".open-popup");

popUp_open.forEach(item => {
    item.addEventListener("click", activePopup);
})


popUp_close.forEach(item => {
    item.addEventListener("click", closePopup);
})

const dataTextPopup = {
    cooperation: "Wypełnij formularz, a my się odezwiemy wkrótce23333",
    consultation: "Wypełnij formularz, a my się odezwiemy wkrótce1111"
};

function activePopup() {
    let popupText = popUp.querySelector(".popup-text");
    popUp.classList.toggle("active");
    document.body.classList.toggle("no-scroll");
    // popupText.innerHTML = dataTextPopup[this.dataset.popup];

    
    // console.log(popupText);
}
function closePopup(){
    this.closest(".popup").classList.remove("active");
    document.body.classList.remove("no-scroll");
}

// PORTFOLIO


let portfolio_item = document.querySelectorAll(".goods-item"),
    popup_portfolio = document.querySelector(".popup-portfolio"),
    portfolio_res = document.querySelector(".popup-portfolio__content");

// 2DO: Generate response only on click:


portfolio_item.forEach(item => {
    item.addEventListener("click", function () {

        portfolio_res.innerHTML = "";
        portfolio_res.className = `popup-portfolio__content _${item.dataset.type}`;
        // portfolio_res.classList.add(`_${item.dataset.type}`);

        if (item.dataset.type === "360"){
            let script_block = document.createElement("script");
            // portfolio_res.classList.add("_360");

            let popup_orbitbu = document.createElement("div");
            popup_orbitbu.id = "popup-orbitbu";
            portfolio_res.insertAdjacentElement("beforeend", popup_orbitbu);
            script_block.innerHTML = `
                $(function() {
                inject_orbitvu(
                  'popup-orbitbu',
                  '/assets/img/portfolio/360/orbitvu12/',
                  '',
                  {
                    ovus_folder: "/assets/img/portfolio/360/presentations/${item.dataset.folder}",
                    content2: "yes",
                    width: "100%",
                    height: "100%"
                  });
            });
            `;

            portfolio_res.insertAdjacentElement("beforebegin", script_block);

            window.addEventListener("resize", orbitvu_height);

            function orbitvu_height(){
                if (document.documentElement.clientWidth < 768){
                    portfolio_res.style.height = portfolio_res.offsetWidth + "px";
                }
            }
            orbitvu_height();
        } else if (item.dataset.type === "photo"){
            // portfolio_res.classList.add("_photo");
            let res_item = document.createElement("img");
            // res_item.style.height = "0px";

            res_item.src = item.querySelector("img").getAttribute("src");
            window.addEventListener("resize", img_height);

            function img_height(){
                if (document.documentElement.clientWidth > 768 ){
                    res_item.style.height = (document.documentElement.clientHeight / 1.5) + "px";
                } else {
                    res_item.style.width = "100%";
                    portfolio_res.style.height = "auto";
                }
            }
            img_height();

            portfolio_res.insertAdjacentElement("beforeend", res_item);
        } else {
            // portfolio_res.classList.add("_video");
            let res_item = document.createElement("iframe");
            // portfolio_res.style.height = "0px";

            res_item.src = `https://www.youtube.com/embed/${item.dataset.video}`;

            window.addEventListener("resize", video_height);

            function video_height() {
                if (document.documentElement.clientWidth < 768){
                    portfolio_res.style.height = (portfolio_res.offsetWidth * 0.5625) + "px";
                }
            }
            video_height();

            portfolio_res.insertAdjacentElement("beforeend", res_item);
        }

        popup_portfolio.addEventListener("mousedown", close_popup);

        function close_popup(event){
            let e = event.target;
            if (!e.closest(".popup-portfolio__content")){
                popup_portfolio.classList.remove("active");
                document.body.classList.remove("no-scroll");
            }
        };

        popup_portfolio.classList.add("active");
        document.body.classList.add("no-scroll");
    })
})

// Items Portfolio filter start


if (!!document.querySelector("form.filter")) {
  console.log(!!document.querySelector("form.filter"));
  console.log(document.querySelector(".goods"));
  let filters_type = document.querySelectorAll(".filter-fields_type"),
    goods = document.querySelectorAll(".goods-item"),
    goods_block = document.querySelector(".goods"),
    sphere = document.querySelector(".filter-area"),
    data_goods = [];

  filters_type.forEach((item) => {
    if (item) {
      item.addEventListener("input", sortingGoods);
    }
  });

  if (sphere) {
    sphere.addEventListener("input", sortingGoods);
  }
  goods.forEach((good) => {
    data_goods.push(good);
  });

  let userSphere = "all",
    user_filter = "all";

  function sortingGoods(e) {
    let new_data_goods = [];
    const { target } = e;
    data_goods.forEach((good) => {
      if (target.tagName === "SELECT") {
        userSphere = target.value;
      }
      if (target.tagName === "INPUT") {
        user_filter = target.value;
      }

      if (userSphere === "all") {
        if (good.dataset.type === user_filter) {
          new_data_goods.push(good);
        } else if (user_filter === "all") {
          new_data_goods = data_goods;
        }
      } else if (user_filter === "all") {
        if (good.dataset.sphere === userSphere) {
          new_data_goods.push(good);
        } else if (userSphere === "all") {
          new_data_goods = data_goods;
        }
      } else if (
        good.dataset.type === user_filter &&
        good.dataset.sphere === userSphere
      ) {
        new_data_goods.push(good);
      }
    });

    setGood(new_data_goods);
  }
  
  // PORTFOLIO SLIDER

const portfolioSliderSettings = {
    dots: true,
    infinite: false,
    slidesPerRow: 3,
    rows: 2,
    prevArrow: '.slick-prevmy',
    nextArrow: '.slick-nextmy',
    swipe: false,
    adaptiveHeight: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesPerRow: 2,
                swipe: true,
                rows: 3
            }
        }
    ]
}



function setGood(new_data_goods){
    $('.goods').slick('unslick'); /* ONLY remove the classes and handlers added on initialize */
    goods_block.innerHTML = "";
    let goodItem_HTML = document.createElement("div");
    goodItem_HTML.className = "goods-item";

    new_data_goods.forEach(good => {
        goods_block.insertAdjacentElement("beforeend", good);
    });

    $('.goods').slick(portfolioSliderSettings);
    setingPagination();

}
    
$('.goods').slick(portfolioSliderSettings);

function setingPagination() {
    let pagin = document.querySelector(".slick-dots"),
        next_arrow = document.querySelector(".slick-next");

}
setingPagination();


let presentation_btn = document.querySelector(".main-presentation"),
    popup_presentation = document.querySelector(".popup-presentation"),
    videoContainer = document.querySelector('#popup-presentation_container'),
    video_link = "https://www.youtube.com/embed/Up74XD5Kunk?enablejsapi=1";

// presentation_btn.addEventListener("click", showPresentation);

function showPresentation(){
    // console.log(videoContainer.children.length)
    if (videoContainer.children.length == 0){
        let video = document.createElement("iframe");
        video.src = video_link;
        videoContainer.insertAdjacentElement("beforeend", video);
    }

    popup_presentation.classList.add("active");
    document.body.classList.add("no-scroll");

    window.addEventListener("resize", presentationHeight)
    function presentationHeight() {
        if (document.documentElement.clientWidth <= 768){
            videoContainer.style.height = (videoContainer.offsetWidth * 0.5625) + "px";
        }
    }
    presentationHeight();

    popup_presentation.addEventListener("click", function (event) {
        if (event.target !== videoContainer){
            this.classList.remove("active");
            document.body.classList.remove("no-scroll");
            callPlayer("pauseVideo");
        }
        if (!this.closest('.active')){
            callPlayer("pauseVideo");
        }
    })

    function callPlayer(func, args) {

        let iframe = videoContainer.querySelector("iframe");

        let src = iframe.getAttribute('src');
        if (src) {
            if (src.indexOf('youtube.com/embed') != -1) {
                iframe.contentWindow.postMessage(JSON.stringify({
                    'event': 'command',
                    'func': func,
                    'args': args || []
                }), "*");
            }
        }
    }
}
}








function loadYTscript(){
    var scriptUrl = 'https:\/\/www.youtube.com\/s\/player\/223a7479\/www-widgetapi.vflset\/www-widgetapi.js';if(!window["YT"])var YT={loading:0,loaded:0};if(!window["YTConfig"])var YTConfig={"host":"https://www.youtube.com"};
    if(!YT.loading){YT.loading=1;(function(){var l=[];YT.ready=function(f){if(YT.loaded)f();else l.push(f)};window.onYTReady=function(){YT.loaded=1;for(var i=0;i<l.length;i++)try{l[i]()}catch(e){}};YT.setConfig=function(c){for(var k in c)if(c.hasOwnProperty(k))YTConfig[k]=c[k]};var a=document.createElement("script");a.type="text/javascript";a.id="www-widgetapi-script";a.src=scriptUrl;a.async=true;var c=document.currentScript;if(c){var n=c.nonce||c.getAttribute("nonce");if(n)a.setAttribute("nonce",n)}var b=
        document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})()};
};

jQuery(function($){
    $(".mask-phone").mask("+48 999-999-999");
});

let lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy"
});


let scrollHeight = Math.max(
    document.body.scrollHeight, document.documentElement.scrollHeight,
    document.body.offsetHeight, document.documentElement.offsetHeight,
    document.body.clientHeight, document.documentElement.clientHeight
);



// FORMS

if(document.querySelectorAll('form').length > 0) {
    
    document.querySelectorAll('form').forEach((form) => {
        
        form.addEventListener('submit', (e) => {
            
            e.preventDefault();

            const request = new XMLHttpRequest();
            request.open('POST', '/telegram.php');
            const formData = new FormData(form);

            request.send(formData);

            const loader = document.createElement('div');
            loader.innerHTML = '<div></div><div></div><div></div><div></div>';
            loader.classList.add('lds-ellipsis');
            form.insertAdjacentElement('beforeend', loader);

            form.classList.add('submitted');

            request.addEventListener('load', () => {
                
                console.log(request.responseText);

                if(request.status == 200){
                    loader.remove();
                    document.querySelector('form.submitted .form__status-message--success').style.display = 'block';
                    setTimeout(() => {
                        document.querySelector('form.submitted .form__status-message--success').style.display = 'none';
                        form.classList.remove('submitted');
                    }, 3000)
                    form.reset();
                } else {
                    loader.remove();
                    document.querySelector('form.submitted .form__status-message--failure').style.display = 'block';
                    setTimeout(() => {
                        document.querySelector('form.submitted .form__status-message--failure').style.display = 'none';
                        form.classList.remove('submitted');
                    }, 3000)
                }
            })
        })

    })
}
 