<?php
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (!empty($_POST['send_data'])) {
    // Validación de datos de entrada
    /*$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
    $password = $_POST['pwd'];
    $confirmPassword = $_POST['confirm_password'];*/

    if (empty($_POST['user']) || empty($_POST['email']) || empty($_POST['pwd'])) {
        echo '<div class="alert_db_fields">Por favor, complete todos los campos.</div>';
    } else {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        // Inserta el nuevo usuario en la base de datos
        $sql = $conexion->query("INSERT INTO Cuentas(Usuario_Account, Correo_Account, Contrasena_Account)values('$user', '$email', '$pwd')");
    
        if ($sql == 1) {
            //echo 'Se ha creado exitosamente una nueva cuenta.';
            header('Location: ../../HTML/tools/login.php');
            exit;
        } else {
            echo 'Lo siento, ha habido un problema al crear su cuenta.';
        }
    }
}
?>