<?php
session_start();
require_once '../../PHP/conexiondb_test.php';
$message = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if(empty($email) || empty($password)) {
        $message = 'Por favor, complete todos los campos.';
    } else {
        $sql = "SELECT * FROM Cuentas WHERE Correo_Account = :email AND Contrasena_Account = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!empty($user)) {
            $_SESSION['usuario'] = $user["Usuario_Account"];
            $_SESSION['id_usuario'] = $user["ID_Account"];
            header('Location: ../../HTML/utilities/dashboard.php');
        } else {
            $message = 'Credenciales incorrectas. Por favor, intente nuevamente.';
        }
    }
}
?>