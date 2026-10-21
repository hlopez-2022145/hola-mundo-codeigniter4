<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($titulo) ?></title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1e3a8a, #2563eb);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .contenedor {
            background: white;
            padding: 50px;
            border-radius: 16px;
            text-align: center;
            max-width: 600px;
            width: 90%;
            box-shadow: 0 15px 40px rgba(0,0,0,.2);
        }
        h1 { color: #2563eb; font-size: 48px; }
        h2 { color: #1e293b; }
        p { color: #64748b; line-height: 1.6; }
        .estado {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 8px;
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1><?= esc($mensaje) ?></h1>
        <h2><?= esc($titulo) ?></h2>
        <p><?= esc($descripcion) ?></p>
        <div class="estado">
            Proyecto funcionando correctamente
        </div>
    </div>
</body>
</html>
