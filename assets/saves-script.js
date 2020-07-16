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
const GiDis = document.querySelectorAll('.GiDis');
const GiCont = document.querySelectorAll('.GiCont');
const Prds = document.querySelectorAll('.Prd');
for(let i = 0;i <= Prds.length-1; i++) {
    Prds[i].addEventListener('mouseover',()=>{
        GiDis[i].style.height = "87px";
        GiDis[i].style.padding = "10px";
        GiCont[i].style.backgroundColor = "rgba(21,18,11,0)";
    });
    Prds[i].addEventListener('mouseleave',()=>{
        GiDis[i].style.height = "0px";
        GiDis[i].style.padding = "0px";
        GiCont[i].style.backgroundColor = "rgba(21,18,11,0.5)";
    });
};

//Shwitching Products
if(Prds.length>6){
    let g = 1;
    let p = 6;
    setInterval(()=>{
        if(g>6){g=1};
        if(p>(Prds.length-1)){p=0};
        let Gi = document.querySelector('.Gi'+ g);
        Gi.style.opacity = 0;
        setTimeout(()=>{
            Gi.classList.remove('Gi'+ g);
            Gi.classList.add('hid');
            Prds[p].classList.remove('hid');
            Prds[p].classList.add('Gi'+(g));
            Prds[p].style.opacity = 0;
            Prds[p].style.opacity = 1;
            g++;
            p++;
        },500);

    },4000);
};

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
