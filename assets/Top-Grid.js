//Discription hide
const GiDis = document.querySelectorAll('.GiDis');
const GiCont = document.querySelectorAll('.GiA');
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
            console.log('now 1');
        },750);
        setTimeout(()=>{
            console.log('now 2');
            Prds[p].style.opacity = 1;
            g++;
            p++;
        },800);

    },4000);
};
