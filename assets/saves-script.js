//Search functioning
const srchBtn = document.querySelector('#srchBtn');
const srchFld = document.querySelector('#s');
const GH = document.querySelector('#GH');
let GHw = "300px";

if(GH != null){GHw = GH.clientWidth - 70;}

srchBtn.addEventListener('click',() => {
    if(srchFld.value == ""){
        if(srchFld.style.width == "0px"){
            srchFld.style.width = GHw + "px";
        }else if(srchFld.style.width == GHw + "px"){
            srchFld.style.width = "0px";
        };
    } else {
        srchBtn.type = "submit";
    }
});

//Discription hide
const Gis = Array.from(document.querySelectorAll('.topGridi'));
const GiDis = document.querySelectorAll('.GiDis');
const GiCont = document.querySelectorAll('.GiCont');
for(let i = 0;i <= 5; i++) {
    Gis[i].addEventListener('mouseover',()=>{
        GiDis[i].style.height = "87px";
        GiDis[i].style.padding = "10px";
        GiCont[i].style.backgroundColor = "rgba(21,18,11,0)";
    });
    Gis[i].addEventListener('mouseleave',()=>{
        GiDis[i].style.height = "0px";
        GiDis[i].style.padding = "0px";
        GiCont[i].style.backgroundColor = "rgba(21,18,11,0.5)";
    });
}
//LogoShrink
/*const logo = document.querySelector('#logo');
addEventListener('scroll',() => {
    if(window.scrollY != 0){
        logo.classList.add('logoShrink');
    } else {
        logo.classList.remove('logoShrink');
    }
});
*/
