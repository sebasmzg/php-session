<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>Sessions and control access</h1>
</header>
<main>
    <form action="login.php" method="POST">
        <h2>Login</h2>
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>
    <?php if(isset($GET['error'])) : ?>
        <p class="error"><?php print htmlspecialchars($_GET['error']); ?></p>
    <?php endif; ?>
</main>
</body>
</html>