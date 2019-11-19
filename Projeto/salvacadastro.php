<?php
    include_once('conexao.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $dt_nascimento = $_POST['dt_nasicmento'];
    $naturalidade = $_POST['naturalidade'];
    $tipo_sangue = $_POST['tipo_sangue'];
    $sexo = $_POST['sexo'];
    $estado_civil = $_POST['estado_civil'];
    $documento = $_POST['documento'];
    $num_documento = $_POST['num_documento'];
    $orgao_doc = $_POST['orgao_doc'];
    $escolaridade = $_POST['escolaridade'];
    $profissao = $_POST['profissao'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $tipo_doacao = $_POST['tipo_doacao'];
    $local_doacao = $_POST['local_doacao'];
    $data_doacao = $_POST['data_doacao'];

    $result_msg_cadastro = "INSERT INTO cadastro_usuario(nome, cpf, email, telefone, dt_nasicmento, naturalidade, tipo_sangue, sexo, estado_civil, documento, num_documento, orgao_doc, escolaridade, profissao, cep, logradouro, numero, complemento, bairro, cidade, uf, tipo_doacao, local_doacao, data_doacao) 
    VALUES ('$nome', '$cpf', '$email', '$telefone', '$dt_nascimento', '$naturalidade', '$tipo_sangue', '$sexo', '$estado_civil', '$documento', '$num_documento', '$orgao_doc', '$escolaridade', '$profissao', '$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$uf', '$tipo_doacao', '$local_doacao', $data_doacao' NOW())";

    $resultado_msg_cadastro = mysqli_query($conn, $msg_cadastro);
?>