let isim, mail, metin, checkbox = false;

// Ad Soyad kontrolü

function checkValidName(){ 
    let text = "";
    let x = document.querySelector("#inputIsim").value;
    if(x === '' || x.trim().length === 0){
        text = "Ad Soyad kısmı boş bırakılamaz.";
        isim = false;
    }
    else
        isim = true;
    document.querySelector(".hataBilgisiIsim").innerHTML = text;
}

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

// Textarea kontrolü

function checkValidText(){
    let text = "";
    let x = document.querySelector("#inputText").value;
    if(x === '' || x.trim().length === 0){
        text = "Mesaj kısmı boş bırakılamaz.";
        metin = false;
    }
    else
        metin = true;
    document.querySelector(".hataBilgisiMetin").innerHTML = text;
}

 // Checkbox kontrolü

function checkValidCheckbox(){
    let text = "";
    let x = document.querySelector("#inputCheckbox");
    if(x.checked){
        checkbox = true;
        text = "";
    }
    else{
        checkbox = false;
        text = "Lütfen bilgilerin doğruluğunu onaylayınız."
    }
    document.querySelector(".hataBilgisiCheckbox").innerHTML = text;

}

let button = document.getElementById("submitButton");

button.addEventListener('click',function (e)
{
    checkValidName();
    checkValidMail();
    checkValidText();
    checkValidCheckbox();
    if( !(isim && mail && metin && checkbox) )
        e.preventDefault();    
});


