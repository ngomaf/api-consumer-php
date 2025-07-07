<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> | API consumer</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        <h1><a href="/">API consumer</a></h1>

        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/notice">Notícias</a></li>
                <li><a href="/user">Utilizadores</a></li>
                <li><a href="/peaple">Personagens</a></li>
                <li><a href="/about">Sobre</a></li>
            </ul>
        </nav>
    </header>
    <main>
        
        <?php require VIEWS . '/' . $page . '.php'; ?>

    </main>
    <footer>
        <p>&copy; api consumer <?= date('Y') ?></p>
    </footer>
</body>
</html>