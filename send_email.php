<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = htmlspecialchars($_POST['firstName']);
    $middleName = htmlspecialchars($_POST['middleName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
    $propertyType = htmlspecialchars($_POST['propertyType']);
    $propertyDebt = isset($_POST['propertyDebt']) ? htmlspecialchars($_POST['propertyDebt']) : 'No';
    $location = htmlspecialchars($_POST['location']);

    // Formatear el contenido del correo
    $to = "info@casacashexpress.com";
    $subject = "Nueva Solicitud de Información";
    $message = "
    <html>
    <head>
        <title>Nueva Solicitud de Información</title>
    </head>
    <body>
        <h2>Detalles de la Solicitud</h2>
        <table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <th>Campo</th>
                <th>Información</th>
            </tr>
            <tr>
                <td>Nombre</td>
                <td>$firstName</td>
            </tr>
            <tr>
                <td>Segundo Nombre</td>
                <td>$middleName</td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td>$lastName</td>
            </tr>
            <tr>
                <td>Número de Teléfono</td>
                <td>$phoneNumber</td>
            </tr>
            <tr>
                <td>Tipo de Propiedad</td>
                <td>$propertyType</td>
            </tr>
            <tr>
                <td>Deuda en Propiedad</td>
                <td>$propertyDebt</td>
            </tr>
            <tr>
                <td>Ubicación</td>
                <td>$location</td>
            </tr>
        </table>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= "From: noreply@tu-dominio.com" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado con éxito.";
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
