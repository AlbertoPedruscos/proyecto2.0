<?php
session_start();
$_SESSION['inicio'];
if ($_SESSION['inicio']=='activa'){
    $_SESSION['inicio']='activa';
}
else{
    header("location: index.html");
    exit;
}
include_once "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mac School</title>
    <link rel="stylesheet" href="./CSS/brocs11.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="navbar" >
        <button onclick="alumno()" class="boton">Alumnos</button>
        <button onclick="profe()" class="boton">Profesores</button>
        <button onclick="departamento()" class="boton">Departamentos</button>
        <button onclick="clase()" class="boton">Clases</button>
        <button onclick="añadir()" class="boton" id="a">Añadir</button>
        <input type="search" placeholder="Buscar" class="lupa">
        <button>Buscar</button>
        <button class="boton">Filtrar</button>
    </div>
    <!-- Tabla alumnos -->
    <div id="alumnos">
        <h1>Alumnos</h1>
        <table class="tabla">
        <thead></thead>
        <tr>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th>Correo</th>
        <th>Dni</th>
        <th>Telefono</th>
        <th>Fecha de matriculacion</th>
        <th>Clase</th>
        <th>Borrar</th>
        <th>Editar</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php
        $sql = "SELECT ALUMNE.*, CLASSE.nom_classe FROM ALUMNE
        INNER JOIN CLASSE ON ALUMNE.classe = CLASSE.id_classe ORDER BY num_matric ASC";
        
        $listaalumnos=mysqli_query($connection, $sql);
        foreach ($listaalumnos as $alumno) {
            echo "<tr>
                    <td>{$alumno['num_matric']}</td>
                    <td>{$alumno['nom_alu']}</td>
                    <td>{$alumno['cognom1_alu']}</td>
                    <td>{$alumno['cognom2_alu']}</td>
                    <td>{$alumno['email_alu']}</td>
                    <td>{$alumno['dni_alu']}</td>
                    <td>{$alumno['telf_alu']}</td>
                    <td>{$alumno['fecha_matric_alu']}</td>
                    <td>{$alumno['nom_classe']}</td>
                    <td><button class='boton2' onclick='alertaBorrar({$alumno['num_matric']})'>Borrar</button></td>
                    <td><button onclick='ediAl(this)' class='boton3'>Editar</button></td>
             </tr>";
        }
        ?>
        </tr>
        </tbody>
        </table>
    </div>
    <!-- Tabla profesores -->
    <div id="profes">
        <h1>Profesores</h1>
        <table class="tabla">
        <thead>
        <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Salario</th>
        <th>Departamento</th>
        <th>Borrar</th>
        <th>Editar</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php
        
        $sql = "SELECT PROFESSOR.*, DEPARTAMENT.nom_dept FROM PROFESSOR
        INNER JOIN DEPARTAMENT ON PROFESSOR.dept_prof = DEPARTAMENT.id_dep";

        $listado=mysqli_query($connection, $sql);
        
        foreach ($listado as $listaprof) {
        echo "<tr>
                <td>{$listaprof['dni_profe']}</td>
                <td>{$listaprof['nom_profe']}</td>
                <td>{$listaprof['cognom1_profe']}</td>
                <td>{$listaprof['cognom2_profe']}</td>
                <td>{$listaprof['email_prof']}</td>
                <td>{$listaprof['telf_prof']}</td>
                <td>{$listaprof['sal_prof']}</td>
                <td>{$listaprof['nom_dept']}</td>
                <td><button class='boton2' onclick='alertaBorrarProf({$listaprof['dni_profe']})'>Borrar</button></td>
                <td><button onclick='ediPro(this)' class='boton3'>Editar</button></td>
            </tr>";
        }
    ?>
        </tr>
        </tbody>
        </table>
    </div>























    <!-- Tabla departamentos -->
    <div id="departamentos">
        <h1>Departamentos</h1>
        <table class="tabla">
        <thead>
        <tr>
        <th>Numero del departamento</th>
        <th>Nombre del departamento</th>
        <th>Borrar</th>
        <th>Editar</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php
        $sql = "SELECT * FROM DEPARTAMENT";
        
        $listado=mysqli_query($connection, $sql);
        
        foreach ($listado as $lista) {
            echo "<tr>
                    <td>{$lista['codi_dept']}</td>
                    <td>{$lista['nom_dept']}</td>
                    <td><button class='boton2' onclick='alertaBorrarDept({$lista['id_dep']})'>Borrar</button></td>
                    <td><button onclick='ediDep(this)' class='boton3'>Editar</button></td>
             </tr>";
        }
        ?>
        </tr>
        </tbody>
        </table>
    </div>
    <!-- Tabla clases -->
    <div id="clases">
        <h1>Clases</h1>
        <table class="tabla">
        <thead>
        <tr>
        <th>Numero de la clase</th>
        <th>Clase</th>
        <th>Tutor</th>
        <th>Borrar</th>
        <th>Editar</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php

        $sql = "SELECT CLASSE.*, PROFESSOR.nom_profe FROM CLASSE
        INNER JOIN PROFESSOR ON CLASSE.tutor = PROFESSOR.dni_profe";
        
        $listado=mysqli_query($connection, $sql);
        
        foreach ($listado as $lista) {
            echo "<tr>
                    <td>{$lista['codi_classe']}</td>
                    <td>{$lista['nom_classe']}</td>
                    <td>{$lista['nom_profe']}</td>
                    <td><button class='boton2' onclick='alertaBorrarClasse({$lista['id_classe']})'>Borrar</button></td>
                    <td><button onclick='ediCla(this)' class='boton3'>Editar</button></td>
             </tr>";
        }
        ?>
        </tr>
        </tbody>
        </table>
    </div>
    <!-- Lista desplegable añadir datos -->
    <div id="añado">
        <button class="boton" onclick="crearAlumno()">Nuevo Alumno</button>
        <br>
        <button class="boton" onclick="crearProfe()">Nuevo profe</button>
        <br>
        <button class="boton" onclick="crearClase()">Nueva clase</button>
        <br>
        <button class="boton" onclick="crearDep()">Nuevo departamento</button>
    </div>
    <!-- Inserts datos tablas -->
    <div id="crearAlu" class="formulario">
    <button class="botoncerrar" onclick="volver2()"><img src="IMG/close.png" class="cerrar" align="right" alt=""></button>
        <form action="inserts.php" method="post" onsubmit="return verificarAl()">
            <h2>Escriba los datos del alumno</h2>
            <label for="">Introduzca el nombre:</label>
            <br>
            <input type="text" class="tex" name="nomalu" id="nombreAlumno" required>
            <br>
            <label id="falloAlumno" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el primer apellido:</label>
            <br>
            <input type="text" class="tex" name="apellidoalu" id="primerApellidoAlumno" required>
            <br>
            <label id="falloPrimerApellidoAlumno" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el segundo apellido:</label>
            <br>
            <input type="text" name="sapellidoalu" class="tex" id="segundoApellidoAlumno" >
            <br>
            <label id="falloSegundoApellidoAlumno" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el correo:</label>
            <br>
            <input type="email" name="mailalu" class="tex" id="correoAlumno" required>
            <br>
            <label id="correoError" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el DNI:</label>
            <br>
            <input type="text" name="dnialu" class="tex" id="dniAlumno" required>
            <br>
            <label id="dniAlumnoError" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el numero de telefono:</label>
            <br>
            <input type="number" name="telfalu" class="tex" id="telefonoAlumno" required>
            <br>
            <label id="telefonoAlumnoError" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca la clase:</label>
            <br>
            <select name="clasealu" id="" required>
                <?php
                $sql = "select id_classe, nom_classe from classe;";
                $respuestas = mysqli_query($connection, $sql);
                foreach ($respuestas as $respuesta){
                    $id=$respuesta['id_classe'];
                    $clase=$respuesta['nom_classe'];
                    echo "<option value='$id'>$clase</option>";
                }
                ?>
            </select>
            <br>
            <br>
            <button type="submit" class="boton3" name="accion" value="1">Enviar</button>
            <br>
            <br>
        </form>
    </div>
    <div id="crearProf" class="formulario">
    <button class="botoncerrar" onclick="volver2()"><img src="IMG/close.png" class="cerrar" align="right" alt=""></button>
        <form action="inserts.php" method="post" onsubmit="return verificarProfe()">
            <h2>Escriba los datos del profesor</h2>
            <label for="">Introduzca el DNI:</label>
            <br>
            <input type="text" name="dniprofe" class="tex" id="dniProfe" required>
            <br>
            <label id="dnifalloProfe" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el nombre:</label>
            <br>
            <input type="text" name="nomprofe" class="tex" id="nombreProfe" required>
            <br>
            <label id="falloProfe" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el primer apellido:</label>
            <br>
            <input type="text" name="apellidoprofe" class="tex" id="apellido1Profe" required>
            <br>
            <label id="falloApellido1Profe" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el segundo apellido:</label>
            <br>
            <input type="text" name="sapellidoprofe" class="tex" id="apellido2Profe">
            <br>
            <label id="falloApellido2Profe" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el correo:</label>
            <br>
            <input type="email" name="mailprofe" class="tex" id="correoProfe" required>
            <br>
            <label id="correoError2" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el numero de telefono:</label>
            <br>
            <input type="number" name="telfprofe" class="tex" id="telefonoProfe" required>
            <br>
            <label id="telefonoProfeError" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el salario:</label>
            <br>
            <input type="number" name="salprofe" class="tex" id="sal" required>
            <br>
            <label id="salProfeError" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el departamento:</label>
            <br>
            <select name="deptprofe" id="" required>
                <?php
                $sql = "select id_dep, nom_dept from departament;";
                $respuestas = mysqli_query($connection, $sql);
                foreach ($respuestas as $respuesta){
                    $idDEP=$respuesta['id_dep'];
                    $DEP=$respuesta['nom_dept'];
                    echo "<option value='$idDEP'>$DEP</option>";
                }
                ?>
            </select>
            <br>
            <br>
            <button type="submit" class="boton3" name="accion" value="2">Enviar</button>
            <br>
            <br>
        </form>
    </div>
    <div id="crearDep" class="formulario">
    <button class="botoncerrar" onclick="volver2()"><img src="IMG/close.png" class="cerrar" align="right" alt=""></button>
        <form action="inserts.php" method="post" onsubmit="return validarDep()">
            <h2>Escriba los datos del departamento</h2>
            <label for="">Introduzca el numero:</label>
            <br>
            <input type="number" name="numdept" class="tex" id="numDep" required>
            <br>
            <label id="numDepError" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el nombre:</label>
            <br>
            <input type="text" name="nomdept" class="tex" id="nombreDep" required>
            <br>
            <label id="nombreDepError" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <button type="submit" class="boton3" name="accion" value="3">Enviar</button>
            <br>
            <br>
        </form>
    </div>
    <div id="crearClase" class="formulario">
    <button class="botoncerrar" onclick="volver2()"><img src="IMG/close.png" class="cerrar" align="right" alt=""></button>
        <form action="inserts.php" method="post" onsubmit="return validarClase()">
            <h2>Escriba los datos de la clase</h2>
            <label for="">Introduzca el numero:</label>
            <br>
            <input type="number" name="numclase" class="tex" id="numClase" required>
            <br>
            <label id="numClaseError" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el nombre:</label>
            <br>
            <input type="text" name="nomclase" class="tex" id="nombreClase" required>
            <br>
            <label id="nombreClaseError" style="color:rgb(255, 15, 15)"></label></br>
            <br>
            <label for="">Introduzca el tutor:</label>
            <br>
            <select name="tutor" id="" required>
                <?php
                $sql = "select dni_profe, nom_profe from professor;";
                $respuestas = mysqli_query($connection, $sql);
                foreach ($respuestas as $respuesta){
                    $dni_profe=$respuesta['dni_profe'];
                    $tutor=$respuesta['nom_profe'];
                    echo "<option value='$dni_profe'>$tutor</option>";
                }
                ?>
            </select>
            <br>
            <br>
            <button type="submit" class="boton3" name="accion" value="4">Enviar</button>
            <br>
            <br>
        </form>
    </div>
    <div id="ediAlu" class="formulario">
    <button class="botoncerrar" onclick="volver3()"><img src="IMG/close.png" class="cerrar" align="right" alt=""></button>
        <form action="cambios/editarAlumnos.php" method="post">
        <input type="hidden" name="num_matric" id="num_matric" class="form-control" value="">
           <div>
                <label for="nombre">Nombre</label>
                <br>
                <input type="text" name="nombre" id="nombre" class="form-control" value="">
           </div>
           <br>
           <div>
                <label for="nombre">Apellido 1</label>
                <br>
                <input type="text" name="apellido1" id="apellido1" class="form-control" value="">
           </div>
           <br>
           <div>
                <label for="nombre">Apellido 2</label>
                <br>
                <input type="text" name="apellido2" id="apellido2" class="form-control" value="">
           </div>
           <br>
           <div>
                <label for="nombre">Correo</label>
                <br>
                <input type="text" name="correo" id="correo" class="form-control" value="">
           </div>
           <br>
           <div>
                <label for="nombre">dni</label>
                <br>
                <input type="text" name="dni" id="dni" class="form-control" value="">
           </div>
           <br>
           <div>
                <label for="nombre">telefono</label>
                <br>
                <input type="text" name="telf" id="telf" class="form-control" value="">
           </div>
           <br>
           <div class="form-group">
                <label for="nombre">Clase</label>
                <br>
            <select name="clase" id="clase">
                <?php
                $sql = "select id_classe, nom_classe from classe;";
                $respuestas = mysqli_query($connection, $sql);
                foreach ($respuestas as $respuesta){
                    $id=$respuesta['id_classe'];
                    $clase=$respuesta['nom_classe'];
                    echo "<option value='$id'>$clase</option>";
                }
                ?>
            </select>
            </div>
           <br>
            <button type="submit" class="boton3" name="enviar" value="1">Enviar</button>
        </form>
    </div>
    <div id="ediProf" class="formulario">
    <button class="botoncerrar" onclick="volver3()"><img src="IMG/close.png" class="cerrar" align="right" alt=""></button>
        <form action="cambios/editarProfesores.php" method="post">
            <div>
                <label for="nombre">dni</label>
                <br>
                <input type="text" name="dni_profe" id="dni_p" class="form-control" value="">
            </div>
            <br>
            <div>
                <label for="nombre">NOMBRE</label>
                <br>
                <input type="text" name="nom_profe" id="nom_p" class="form-control" value="">
            </div>
            <br>
            <div>
                <label for="nombre">Apellido 1</label>
                <br>
                <input type="text" name="cognom1_profe" id="apellido1_p" class="form-control" value="">
            </div>
            <br>
            <div>
                <label for="nombre">Apellido 2</label>
                <br>
                <input type="text" name="cognom2_prof" id="cognom2_p" class="form-control" value="">
            </div>
            <br>
            <div>
                <label for="nombre">Correo</label>
                <br>
                <input type="text" name="email_prof" id="email_p" class="form-control" value="">
            </div>
            <br>
            <div>
                <label for="nombre">telefono</label>
                <br>
                <input type="text" name="telf_prof" id="telf_p" class="form-control" value="">
            </div>
            <br>
            <div>
                <label for="nombre">telefono</label>
                <br>
                <input type="text" name="salario" id="sal_p" class="form-control" value="">
            </div>
            <br>
            <div class="form-group">
                <label for="nombre">Tutor</label>
                <br>
                <select name="dept_prof" id="dept_prof" required>
                <?php
                $sql = "select id_dep, nom_dept from departament;";
                $respuestas = mysqli_query($connection, $sql);
                foreach ($respuestas as $respuesta){
                    $idDEP=$respuesta['id_dep'];
                    $DEP=$respuesta['nom_dept'];
                    echo "<option value='$idDEP'>$DEP</option>";
                }
                ?>
            </select>
            </div>
            <br>
            <button type="submit" class="boton3" name="enviar" value="1">Enviar</button>
        </form>
    </div>
    <div id="ediDep" class="formulario">
    <button class="botoncerrar" onclick="volver3()"><img src="IMG/close.png" class="cerrar" align="right" alt=""></button>
        <form action="" method="post">
            <br>
            <div>
                <label for="nombre">codi_dept</label>
                <br>
                <input type="text" name="sal_p" id="codi_d" class="form-control" value="">
            </div>
            <br>
            <div>
                <label for="nombre">nom_dept</label>
                <br>
                <input type="text" name="sal_p" id="nom_d" class="form-control" value="">
            </div>
            <br>
            <button type="submit" class="boton3" name="accion" value="3">Enviar</button>
        </form>
    </div>
    <div id="ediClase" class="formulario">
    <button class="botoncerrar" onclick="volver3()"><img src="IMG/close.png" class="cerrar" align="right" alt=""></button>
        <form action="" method="post">
            <div>
                <label for="nombre">CODIGO CLASE</label>
                <br>
                <input type="text" name="codi_c" id="codi_c" class="form-control" value="">
            </div>
            <div>
                <label for="nombre">NOMBRE CLASE</label>
                <br>
                <input type="text" name="sal_p" id="nom_c" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="nombre">TUTOR CLASE</label>
                <br>
                <select name="tutor_c" id="tutor_c">
                <?php
                $sql = "select dni_profe, nom_profe from professor;";
                $respuestas = mysqli_query($connection, $sql);
                foreach ($respuestas as $respuesta){
                    $dni_profe=$respuesta['dni_profe'];
                    $tutor=$respuesta['nom_profe'];
                    echo "<option value='$dni_profe'>$tutor</option>";
                }
                ?>
            </select>
            <button type="submit" class="boton3" name="accion" value="4">Enviar</button>
            
        </form>
    </div>
<script src="JS/main11.js"></script>
<script src="JS/validar2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="JS/funciones1.js"></script>
</body>
</html>
