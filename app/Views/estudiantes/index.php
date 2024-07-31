<?= $this->include('includes/navbar'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Inicio</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap">

        <style>
            body {
                background-color: #f8f9fa;
                color: #333;
                font-family: Arial, sans-serif;
            }

            .container {
                position: relative;
                text-align: center;
                color: white;
                margin-top: 50px;
            }

            .container img {
                width: 100%;
                height: auto;
                opacity: 0.5; /* 50% opacity */
                border-radius: 8px;
            }

            .welcome-message {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                font-family: 'Montserrat', sans-serif; /* Fuente para el mensaje */
            }

            .welcome-message h1 {
                font-family: 'Playfair Display', serif; /* Fuente para el encabezado */
                color: #fff; /* White color for text */
            }

            .welcome-message p {
                font-family: 'Montserrat', sans-serif; /* Fuente para el párrafo */
                color: #fff; /* White color for text */
            }
        </style>
    </head>

    <body>
        <div class="container">
            <img src="<?= base_url('images/index.jpg') ?>" alt="Estudiante">
            <div class="welcome-message">
                <h1>Bienvenido</h1>
                <p>Bienvenido a la plataforma de gestión de estudiantes. Aquí puede listar, crear, editar y eliminar estudiantes.</p>
            </div>
        </div>
    </body>
</html>

<?= $this->include('includes/footer'); ?>
