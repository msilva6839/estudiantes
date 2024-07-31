<?= $this->include('includes/navbar'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }

        .table {
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #007bff;
            color: #fff;
        }

        .table tbody tr {
            background-color: #f9f9f9;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
        }

        .table td, .table th {
            vertical-align: middle;
            text-align: center;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Lista de Estudiantes</h1>
        <a href="<?= site_url('estudiantes/crear') ?>" class="btn btn-primary mb-3">Crear Nuevo Estudiante</a>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Matrícula</th>
                        <th>Curso</th>
                        <th>Calificación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($estudiantes)): ?>
                        <?php foreach ($estudiantes as $estudiante): ?>
                            <tr>
                                <td><?= esc($estudiante['id']) ?></td>
                                <td><?= esc($estudiante['nombre']) ?></td>
                                <td><?= esc($estudiante['matricula']) ?></td>
                                <td><?= esc($estudiante['curso']) ?></td>
                                <td><?= esc($estudiante['calificacion']) ?></td>
                                <td>
                                    <a href="<?= site_url('estudiantes/editar/'.$estudiante['id']) ?>" class="btn btn-warning" title="Editar">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>
                                    <a href="<?= site_url('estudiantes/eliminar/'.$estudiante['id']) ?>" class="btn btn-danger" onclick="return confirm('¿Realmente quieres eliminar este estudiante? Esta acción no se puede deshacer.')" title="Eliminar">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center">No hay estudiantes disponibles.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?= $this->include('includes/footer'); ?>
