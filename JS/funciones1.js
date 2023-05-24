// Alerta Borrar Alumno
function alertaBorrar(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás recuperar la información! " + id,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, borrar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = './cambios/borrarAlumnos.php?id=' + id;
        }
    })
}

function alertaBorrado() {
    Swal.fire(
        'BORRADO!',
        'El alumno ha sido borrado',
        'success'
    )
}

function alertaError() {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '¡Algo ha ido mal!',
    })
}

// Alerta Borrar Profesores
function alertaBorrarProf(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás recuperar la información! " + id + " asd",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, borrar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = 'cambios/borrarProfesores.php?id=' + id;
        }
    })
}

function alertaBorradoProf() {
    Swal.fire(
        'BORRADO!',
        'El alumno ha sido borrado',
        'success'
    )
}

function alertaErrorProf() {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '¡Algo ha ido mal!',
    })
}

// Alerta Borrar Departamento
function alertaBorrarDept(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás recuperar la información " + id,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, borrar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = 'cambios/borrarDept.php?id=' + id;
        }
    })
}

function alertaBorradoDept() {
    Swal.fire(
        'BORRADO!',
        'El alumno ha sido borrado',
        'success'
    )
}

function alertaErrorDept() {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '¡Algo ha ido mal!',
    })
}

// Alerta Borrar calse
function alertaBorrarClasse(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás recuperar la información! " + id,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, borrar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = 'cambios/borrarClase.php?id=' + id;
        }
    })
}

function alertaBorradoClasse() {
    Swal.fire(
        'BORRADO!',
        'El alumno ha sido borrado',
        'success'
    )
}

function alertaErrorClasse() {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '¡Algo ha ido mal!',
    })
}