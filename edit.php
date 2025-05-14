<?php
include 'Base de datos.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM datos WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No se encontró el registro.";
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $curp = $_POST['curp'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $rasa = $_POST['rasa'];
    $password = $_POST['password'];

    // Verifica la contraseña de seguridad
    $security_password = "david"; // Cambia esto por tu contraseña de seguridad
    if ($password === $security_password) {
        $sql = "UPDATE datos SET nombre='$nombre', edad='$edad', curp='$curp', telefono='$telefono', direccion='$direccion', correo='$correo', rasa='$rasa' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: listado.php");
        } else {
            echo "Error al actualizar el registro: " . $conn->error;
        }
    } else {
        echo "Contraseña de seguridad incorrecta.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Registro</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function generarRasa() {
            var random = Math.random() * 100; // Genera un número aleatorio entre 0 y 100
            var rasa;

            if (random < 40) {
                rasa = "Humano";
            } else if (random < 80) {
                rasa = "Mitad Bestia";
            } else {
                rasa = "Tripido";
            }

            document.getElementById('rasa').value = rasa;
            alert('Rasa generada: ' + rasa);
        }
    </script>
</head>
<body>
    <div class="form-container">
        <h2>Modificar Registro</h2>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" value="<?php echo $row['edad']; ?>" required>
            </div>
            <div class="form-group">
                <label for="curp">Curp:</label>
                <input type="text" id="curp" name="curp" value="<?php echo $row['curp']; ?>" required>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="number" id="telefono" name="telefono" value="<?php echo $row['telefono']; ?>" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" value="<?php echo $row['direccion']; ?>" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" value="<?php echo $row['correo']; ?>" required>
            </div>
            <div class="form-group">
                <label for="rasa">Rasa:</label>
                <input type="text" id="rasa" name="rasa" value="<?php echo $row['rasa']; ?>" readonly>
                <button type="button" onclick="generarRasa()">Generar Rasa</button>
            </div>
            <div class="form-group">
                <label for="password">Contraseña de Seguridad:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Actualizar">
            </div>
        </form>
    </div>
</body>
</html>
