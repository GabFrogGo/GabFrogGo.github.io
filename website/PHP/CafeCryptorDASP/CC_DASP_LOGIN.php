<?php
require '../conexiondb_test.php'; // Incluye tu archivo de conexión a la base de datos

// Obtiene las credenciales del usuario desde la solicitud POST
$data = json_decode(file_get_contents("php://input"), true);
$email = $data['email'];
$password = $data['password'];

// Realiza la validación de las credenciales y verifica la contraseña
$sql = "SELECT Contrasena_Account FROM Cuentas WHERE Correo_Account = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['Contrasena_Account'])) {
    // Las credenciales son válidas, puedes generar un token de autenticación si es necesario
    $response = ["status" => "Exito"];
} else {
    $response = ["status" => "Credenciales incorrectas"];
}

// Devuelve la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
