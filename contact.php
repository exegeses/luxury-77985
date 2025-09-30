<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <!-- isologo -->
         <a href="index.html">
            <img src="imgs/isologo.png" alt="Logo Luxury">   
         </a>
        <!-- barra de navegación -->
         <nav>
            <a href="new.html">New</a>
            <a href="mens.html">Mens</a>
            <a href="womens.html">Womens</a>
            <a href="accessories.html">Accessories</a>
            <a href="contact.html">Contact</a>
         </nav>
    </header>
    <main>
    <?php
        // capturamos datoss enviados por el form
        $nombre     = $_POST['nombre'];        
        $email      = $_POST['email'];
        $consulta   = $_POST['consulta'];
        // configuramos destinatario
        $destinatario = 'info@luxury.com';
        //configuramoss asunto
        $asunto = 'formulario enviado desde la web';
        // configuramos cueprpo de mensasje
        $cuerpo = '<div style="background-color: #1A1A1A;color:white;font-size:24px;font-family:Arial;padding:24px 44px;border-radius:12px">';
        $cuerpo .= 'Nombre: '.$nombre.'<br>';
        $cuerpo .= 'Email: '.$email.'<br>';
        $cuerpo .= 'Consulta: '.$consulta;
        $cuerpo .= '</div>';
        // configuramos encabezados adicionales
        $headers    = "MIME-Version: 1.0\r\n";
        $headers    .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers    .= "From: Luxury <info@luxury.com>\r\n";

        // enviamos el email
        mail($destinatario, $asunto, $cuerpo, $headers );
        echo 'Gracias por contactarnos.'
    ?>
    </main>
    <footer>
        <!-- logo -->
         <a href="index.html">
            <img src="imgs/isologo-footer.png">
         </a>
        <!-- navegación -->
         <nav>
            <a href="#!">About us</a>
            <a href="#!">Privacy policy</a>
            <a href="#!">Terms of Service</a>
         </nav>
    </footer>

</body>
</html>