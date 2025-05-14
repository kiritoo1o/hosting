<?php
include 'Base de datos.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $curp = $_POST['curp'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $rasa = $_POST['rasa'];

    $sql = "INSERT INTO datos (nombre , edad , curp , telefono, direccion, correo, rasa) VALUES ('$nombre', '$edad' , '$curp' , '$telefono', '$direccion', '$correo', '$rasa')";
    if ($conn->query($sql) === TRUE){
        header("Location: listado.php");
 } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
 }
}
$conn->close();
?>
