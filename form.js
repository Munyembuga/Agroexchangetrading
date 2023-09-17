var fnameerror = document.getElementById('fname-error');
var phoneerror = document.getElementById('phone-error');
var emailerror = document.getElementById('email-error');
var messageerror = document.getElementById('message-error');
var countryerror = document.getElementById('country-error');
var provinceerror = document.getElementById('province-error');
var districterror = document.getElementById('district-error');
var sectorerror = document.getElementById('sector-error');
var cellerror = document.getElementById('cell-error');
var villageerror = document.getElementById('village-error');
var submiterror = document.getElementById('submit-error');
  var radio = document.getElementById('radio');
function validatename(){
    var name = document.getElementById('fname-name').value;

    if(name.length == 0){
        fnameerror.innerHTML = 'name is required';
        return false;
    }
   
    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
        fnameerror.innerHTML = 'Write full name';
        return false;
    }
    fnameerror.innerHTML = '';
    return true;
     
}
function validatephone(){
    var phone=document.getElementById('contact-phone').value;
     if(phone.length==0){
        phoneerror.innerHTML='phone is requied';
        return false;
     }
     if(phone.length !== 10){
        phoneerror.innerHTML='can write correct number';
        return false;
     }
     if(!phone.match(/^[0-9]{10}$/)){
        phoneerror.innerHTML='please write atleast 10 digit';
        return false;

     }
     phoneerror.innerHTML='';
     return true;

}
function validatemessage(){
    var message=document.getElementById(contact-message).value;
    var required=30;
    var left=required - message.length;
    if(left>0){
        messageerror.innerHTML= left + 'fill message';
        return false;
    }
    messageerror.innerHTML='';
    return true;
}

function validateemail(){
    var email = document.getElementById('contact-email').value;

 if(email.length == 0){
    emailerror.innerHTM = 'Please write your email';
     return false;
     }
 if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
         emailerror.innerHTML = 'Email Invalid';
     return false;
      }
     emailerror.innerHTML = '';
     return true;


}
function validateprovince(){
    var province = document.getElementById('contact-province').value;

    if(province.length ==0)
    {
        provinceerror.innerHTML = 'please Write province';
        return false;

    }
    provinceerror.innerHTML = '';
    return true;
}
function validatedistrict(){
    var district = document.getElementById('contact-district').value;

    if(district.length ==0)
    {
        districterror.innerHTML = 'please Write District';
        return false;

    }
    districterror.innerHTML = '';
    return true;
}
function validatesector(){
    var sector = document.getElementById('contact-sector').value;

    if(sector.length ==0)
    {
        sectorerror.innerHTML = 'please Write Sector';
        return false;

    }
    sectorerror.innerHTML = '';
    return true;
}
function validatecell(){
    var cell = document.getElementById('contact-cell').value;

    if(cell.length ==0)
    {
        cellerror.innerHTML = 'please Write cell';
        return false;

    }
    cellerror.innerHTML = '';
    return true;
}
function validatevillage(){
    var village= document.getElementById('contact-village').value;

    if(village.length ==0)
    {
        villageerror.innerHTML = 'please Write village';
        return false;

    }
    villageerror.innerHTML = '';
    return true;
}



function validatecountry(){
    var country = document.getElementById('contact-country').value;

    if(country.length ==0)
    {
        countryerror.innerHTML = 'please Write Country';
        return false;
    }
    if(!country =='Rwanda'){
        countryerror.innerHTML = 'invalid';
        return false;

    }
    if(!country =='rwanda'){
        countryerror.innerHTML = 'invalid';
        return false;

    }
    countryerror.innerHTML = '';
    return true;
    }
    function validatemessage(){
        var message = document.getElementById('contact-message').value;
        var required = 30;
        var left = required - message.length;
        if (left > 0){
            messageerror.innerHTML = left +' more characters require';
            return false
        }
        messageerror.innerHTML = '';
        return true;
    }
   function validatesubmitt(){

        if ( !validatename() || !validatecountry() || !validateprovince() || !validatedistrict() || !validatesector()  || !validatecell() || !validatevillage() || !validatemessage() || !validateemail() || !validatephone()){
            submiterror.style.display = 'block';
            submiterror.innerHTML = 'Please Fix Error to Submitt';
            setTimeout(function()
             {submiterror.style.display = 'none';}, 3000 );
           return false;
    }
   
    }
    function validatesubmittt(){

       if(!validateemail()){
            submiterror.style.display = 'block';
            submiterror.innerHTML = 'Please Fix Error to Submitt';
            setTimeout(function()
             {submiterror.style.display = 'none';}, 3000 );
           return false;
    }
   
    }
    
   


// function validateaubmitt(){
// if(!validatephone() || !validatename() ||!validatemessage())
// submiterror.innerHTML='please fill this form';}
const bar=document.getElementById('bar');
const close=document.getElementById('close');
const nav=document.getElementById('homeiconbtn');
if(bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}
if(close){
    close.addEventListener('click', () => {
        close.classList.remove('active');
    })
}


document.addEventListener("DOMContentLoaded", function() {
    var logoutLink = document.getElementById("logoutLink");
    logoutLink.addEventListener("click", function(event) {
        event.preventDefault(); 

        
        window.location.href = "login.php";
    });
});

var pop=document.getElementById("pop");
setTimeout(() =>{
    pop.display.display="none";
},1000);
