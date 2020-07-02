<?php
session_start();
// var_dump($_SESSION);
// var_dump($_POST);
$ot = 0;
$not = 0;
if ($_SESSION['answers']['0']['0'] == 'a') {
    $ot++;
} else {
    $not++;
}
if ($_SESSION['answers']['1']['1'] == 'a') {
    $ot++;
} else {
    $not++;
}
if ($_SESSION['answers']['2']['2'] == 'c') {
    $ot++;
} else {
    $not++;
}
if ($_SESSION['answers']['3']['3'] == 'c') {
    $ot++;
} else {
    $not++;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты Теста</title>
</head>

<body>
    <p>Правильных ответов: <?php echo $ot; ?></p>
    <p>Неправильных ответов: <?php echo $not; ?></p>
    <?php session_destroy(); ?>
    <form action="Main.php" method="POST">
        <button type="submit">Начать заново</button>
    </form>
</body>

</html>