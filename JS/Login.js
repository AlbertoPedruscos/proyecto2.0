function validacionLogin() {
    var username = document.getElementById("username").value.trim();
    var password = document.getElementById("password").value.trim();

    if (username === "admin" && password === "qweQWE123") {
        window.location.href = "pagina2.php"; 
    } else {

        var wUsername = document.getElementById("wusername");
        var wPassword = document.getElementById("wpassword");

        wUsername.innerText = "";
        wPassword.innerText = "";

        if (username === "") {
            wUsername.innerText = "Debes ingresar un nombre de usuario";
            document.getElementById("username").focus();
            return false;
        }

        if (password === "") {
            wPassword.innerText = "Debes ingresar una contraseña";
            document.getElementById("password").focus();
            return false;
        }

        return false;
    }
}