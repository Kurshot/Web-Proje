// login.html için javascript dosyası

let mail, sifre = false;

// Mail adresi kontrolü

function checkValidMail(){
    let text = "";
    let x = document.querySelector("#inputMail").value;
    if(x === '' || x.trim().length === 0){
        text = "Mail adresi kısmı boş bırakılamaz."
        mail = false;
    }
    else{ // Mail kısmı boş bırakılmamış ise
        let mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(x.match(mailFormat)){
            mail = true;
            text = "";
        }
        else{
            text = "Lütfen e-mail formatında girdi giriniz."
            mail = false;
        }
            
    }
    document.querySelector(".hataBilgisiMail").innerHTML = text;  
}

// Şifre kontrolü

function checkValidPassword(){
    let text = "";
    let x = document.querySelector("#inputPassword").value;
    if(x === '' || x.trim().length === 0){
        text = "Şifre kısmı boş bırakılamaz."
        sifre = false;
    }
    else
        sifre = true;
    document.querySelector(".hataBilgisiSifre").innerHTML = text;
}


let button = document.getElementById("submitButton");

button.addEventListener('click',function (e)
{

    checkValidMail();
    checkValidPassword();

    if( !(mail && sifre) )
        e.preventDefault();    
});
