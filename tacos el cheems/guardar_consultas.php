<?php
include "Conexion.php";

//Recoger datos del formulario 
    $nombre = $_POST ['nombre'] ?? '';
    $apellido = $_POST ['apellido'] ?? '';
    $correo = $_POST ['mail'] ?? '';
    $consulta = $_POST ['consulta'] ?? '';

// insertar datos en la tabla
    $sql = "INSERT INTO consulta (nombre, apellido, correo, consulta) VALUES (?, ?, ?, ?)";
    $stmt = $conn-> prepare ($sql);
    $stmt-> bind_param("ssss", $nombre, $apellido, $correo, $consulta);
    if ($stmt->execute()) {
        echo "✅ Consulta guardada correctamente.";
    } else {
        echo "❌ Error al guardad:" . $stmt->error;
    }

    $stmt->close();
    $conn->close();

} else {
    echo "⚠️ Acceso no permitido. Este archivo solo debe usarse al enviar el formulario";
}
?>

