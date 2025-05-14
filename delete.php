<?php
include 'Base de datos.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eliminar Registro</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="form-container">
            <h2>Eliminar Registro</h2>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="password">Contraseña de Seguridad:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Eliminar">
                </div>
            </form>
        </div>
    </body>
    </html>
    <?php
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $password = $_POST['password'];

    // Verifica la contraseña de seguridad
    $security_password = "David1213"; // Cambia esto por tu contraseña de seguridad
    if ($password === $security_password) {
        $sql = "DELETE FROM datos WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: listado.php");
        } else {
            echo "Error al eliminar el registro: " . $conn->error;
        }
    } else {
        echo "Contraseña de seguridad incorrecta.";
    }
}
?>
