<?= $this->include('includes/navbar'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Editar Estudiante</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                background-color: #f8f9fa;
                color: #333;
                font-family: Arial, sans-serif;
            }

            .container {
                margin-top: 50px;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h1 {
                color: #007bff;
            }

            .form-group label {
                color: #333;
            }

            .form-control {
                border-radius: 5px;
            }

            .btn-success {
                background-color: #28a745;
                border-color: #28a745;
            }

            .btn-success:hover {
                background-color: #218838;
                border-color: #1e7e34;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="my-4">Editar Estudiante</h1>
            <form action="<?= site_url('estudiantes/actualizar/'.$estudiante['id']) ?>" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?= esc($estudiante['nombre']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="matricula">Matrícula</label>
                    <input type="text" name="matricula" id="matricula" class="form-control" value="<?= esc($estudiante['matricula']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="curso">Curso</label>
                    <input type="text" name="curso" id="curso" class="form-control" value="<?= esc($estudiante['curso']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="calificacion">Calificación</label>
                    <input type="number" step="0.01" name="calificacion" id="calificacion" class="form-control" value="<?= esc($estudiante['calificacion']) ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </body>
</html>

<?= $this->include('includes/footer'); ?>
