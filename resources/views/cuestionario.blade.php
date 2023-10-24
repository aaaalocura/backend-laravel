<!-- resources/views/cuestionario.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Cuestionario</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 700;
            margin-bottom: 5px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: 700;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cuestionario</h1>

        <form action="{{ route('cuestionario.evaluate', ['aspirante' => $aspirante->id]) }}"  method="POST">
            @csrf
            <div class="form-group">
                <label for="pregunta1">Pregunta 1:</label>
                <select id="pregunta1" name="pregunta1" required>
                    <option value="">Selecciona una opción</option>
                    <option value="apto">Apto</option>
                    <option value="no_apto">No apto</option>
                    <option value="talvez">Tal vez</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pregunta2">Pregunta 2:</label>
                <select id="pregunta2" name="pregunta2" required>
                    <option value="">Selecciona una opción</option>
                    <option value="apto">Apto</option>
                    <option value="no_apto">No apto</option>
                    <option value="talvez">Tal vez</option>
                </select>
            </div>
            <!-- Agrega más preguntas aquí -->

            <button type="submit">Evaluar</button>
        </form>
    </div>
</body>
</html>
