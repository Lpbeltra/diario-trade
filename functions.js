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

function verifyDelete() {
    Swal.fire({
    title: 'Tem certeza?!',
    text: "Essa ação é irreversivel",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sim, delete'
    }).then((result) => {
    if (result.isConfirmed) {
        window.location.href="deletetrade.php?id=<?php echo $id ?>"
    }
    })
}