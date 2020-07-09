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
