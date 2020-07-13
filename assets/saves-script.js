//Search functioning
const srchBtn = document.querySelector('#srchBtn');
const srchFld = document.querySelector('#s');
const GH = document.querySelector('#GH');

srchBtn.addEventListener('click',() => {
    if(srchFld.value == ""){
        if(srchFld.style.width == "0px"){
            srchFld.style.width = "300px";
        }else if(srchFld.style.width == "300px"){
            srchFld.style.width = "0px";
        };
    } else {
        srchBtn.type = "submit";
    }
});

//LogoShrink
const logo = document.querySelector('#logo');
addEventListener('scroll',() => {
    if(window.scrollY != 0){
        logo.classList.add('logoShrink');
    } else {
        logo.classList.remove('logoShrink');
    }
});
