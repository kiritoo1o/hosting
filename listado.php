<?php
include 'Base de datos.php';
$sql = "SELECT * FROM datos ";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de personas</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #0d1b2a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('https://example.com/sao-background.jpg'); /* Reemplaza con la URL de una imagen de fondo de SAO */
            background-size: cover;
            color: #e0e0e0;
        }
        .form-container {
            background-color: rgba(13, 27, 42, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            border: 2px solid #1b9aaa;
            width: 80%;
        }
        .form-container h2 {
            margin-bottom: 20px;
            color: #1b9aaa;
            text-align: center;
            text-shadow: 2px 2px #0b5394;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #1b9aaa;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 2px solid #1b9aaa;
            border-radius: 5px;
            background-color: #1c2e4a;
            color: #e0e0e0;
        }
        .form-group input[type="submit"] {
            background-color: #1b9aaa;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-shadow: 1px 1px #0b5394;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0b5394;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #1b9aaa;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #1b9aaa;
            color: white;
        }
        a {
            color: #1b9aaa;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Lista de personas</h1>
        <table>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>edad</th>
                <th>curp</th>
                <th>telefono</th>
                <th>direccion</th>
                <th>correo</th>
                <th>rasa</th>
                <th>Acciones</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['edad']}</td>
                        <td>{$row['curp']}</td>
                        <td>{$row['telefono']}</td>
                        <td>{$row['direccion']}</td>
                        <td>{$row['correo']}</td>
                        <td>{$row['rasa']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}'>Modificar</a>
                            <a href='delete.php?id={$row['id']}'>Eliminar</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No hay registros</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="index.html">Registrar otra persona</a>
    </div>
</body>
</html>
<?php $conn->close(); ?>
