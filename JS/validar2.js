function sesion() {
    var user = document.getElementById('username').value
    if (user != 'admin') {
        var respuesta1 = document.getElementById('res1')
        respuesta1.innerHTML = 'Usuario incorrecto'
        return false
    }
    var pwd = document.getElementById('password').value
    if (pwd != '1234') {
        var respuesta2 = document.getElementById('res2')
        respuesta2.innerHTML = 'Contraseña incorrecta'
        return false
    }
}

function verificarAl() {
    var nombre = document.getElementById('nombreAlumno').value
    if (nombre.length > 20 || nombre.length < 1) {
        var falloAlumno = document.getElementById('falloAlumno')
        falloAlumno.innerHTML = 'El nombre no esta bien'
        return false
    }
    var apellido1 = document.getElementById('primerApellidoAlumno').value
    if (apellido1.length > 20 || apellido1.length < 1) {
        var apellido1 = document.getElementById('falloPrimerApellidoAlumno')
        apellido1.innerHTML = 'El apellido no esta bien'
        return false
    }
    var apellido2 = document.getElementById('segundoApellidoAlumno').value
    if (apellido2.length > 20) {
        var apellido2 = document.getElementById('falloSegundoApellidoAlumno')
        apellido2.innerHTML = 'El apellido no esta bien'
        return false
    }
    var correoAlumno = document.getElementById('correoAlumno').value
    var correoExpresion = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    var correoError = document.getElementById('correoError')
    if (!correoExpresion.test(correoAlumno)) {
        correoError.innerHTML = 'El correo no existe'
        return false
    }
    var dniError = document.getElementById('dniAlumnoError')
    var dniExpresion = /^\d{8}[A-Z]$/
    var dniAlumno = document.getElementById('dniAlumno').value

    if (!dniExpresion.test(dniAlumno)) {
        dniError.innerHTML = 'Por favor, ingresa un DNI válido (8 dígitos seguidos de una letra mayuscula).';
        return false
    }
    var telefonoAlumno = document.getElementById('telefonoAlumno').value
    var telefonoAlumnoError = document.getElementById('telefonoAlumnoError')
    var telefonoExpresion = /^\d{9}$/
    if (!telefonoExpresion.test(telefonoAlumno)) {
        telefonoAlumnoError.innerHTML = decodeURIComponent('Por favor, ingresa un número de teléfono válido (9 dígitos sin espacios ni guiones).');
        return false
    }
}

function verificarProfe() {
    var dnifalloProfe = document.getElementById('dnifalloProfe')
    var dniExpresion = /^\d{8}[A-Z]$/
    var dniProfe = document.getElementById('dniProfe').value

    if (!dniExpresion.test(dniProfe)) {
        dnifalloProfe.innerHTML = 'Por favor, ingresa un DNI válido (8 dígitos seguidos de una letra mayuscula).';
        return false
    }
    var nombre = document.getElementById('nombreProfe').value
    if (nombre.length > 20 || nombre.length < 1) {
        var falloProfe = document.getElementById('falloProfe')
        falloProfe.innerHTML = 'El nombre no esta bien'
        return false
    }
    var apellido1Profe = document.getElementById('apellido1Profe').value
    if (apellido1Profe.length > 20 || apellido1Profe.length < 1) {
        var falloApellido1Profe = document.getElementById('falloApellido1Profe')
        falloApellido1Profe.innerHTML = 'El nombre no esta bien'
        return false
    }
    var apellido2Profe = document.getElementById('apellido2Profe').value
    if (apellido2Profe.length > 20) {
        var falloApellido2Profe = document.getElementById('falloApellido2Profe')
        falloApellido2Profe.innerHTML = 'El nombre no esta bien'
        return false
    }
    var correoProfe = document.getElementById('correoProfe').value
    var correoExpresion = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    var correoError2 = document.getElementById('correoError2')
    if (!correoExpresion.test(correoProfe)) {
        correoError2.innerHTML = 'El correo no existe'
        return false
    }
    var telefonoProfe = document.getElementById('telefonoProfe').value
    var telefonoProfeError = document.getElementById('telefonoProfeError')
    var telefonoExpresion = /^\d{9}$/
    if (!telefonoExpresion.test(telefonoProfe)) {
        telefonoProfeError.innerHTML = decodeURIComponent('Por favor, ingresa un número de teléfono válido (9 dígitos sin espacios ni guiones).');
        return false
    }
    var sal = document.getElementById('sal').value
    if (sal.length > 5 || sal.length < 4) {
        var salProfeError = document.getElementById('salProfeError')
        salProfeError.innerHTML = 'El salario no es correcto'
        return false
    }
}
function validarDep(){
    var numDep = document.getElementById('numDep').value
    if (numDep.length != 3) {
        var numDepError = document.getElementById('numDepError')
        numDepError.innerHTML = 'El numero de departamento no tiene tres digitos'
        return false
    }
    var nombreDep = document.getElementById('nombreDep').value
    if (nombreDep.length > 20 || nombreDep.length < 1) {
        var nombreDepError = document.getElementById('nombreDepError')
        nombreDepError.innerHTML = 'El nombre de departamento no es correcto'
        return false
    }
}
function validarClase(){
    var numClase = document.getElementById('numClase').value
    if (numClase.length != 3) {
        var numClaseError = document.getElementById('numClaseError')
        numClaseError.innerHTML = 'El numero de departamento no tiene tres digitos'
        return false
    }
    var nombreClase = document.getElementById('nombreClase').value
    if (nombreClase.length > 20 || nombreDep.length < 1) {
        var nombreClaseError = document.getElementById('nombreClaseError')
        nombreClaseError.innerHTML = 'El nombre de departamento no es correcto'
        return false
    }
}