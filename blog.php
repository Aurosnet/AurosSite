<?php
// Carrega os posts do blog
$posts = json_decode(file_get_contents('posts.json'), true);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="styles.css"> <!-- Certifique-se de que o CSS está correto -->
</head>
<body>
    <h1>Blog</h1>
    <section id="blog">
        <?php foreach ($posts as $post): ?>
            <div class="blog-post">
                <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                <small><?php echo htmlspecialchars($post['date']); ?></small>
                <p><?php echo htmlspecialchars($post['content']); ?></p>
            </div>
        <?php endforeach; ?>
    </section>
</body>
</html>
