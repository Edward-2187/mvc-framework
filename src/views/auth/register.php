<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    background-color: #f3f3f3;
}

/* Card */
.card {
    background-color: #a8d5a2; /* verde */
    padding: 30px;
    width: 350px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

/* Título */
.card h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #1b5e20;
}

/* Inputs */
.card input {
    width: 100%;
    padding: 10px;
    margin: 6px 0 15px;
    border: none;
    border-radius: 6px;
}

/* Botón */
.card button {
    width: 100%;
    padding: 10px;
    background-color: #2e7d32;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
}

.card button:hover {
    background-color: #1b5e20;
}


</style>



<body>
    <h2>Registro</h2>
    <form action="" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Registrarse</button>
    </form>
    <?php if (isset($error)): ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
</body>

</html>