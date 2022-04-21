let isim, mail, metin = false;

function checkValidName(){
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
    else{ // Mail kısmı boş bırakılmamış ise
        let mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(x.match(mailFormat)){
            mail = true;
            text = "";
        }
        else
            text = "Lütfen e-mail formatında girdi giriniz."
    }
    document.querySelector(".hataBilgisiMail").innerHTML = text;
    
}

let button = document.getElementById("submitButton");

button.addEventListener('click',function (e)
{
    checkValidName();
    checkValidMail();
    if( isim === false || mail === false || metin === false)
        e.preventDefault();
    
});


