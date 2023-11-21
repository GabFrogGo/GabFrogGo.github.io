<?php
$tablerowsrequest = "SELECT * FROM llaves_cifradas WHERE ID_Account = :id_usuario";

try {
    $stmt = $pdo->prepare($tablerowsrequest);
    $stmt->bindParam(':id_usuario', $iduserreq, PDO::PARAM_INT);
    $stmt->execute();

    if(!$stmt) {
        die("Petición inválida o algo salió mal: " . $pdo->errorInfo()[2]);
    }

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "
        <tr>
        <td>
            <div class='row-st-contents'>
                <div class='row-data-container id-num'>
                </div>
            </div>
        </td>
            <td>
                <div class='row-st-contents'>
                    <div class='row-data-container'>
                        " . $row["Nombre_Archivo"] . "
                    </div>
                    <div class='row-function-container'>
                        <img class='copy-icon' src='../../Resources/svgicons/copy.svg' alt='Copy'>
                    </div>
                </div>
            </td>
            <td>
                <div class='row-st-contents'>
                    <div class='row-data-container'>
                        " . $row["Llave_Valor"] . "
                    </div>
                    <div class='row-function-container'>
                        <img class='copy-icon' src='../../Resources/svgicons/copy.svg' alt='Copy'>
                        <img class='text-view' src='../../Resources/svgicons/eye.svg' alt='View'>
                    </div>
                </div>
            </td>
            <td>" . $row["CryFile_Fecha"] . "</td>
            <td>" . $row["CryFile_Hora"] . "</td>
            <td class='actions-column'>
                <a href='#'><img src='../../Resources/svgicons/edit.svg' alt='Edit' /></a>
                <a href='#'><img src='../../Resources/svgicons/trash.svg' alt='Delete' /></a>
            </td>
        </tr>";
    }
} catch(PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
