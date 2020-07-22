//Search functioning
const srchBtn = document.querySelector('#srchBtn');
const srchFld = document.querySelector('#s');
const GH = document.querySelector('#GH');
let GHw = "200";

//if(GH != null){GHw = GH.clientWidth - 70;}

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
