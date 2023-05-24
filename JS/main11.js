var alumnos = document.getElementById("alumnos")
var profes = document.getElementById("profes")
var departamentos = document.getElementById("departamentos")
var clases = document.getElementById("clases")
var añado = document.getElementById("añado")
var contador = 0
var element1 = document.getElementById('a');
var element1Left = element1.getBoundingClientRect().left;
var element2 = document.getElementById('añado');
var crearAlu = document.getElementById("crearAlu")
var crearProf = document.getElementById("crearProf")
var crearDe = document.getElementById("crearDep")
var crearClas = document.getElementById("crearClase")
var confir = document.getElementById("confir")
var ediAlu = document.getElementById("ediAlu")
var ediProf = document.getElementById("ediProf")
var ediDe = document.getElementById("ediDep")
var ediClase = document.getElementById("ediClase")
var idBorrar

element2.style.left = element1Left + 'px';
window.addEventListener('resize', function() {
    element1Left = element1.getBoundingClientRect().left;
    element2.style.left = element1Left + 'px';
});

function aviso(id) {
    confir.style.display = "block"
    idBorrar = id
}

function cancelar() {
    confir.style.display = "none"
}

function alumno() {
    contador = 0
    alumnos.style.display = "block"
    profes.style.display = "none"
    departamentos.style.display = "none"
    clases.style.display = "none"
    añado.style.display = "none"
}

function profe() {
    contador = 0
    alumnos.style.display = "none"
    profes.style.display = "block"
    departamentos.style.display = "none"
    clases.style.display = "none"
    añado.style.display = "none"
}

function departamento() {
    contador = 0
    alumnos.style.display = "none"
    profes.style.display = "none"
    departamentos.style.display = "block"
    clases.style.display = "none"
    añado.style.display = "none"
}

function clase() {
    contador = 0
    alumnos.style.display = "none"
    profes.style.display = "none"
    departamentos.style.display = "none"
    clases.style.display = "block"
    añado.style.display = "none"
}

function añadir() {
    contador = 0
    contador = contador + 1
    if (contador % 2 === 0) {
        añado.style.display = "none"
    } else {
        añado.style.display = "block"
    }
}

function crearAlumno() {
    añado.style.display = "none"
    crearAlu.style.display = "block"
    confir.style.display = "none"
}

function crearProfe() {
    añado.style.display = "none"
    crearProf.style.display = "block"
    confir.style.display = "none"
}

function crearClase() {
    añado.style.display = "none"
    crearClas.style.display = "block"
    confir.style.display = "none"
}

function crearDep() {
    añado.style.display = "none"
    crearDe.style.display = "block"
    confir.style.display = "none"
}

function volver2() {
    contador = 0
    crearDe.style.display = "none"
    crearAlu.style.display = "none"
    crearClas.style.display = "none"
    crearProf.style.display = "none"
}

function volver3() {
    ediAlu.style.display = "none"
    ediProf.style.display = "none"
    ediDe.style.display = "none"
    ediClase.style.display = "none"
}

function ediAl(elemento) {
    ediAlu.style.display = "block"
    console.log(elemento.parentElement.parentElement.children[0].innerText)
    let num_matricalu = elemento.parentElement.parentElement.children[0].innerText
    let nom_alu = elemento.parentElement.parentElement.children[1].innerText
    let apellido_1 = elemento.parentElement.parentElement.children[2].innerText
    let congnom2 = elemento.parentElement.parentElement.children[3].innerText
    let correoalu = elemento.parentElement.parentElement.children[4].innerText
    let dnialu = elemento.parentElement.parentElement.children[5].innerText
    let telfalu = elemento.parentElement.parentElement.children[6].innerText
    let clase = elemento.parentElement.parentElement.children[8].innerText
    num_matric.value = num_matricalu
    nombre.value = nom_alu
    apellido1.value = apellido_1
    apellido2.value = congnom2
    correo.value = correoalu
    dni.value = dnialu
    telf.value = telfalu
    clase.value = clase
}

function ediPro(elemento) {
    ediProf.style.display = "block"
    console.log(elemento.parentElement.parentElement.children[0].innerText)
    let dni_profe = elemento.parentElement.parentElement.children[0].innerText
    let nom_profe = elemento.parentElement.parentElement.children[1].innerText
    let apellido_profe = elemento.parentElement.parentElement.children[2].innerText
    let cognom2_profe = elemento.parentElement.parentElement.children[3].innerText
    let email_profe = elemento.parentElement.parentElement.children[4].innerText
    let telf_profe = elemento.parentElement.parentElement.children[5].innerText
    let sal_profe = elemento.parentElement.parentElement.children[6].innerText
    let dept_prof = elemento.parentElement.parentElement.children[7].innerText
    dni_p.value = dni_profe
    nom_p.value = nom_profe
    apellido1_p.value = apellido_profe
    cognom2_p.value = cognom2_profe
    email_p.value = email_profe
    telf_p.value = telf_profe
    sal_p.value = sal_profe
    dept_prof.value = dept_prof
}

function ediDep(elemento) {
    ediDe.style.display = "block"
    let codi_dept = elemento.parentElement.parentElement.children[0].innerText
    let nom_dept = elemento.parentElement.parentElement.children[1].innerText
    codi_d.value = codi_dept
    nom_d.value = nom_dept
}

function ediCla(elemento) {
    ediClase.style.display = "block"
    console.log(elemento.parentElement.parentElement.children[0].innerText)
    let codi_classe = elemento.parentElement.parentElement.children[0].innerText
    let nom_classe = elemento.parentElement.parentElement.children[1].innerText
    let tutor_classe = elemento.parentElement.parentElement.children[2].innerText
    codi_c.value = codi_classe
    nom_c.value = nom_classe
    tutor_c.value = tutor_classe
}