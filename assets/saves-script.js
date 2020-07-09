//Search functioning
const srchBtn = document.querySelector('#srchBtn');
const srchFld = document.querySelector('#s');
srchBtn.addEventListener('click',() => {
    if(srchFld.value == ""){
        if(srchFld.style.width == "0px"){
            srchFld.style.width = "200px";
        }else if(srchFld.style.width == "200px"){
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
        console.log('not 0')
    } else {
        logo.classList.remove('logoShrink');
        console.log('0')
    }
});
