<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    
</head>

<style>
* {
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    margin: 0;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #f2f2f2; /* fondo */
}

/* Card */
.card {
    background-color: #a8d5a2; /* verde */
    padding: 30px;
    width: 320px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    text-align: center;
}

/* Inputs */
.card input {
    width: 100%;
    padding: 10px;
    margin: 8px 0 15px;
    border: none;
    border-radius: 6px;
}

/* Botón */
.card button {
    background-color: #2e7d32;
    color: white;
    border: none;
    padding: 10px;
    width: 100%;
    border-radius: 6px;
    cursor: pointer;
}

.card button:hover {
    background-color: #1b5e20;
}

/* Error */
.error {
    color: red;
    margin-top: 10px;
}
</style>

<body>

    <div class="card">
        <h1>Iniciar Sesión</h1>

        <form action="" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar Sesión</button>
        </form>

        <?php if (isset($error)): ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
    </div>

</body>
</html>
