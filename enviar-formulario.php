<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Verifica se os campos estão preenchidos
    if ($nome && $email && $mensagem) {
        // Configuração do e-mail
        $to = "seu-email@example.com"; // Substitua pelo seu e-mail
        $subject = "Mensagem de $nome";
        $body = "Nome: $nome\nE-mail: $email\n\nMensagem:\n$mensagem";
        $headers = "From: $email";

        // Envia o e-mail
        if (mail($to, $subject, $body, $headers)) {
            echo "Obrigado pela sua mensagem! Entraremos em contato em breve.";
        } else {
            echo "Desculpe, houve um problema ao enviar sua mensagem. Tente novamente mais tarde.";
        }
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
