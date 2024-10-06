<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
            $number = $_GET["number"] ?? 0;
            echo "<h1>Você escolheu o número <strong>$number</strong></h1>";
        ?>
    </header>
    <main>
        <?php
            $number = $_GET["number"] ?? 0;
            $ante_number = $number - 1;
            $next_number = $number + 1;
            echo "<h1>$ante_number, <span>$number</span>, $next_number</h1>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>