<?php
require '../../PHP/conexiondb_test.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validación de datos de entrada
    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if (empty($user) || empty($email) || empty($password) || empty($confirmPassword)) {
        $message = 'Por favor, complete todos los campos.';
    } elseif ($password !== $confirmPassword) {
        $message = 'Las contraseñas no coinciden. Intente nuevamente.';
    } else {
        // Verifica si el correo electrónico ya existe en la base de datos
        $sql = "SELECT ID_Account FROM Cuentas WHERE Correo_Account = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($existingUser) {
            $message = 'Ya existe una cuenta con esta dirección de correo electrónico.';
        } else {
            // Hashea la contraseña
            //$passwordHash = password_hash($password, PASSWORD_BCRYPT);

            // Inserta el nuevo usuario en la base de datos
            $sql = "INSERT INTO Cuentas (Usuario_Account, Correo_Account, Contrasena_Account) 
                    VALUES (:user, :email, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            if ($stmt->execute()) {
                $message = 'Se ha registrado exitosamente, será redirigido en un momento.';
                header('Location: ../../HTML/tools/login.php');
                exit;
            } else {
                $message = 'Lo sentimos, ha habido un problema al crear su cuenta.';
            }
        }
    }
}
?>

<!-- HTML aquí (sin cambios en la parte de HTML) -->

<?php
// Cierra la conexión cuando hayas terminado
$pdo = null;
?>
