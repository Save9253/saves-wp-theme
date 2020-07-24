//Discription hide
const GiDis = document.querySelectorAll('.GiDis');
const GiCont = document.querySelectorAll('.GiA');
const Prds = document.querySelectorAll('.Prd');
if(screen.width > 900){
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
} else {
    for(let i = 0;i <= Prds.length-1; i++) {
        GiDis[i].style.height = "87px";
        GiDis[i].style.padding = "10px";
        GiCont[i].style.backgroundColor = "rgba(21,18,11,0)";
    };
};

//Shwitching Products
let l = 6;
if(screen.width < 900 && screen.width > 600){
    l = 4;
    document.querySelector('.Gi5').classList.add('hid');
    document.querySelector('.Gi6').classList.add('hid');
} else if (screen.width <= 600){
    l = 1;
    document.querySelector('.Gi2').classList.add('hid');
    document.querySelector('.Gi3').classList.add('hid');
    document.querySelector('.Gi4').classList.add('hid');
    document.querySelector('.Gi5').classList.add('hid');
    document.querySelector('.Gi6').classList.add('hid');
};
if(Prds.length>l){
    let g = 1;
    let p = l;
    setInterval(()=>{
        if(g>l){g=1};
        if(p>(Prds.length-1)){p=0};
        let Gi = document.querySelector('.Gi'+ g);
        Gi.style.opacity = 0;
        setTimeout(()=>{
            Gi.classList.remove('Gi'+ g);
            Gi.classList.add('hid');
            Prds[p].classList.remove('hid');
            Prds[p].classList.add('Gi'+(g));
            Prds[p].style.opacity = 0;
         },750);
        setTimeout(()=>{
            Prds[p].style.opacity = 1;
            g++;
            p++;
        },800);

    },4000);
};
