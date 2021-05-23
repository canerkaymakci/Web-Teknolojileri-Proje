function isimKontrol() {

    var input=document.getElementById("iletisimForm").isim.value;

    if(input==""){
        document.getElementById("isim").placeholder='İsim Boş Olamaz';
        document.getElementById("isim").style.border='2px solid red';
        return false;
    }
    else if(input.length<2){
        document.getElementById("isim").value="";
        document.getElementById("isim").style.border='2px solid red';
        document.getElementById("isim").placeholder='İsim Alanına Tek Harf Girilmez';
        return false;
    }
    else{
        document.getElementById("isim").style.border='2px solid green';
        return true;
    }
}

function soyisimKontrol() {

    var input=document.getElementById("iletisimForm").soyisim.value;

    if(input==""){
        document.getElementById("soyisim").placeholder='Soyisim Boş Olamaz';
        document.getElementById("soyisim").style.border='2px solid red';
        return false;
    }
    else if(input.length<2){
        document.getElementById("soyisim").value="";
        document.getElementById("soyisim").style.border='2px solid red';
        document.getElementById("soyisim").placeholder='Soyisim Alanına Tek Harf Girilmez';
        return false;
    }
    else{
        document.getElementById("soyisim").style.border='2px solid green';
        return true;
    }
}

function mailKontrol() {

    var input=document.getElementById("iletisimForm").mail.value;


    if(input==""){
        document.getElementById("mail").placeholder='Mail Boş Olamaz';
        document.getElementById("mail").style.border='2px solid red';
        return false;
    }
    else if(input!=""&&input.includes('@')==false){
        document.getElementById("mail").value="";
        document.getElementById("mail").placeholder='Geçerli Bir Mail Giriniz';
        document.getElementById("mail").style.border='2px solid red';
        return false;
    }
    else if(input.includes('@')==true&&input!=""){
        document.getElementById("mail").style.border='2px solid green';
        return true;
    }
}

function cinsiyetKontrol() {
    var input=document.getElementsByName("cinsiyet").value;

    if(input==""){
        document.getElementByName("cinsiyet").array.forEach((element) => {element.style.border='2px solid red';});
        return false;
    }
    else{
        document.getElementByName("cinsiyet").array.forEach((element) => {element.style.border='none';});
        return true;
    }
}

function secimKontrol() {
    var input=document.getElementById("iletisimForm").secim.value;
    
    if(input=="ilkSecim"){
        document.getElementById("secim").style.border='2px solid red';
        return false;
    }
    else{
        document.getElementById("secim").style.border='2px solid green';
        return true;
    }
}

function mesajKontrol() {
    var input=document.getElementById("iletisimForm").mesaj.value;

    if(input==""){
        document.getElementById("mesaj").placeholder='Mesaj Boş Olamaz';
        document.getElementById("mesaj").style.border='2px solid red';
        return false;
    }
    else{
        document.getElementById("mesaj").style.border='2px solid green';
        return true;
    }
}

function genelKontrol() {
    if(isimKontrol()&&soyisimKontrol()&&mailKontrol()&&secimKontrol()&&mesajKontrol()){
        return true;
    }
    else{alert("Gönderme Başarısız!");
        return false;}
    
    
}