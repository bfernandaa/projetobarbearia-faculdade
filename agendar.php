<?php

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$datahora = $_POST["datahora"];
$servico = $_POST["servicos"]; // tirar dúvida se é pra colocar o name de todos os serviços ou o mesmo name pra todos e colocar ele aqui
$profissional = $_POST["profissional"]; // tirar dúvida se é pra colocar o name de todos os profissionais ou o mesmo name pra todos e colocar ele aqui
$botao = $_POST["btn"];

$server_name = "localhost"; //conferir se é localhost ou "trabalho" conforme mysql Guilherme
$user_name   = "root";
$password    = "";
$database    = "phpmyadmin";

$con = mysqli_connect($server_name, $user_name, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO tbagendamentos (DsNome, DsSobrenome, NrTelefone, DsEmail, DataAgendamento, IdServico, IdBarbeiro) VALUES ('$nome', '$sobrenome', '$telefone', '$email', '$datahora', '$servico', '$profissional')"; //continuar comando

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>