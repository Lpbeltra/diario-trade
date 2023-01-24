function validatePassword(input){
    if (document.getElementById("passwd2").value != document.getElementById("passwd1").value) {
        input.setCustomValidity("As senhas não batem!");
        input.reportValidity();
    }else{
        input.setCustomValidity("");
        return true;
    }
}
function verifySubmit(){
    if (document.getElementById("passwd2").value != document.getElementById("passwd1").value) {
        alert('Senhas não são iguais!')
    }
}