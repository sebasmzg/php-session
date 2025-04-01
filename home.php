<?php
session_start();
if (!file_exists('data.php')) {
    die("Error: No se puede encontrar data.php");
}
require_once 'data.php';

if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit;
}

$user = $_SESSION['user'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header>

    <h1>Welcome <?php print $user['name']; ?></h1>
    <a href="logout.php">Logout</a>
</header>

    <section class="posts">
        <?php foreach($posts as $post) : ?>
            <?php if($post['status'] === 'published') : ?>
                <div class="post">
                    <h2><?php print $post['title']; ?></h2>
                    <p><?php print $post['description']; ?></p>
                    <img src="<?php print $post['image']; ?>" alt="" width="300">
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </section>
</body>
</html>
