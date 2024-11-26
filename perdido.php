<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Perdiste!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="game-container">
        <h1>¡Lo siento!</h1>
        <p>Has perdido la partida.</p>
        <p>La palabra era: <strong><?php echo htmlspecialchars($_GET['palabra']); ?></strong></p>
        <a href="index.php"><button>Jugar de nuevo</button></a>
    </div>
</body>
</html>
