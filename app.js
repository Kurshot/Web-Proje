let isim, mail, metin = false;


function checkEmptyName(){
    let text = "";
    let x = document.querySelector("#inputIsim").value;
    if(x === ''){
        text = "Ad Soyad kısmı boş bırakılamaz";
    }
    else
        isim = true;
    document.querySelector(".hataBilgisiIsim").innerHTML = text;
}

function checkValidMail(){
    let text = "";
    let x = document.querySelector("#inputMail").value;
    if(x === ''){
        text = "Mail adresi kısmı boş bırakılamaz."
    }
    else{

    }
    document.querySelector(".hataBilgisiMail").innerHTML = text;
    
}

let button = document.getElementById("submitButton");

button.addEventListener('click',function (e)
{
    checkEmptyName();
    checkValidMail();
    if( isim === false || mail === false || metin === false)
        e.preventDefault();
    
});


