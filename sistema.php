<?php

/*
include_once('conexao.php');

$nome = $_POST['nome'];
$data =  $_POST['data'];
$nacionalidade =  $_POST['nacionalidade'];
$distrito = $_POST['distrito'];
$contacto = $_POST['contacto'];
$curso =  $_POST['curso'];
$necessidades =  $_POST['necessidades'];
$apelido =  $_POST['apelido'];
$genero =  $_POST['genero'];
$cidade =  $_POST['cidade'];
$localidade =  $_POST['localidade'];
$contacto_alt =  $_POST['contact-alt'];
$turno =  $_POST['turno'];
$email =  $_POST['email'];


// print_r($_POST['nome']);
// print_r('<br>');
// print_r($_POST['apelido']);
// print_r('<br>');
// print_r($_POST['data']);
// print_r('<br>');
// print_r($_POST['nacionalidade']);
// print_r('<br>');
// print_r($_POST['distrito']);
// print_r('<br>');
// print_r($_POST['contacto']);
// print_r('<br>');
// print_r($_POST['curso']);
// print_r('<br>');
// print_r($_POST['necessidades']);
// print_r('<br>');
// print_r($_POST['genero']);
// print_r('<br>');
// print_r($_POST['cidade']);
// print_r('<br>');
// print_r($_POST['localidade']);
// print_r('<br>');
// print_r($_POST['contact-alt']);
// print_r('<br>');
// print_r($_POST['turno']);
// print_r('<br>');
// print_r($_POST['email']);


 $sql = mysqli_query($conexao, "INSERT INTO estudantes(nome,apelido,nacionalidade,distrito,contacto,curso,necessidades,dataNasc,genero,cidade,localidade,contactoAlt,turno,email) 
 values('$nome','$apelido','$nacionalidade','$distrito','$contacto','$curso','$necessidades','$data','$genero','$cidade ','$localidade','$contacto_alt','$turno','$email')");

  



 */
?>




















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscricao USTM</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="folha.css">
</head>
<body >
    <img src="img/logo.png" alt="" srcset="" id="logo">
    <form action="sistema.php" method="POST" class="form-control " id="formulario">
        <div class="row" aria-required="true">
            <div class="col-md-6">
                <label for="name">Primeiro Nome</label>
                <input type="text" name="nome" id="name" class="form-control">
                <label for="data">Data de nascimento</label>
                <input type="date" name="data" class="form-control">
                <label for="pais">Nacionalidade</label>
                <input type="text" name="nacionalidade" id="" class="form-control">
                <label for="">Distrito</label>
                <input type="text" name="distrito" id="distrito" class="form-control">
                <label for="contacto">Contacto</label>
                <input type="number" name="contacto" id="contacto" class="form-control">
                <label for="curso">Curso</label>
                <select name="curso" id="curso" class="form-select">
                    <option value="">---</option>
                    <option value="LDS">Licenciatura Em Desenvolvimento de Sofware</option>
                    <option value="LASIR">Licenciatura Em Redes de Computadores</option>
                    <option value="LCA">Licenciatura Em Contabilidade e Auditoria</option>
                    <option value="LA">Licenciatura Em Antropologia</option>
                    <option value="LGRH">Licenciatura Em Gestao de Recursos Humanos</option>
                    <option value="LGE">Licenciatura Em Gestao Empresarial</option>
                    <option value="LAG">Licenciatura Em Agronomia</option>
                </select>
                <label for="nececidades">Necessidades Especiais</label>
                <select name="necessidades" id="curso" class="form-select">
                    <option value="">---</option>
                    <option value="nao">Nao</option>
                    <option value="nao">Sim</option>
                </select>

                
            </div>
            <div class="col-md-6">
                <label for="apelido">Apelido</label>
                <input type="text" name="apelido" id="apelido" class="form-control">
                <label for="genero">Genero</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="Masculino"> <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="feminino" value="Feminino"> <label for="feminino">Feminino</label>
                <br>
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade" class="form-control">
                <label for="">Localidade</label>
                <input type="text" name="localidade" id="localidade" class="form-control">
                <label for="contacto-alt">Contacto Alternativo</label>
                <input type="number" name="contact-alt" id="contacto-alt" class="form-control">
                <label for="turno">Turno</label>
                <select name="turno" id="curso" class="form-select">
                    <option value="">---</option>
                    <option value="laboral">Laboral</option>
                    <option value="pos-laboral">POS-Laboral</option>
                </select>
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
             <input type="submit" name="enviar" id="btn" >
        </div>
       
    </form>


      <script src="bootstrap/js/bootstrap.js"></script>
      <script src="bootstrap/js/jquery.js"></script>
      <script src="bootstrap/js/popper.js"></script>
</body>
</html>