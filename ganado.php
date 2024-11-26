<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Ganaste!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="game-container">
        <h1>¡Felicidades!</h1>
        <p>¡Has ganado la partida!</p>
        <p>La palabra era: <strong><?php echo htmlspecialchars($_GET['palabra']); ?></strong></p>
        <a href="index.php"><button>Jugar de nuevo</button></a>
    </div>
</body>
</html>
