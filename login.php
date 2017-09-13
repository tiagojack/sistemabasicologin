<?php

if (isset($_POST['email']) && !empty(['email'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    file_put_contents("cadastro.txt", "Email: ".$email."\n", FILE_APPEND);
    file_put_contents("cadastro.txt", "Senha: ".$senha."\n", FILE_APPEND);



    echo "Página de usuários logados. \n<br />\n<br />";

    echo "o email utilizado foi: ".$email."\n<br />\n<br />";
    echo "a senha utilizada foi: ".$senha."\n<br />\n<br />";
};



?>
