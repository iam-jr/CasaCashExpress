<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['clientName']);
    $middleName = htmlspecialchars($_POST['secondName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']); 
    $correo = htmlspecialchars($_POST['correo']);
    $location = htmlspecialchars($_POST['location']);
    $propertyType = htmlspecialchars($_POST['propertyType']);
    $exactlocation = htmlspecialchars($_POST['ubicacion']);
    $areaCode = htmlspecialchars($_POST['areaCode']);
    $streetNumber = htmlspecialchars($_POST['streetNumber']);
    $propertyDebt = isset($_POST['deuda']) ? htmlspecialchars($_POST['deuda']) : 'No';

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
                <td>Correo Electrónico</td>
                <td>$correo</td>
            </tr>
            <tr>
                <td>Tipo de Propiedad</td>
                <td>$propertyType</td>
            </tr>
            <tr>
                <td>Pueblo</td>
                <td>$location</td>
            </tr>
            <tr>
                <td>Barrio, Sector o Urbanización</td>
                <td>$areaCode</td>
            </tr>
            <tr>
                <td>Calle y Número</td>
                <td>$streetNumber</td>
            </tr>
            <tr>
                <td>Deuda en Propiedad</td>
                <td>$propertyDebt</td>
            </tr>
        </table>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $firstName $middleName $lastName <$correo>" . "\r\n"; // From header

    if (mail($to, $subject, $message, $headers)) {
        $submitted = true;
    } else {
        $errorMessage = "Error al enviar el correo.";
    }
}
?>

<?php include 'header.php'; ?> <!-- Include the header -->

<main>
<?php
if (isset($submitted) && $submitted) {
    $fullName = $firstName;
    if (!empty($middleName)) {
        $fullName .= " " . $middleName; // Add second name if present
    }
    $fullName .= " " . $lastName; // Always add last name

    // Display thank you message with the same design
    echo "<div id='coming-soon' class='coming-soon section'>
        <h2>¡Dinero rápido por tu propiedad en cash!</h2>
        <h3>Estimado/a $fullName,</h3>
        <p>Gracias por tomarse el tiempo de completar el formulario. Hemos recibido su información exitosamente y la revisaremos con atención. Su interés y confianza en nosotros son muy importantes, y estamos aquí para ayudarle en todo lo que necesite.</p>
        <p>Nos pondremos en contacto con usted en breve para continuar con el siguiente paso.</p>
        <p>¡Gracias nuevamente y quedamos a su disposición!</p>
    </div>";
}
?>
</main>

<?php include 'footer.php'; ?> <!-- Include the footer -->