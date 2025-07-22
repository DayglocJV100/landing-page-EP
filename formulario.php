<?php
// CONFIGURAÇÕES
$destino = "comercial@experienciasportugal.com.br"; // altere para seu e-mail do domínio
$assunto = "Nova mensagem do site Experiências Portugal";

// RECEBE DADOS DO FORMULÁRIO
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

// MONTA MENSAGEM
$corpo = "Nova mensagem recebida pelo formulário:\n\n";
$corpo .= "Nome: $nome\n";
$corpo .= "E-mail: $email\n";
$corpo .= "Telefone: $telefone\n";
$corpo .= "Mensagem:\n$mensagem\n";

// CABEÇALHO
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// ENVIA
if (mail($destino, $assunto, $corpo, $headers)) {
    header("Location: obrigado.html");
    exit();
} else {
    echo "<script>alert('Erro ao enviar mensagem. Tente novamente.');window.history.back();</script>";
}
?>
