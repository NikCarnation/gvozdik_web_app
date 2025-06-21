<?php
if (!isset($_COOKIE['User'])) {
    header("Location: login.php");
    exit;
}

$username = $_COOKIE['User'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приветствие</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="reg_text">
                <h1>Привет, <?php echo htmlspecialchars($username); ?></h1>
            </div>
        </div>
    </div>
</body>
</html>