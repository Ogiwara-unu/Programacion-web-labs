<?php
$estudiantes = [
    ['nombre' => 'Randall Alvarez', 'edad' => 21, 'carrera' => 'Ingeniería'],
    ['nombre' => 'Marco Roman', 'edad' => 21, 'carrera' => 'Ingeniería'],
    ['nombre' => 'María López', 'edad' => 19, 'carrera' => 'Ingeniería'],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Correo 1</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #0f1117;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 60px 20px;
        }

        .card {
            background: #1a1d27;
            border: 1px solid #2e3144;
            border-radius: 16px;
            box-shadow: 0 4px 32px rgba(0,0,0,0.4);
            padding: 40px;
            width: 100%;
            max-width: 700px;
        }

        .title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #a0aec0;
            margin-bottom: 24px;
        }

        .title span {
            font-size: 1.6rem;
            font-weight: 800;
            color: #e2e8f0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #242736;
        }

        thead th {
            padding: 12px 16px;
            text-align: left;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #718096;
        }

        tbody tr {
            border-top: 1px solid #2e3144;
            transition: background 0.15s;
        }

        tbody tr:hover {
            background: #242736;
        }

        tbody td {
            padding: 14px 16px;
            color: #a0aec0;
            font-size: 0.95rem;
        }

        tbody td:first-child {
            font-weight: 600;
            color: #e2e8f0;
        }

        h2 {
            text-align: center;
            font-size: 1.8rem;
            font-weight: 800;
            color: #e2e8f0;
            margin-bottom: 20px;
            letter-spacing: 0.02em;
            border-bottom: 1px solid #2e3144;
            padding-bottom: 16px;
        }

        .btn-dashboard {
            display: block;
            width: fit-content;
            margin: 24px auto 0;
            padding: 10px 24px;
            background: #242736;
            border: 1px solid #2e3144;
            color: #a0aec0;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            transition: background 0.2s, color 0.2s;
        }

        .btn-dashboard:hover {
            background: #2e3144;
            color: #e2e8f0;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Correo 4</h2>
        <p class="title">
            Información de Estudiantes de Programación Web 2026 —
            <span>versión 1</span>
        </p>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Carrera</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $e): ?>
                <tr>
                    <td><?php echo $e['nombre']; ?></td>
                    <td><?php echo $e['edad']; ?></td>
                    <td><?php echo $e['carrera']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
         <a href="{{ route('dashboard') }}" class="btn-dashboard">
            ← Volver al Dashboard
        </a>
    </div>
</body>
</html>