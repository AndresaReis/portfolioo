<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Configure os detalhes do email
    $destinatario = "dresareys20@gmail.com"; // Substitua pelo seu endereço de email
    $assunto = "Mensagem do formulário de contato";

    // Construa a mensagem do email
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "Email: $email\n";
    $mensagem_email .= "Mensagem:\n$mensagem";

    // Envie o email
    $enviado = mail($destinatario, $assunto, $mensagem_email);

    if ($enviado) {
        echo "Obrigado por entrar em contato, $nome! Sua mensagem foi enviada.";
    } else {
        echo "Desculpe, ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.";
    }
} else {
    // Se alguém tentar acessar este arquivo diretamente, você pode redirecionar
    // de volta para o formulário ou tomar outra ação apropriada.
    header("Location: formulario.html");
    exit;
}
?>