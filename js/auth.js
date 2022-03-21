const email = document.getElementById("email");
const name = document.getElementById("name");
const PassWord = document.getElementById("password");
const cPassword = document.getElementById("cPassword");
const iconE = document.getElementById("exc");
const iconN = document.getElementById("excN");
const iconP = document.getElementById("excP");
const iconCP = document.getElementById("excCP");
const icon1 = document.getElementById("check");
const IName = document.getElementById("invalidName");
const VName = document.getElementById("validName");
const submit = document.getElementById("submit");
const emailRequired = document.getElementById("error");
const nameRequired = document.getElementById("errorNp");
const PassRequired = document.getElementById("errorPss");
const ConfirmPassRequired = document.getElementById("errorCPss");
let passWordRegex = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/;
let cPassWordRegex =/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/;
let emailRegex = /^[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]{2,4}$/;
let nameRegex = /^[a-zA-Z ]{3,15}$/;


submit.addEventListener('click',(e)=>{
    
    if(email.value === "" || name.value === "" || PassWord.value === "" || cPassword.value === "" || cPassword.value !== PassWord.value){

         e.preventDefault()
        emailRequired.innerText = (email.value === "") ?  "Email is required"  : "";
        nameRequired.innerText = (name.value === "") ? "Name is required" : "";
        PassRequired.innerText = (PassWord.value === "") ? "Password is required" : "";
        ConfirmPassRequired.innerText =(cPassword.value === "") ? "Please Confirm Your Password" : (cPassword.value !== PassWord.value ? "Password not match" : "");
    }else if(validationEmail() == false || validationName() == false || validationPassword() == false){
        e.preventDefault()
    }
    
});

function validationEmail(){
    
    if (!emailRegex.test(email.value)){
    email.setAttribute("style","border:2px solid red ; color : red;");
    iconE.setAttribute("style","display : block; color : red ; position:absolute; top : 40px; right : 10px; ");
    emailRequired.innerText= "Invalid email example@email.com !";
    return false;
}
else{
    email.removeAttribute("style","border:2px solid red ; color: red;")
    iconE.setAttribute("style","display :none;");
    emailRequired.innerText= "";
    return true;
    
}   
}

function validationName(){

    if (!nameRegex.test(name.value)){
        name.setAttribute("style","border:2px solid red ; color : red;");
        iconN.setAttribute("style","display :none");
        nameRequired.innerText= "Invalid name !";

        return false ;
}
else{
    name.removeAttribute("style","border:2px solid red ; color: red;")
    iconN.setAttribute("style","display :none;");
    nameRequired.innerText= "";
    return true;
}
}

function validationPassword(){

    if (!passWordRegex.test(PassWord.value)){
        PassWord.setAttribute("style","border:2px solid red ; color : red;");
        iconP.setAttribute("style","display : block; color : red ; position:absolute; top : 40px; right : 10px; ");
        PassRequired.innerText= "Password should have at least 8 character,at least One Upper and lower case also special charactere";
    return false;
}
else{
    PassWord.removeAttribute("style","border:2px solid red ; color: red;")
    iconP.setAttribute("style","display :none;");
    PassRequired.innerText= "";
    return true;
}
   
}
function validationCPassword(){
if (!cPassWordRegex.test(cPassword.value)){
    cPassword.setAttribute("style","border:2px solid red ; color : red;");
    iconCP.setAttribute("style","display : block; color : red ; position:absolute; top : 40px; right : 10px; ");
    ConfirmPassRequired.innerText= "Password should have at least 8 character,at least One Upper and lower case also special charactere";
    return false;
}
else{
    cPassword.removeAttribute("style","border:2px solid red ; color: red;")
    iconCP.setAttribute("style","display :none;");
    ConfirmPassRequired.innerText ="";
    return true;
}
}  