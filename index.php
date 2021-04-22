<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP badwords</title>
</head>
<body>

<h1>Badwords</h1>

<?php
    $string = 'Li vuoi quei kiwi? E se non vuoi quei kiwi che kiwi vuoi?';
    $lenght = strlen($string);
    $newString = str_replace($_GET["toReplace"], 'xxx', $string);
    $newLenght = strlen($newString);
?>
<h3><?php echo $string ?></h3>
<h3>La lunghezza della stringa è:<?php echo $lenght ?></h3>
<h3><?php echo $newString ?></h3>
<h3>La lunghezza della nuova stringa è:<?php echo $newLenght ?></h3>
<?php echo "Ciao <strong> Ciao </strong>" ?>
</body>
</html>