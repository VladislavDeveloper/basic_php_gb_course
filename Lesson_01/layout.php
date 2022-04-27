<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My page</title>
</head>

<body style="margin: 0 auto; display: flex; flex-direction:column; height: 100vh; ">
    <header style="margin: 0 auto; background-color: <?= $mainColor?>; padding: 6px 100px 6px 100px; margin-bottom: 60px">
        <h2><?= $mainTitle ?></h2>
    </header>
    <main style="margin: 0 auto;">
        <img src="img/<?= $randomNum ?>.jpg" alt="image" width="550px">
    </main>
    <footer style="margin: auto; background-color: <?= $mainColor?>; padding: 20px 100px 30px 100px; color: white">
        <div class="contacts"><h3><?= $ourContact ?></h3></div>
        <div><h3>&copy; Redin Vladislav <?= $currentYear ?></h3></div>
    </footer>
</body>

</html>