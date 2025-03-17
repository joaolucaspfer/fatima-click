<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperando os dados do formulário
    $email = htmlspecialchars(string: $_POST['email']);
    $nome = htmlspecialchars(string: $_POST['nome']);
    $mensagem = htmlspecialchars(string: $_POST['mensagem']);

    // Validar se os campos não estão vazios
    if (empty($email) || empty($nome) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Configurações do e-mail
    $to = "fatima.click.2025@gmail.com"; // Coloque aqui o seu e-mail
    $subject = "Mensagem de Contato - Fátima Click";
    $body = "Você recebeu uma mensagem de $nome ($email):\n\n$mensagem";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar o e-mail
    if (mail(to: $to, subject: $subject, message: $body, additional_headers: $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente.";
    }
}
if (!filter_var(value: $email, filter: FILTER_VALIDATE_EMAIL)) {
    echo "O e-mail fornecido não é válido.";
    exit;
}
?>