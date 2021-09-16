<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Převod peněz</h1>

<form action="index.php" method="post" > 

Částka :
<input type="number" value> <br>
<h2> Převod : </h2> 
<input type="radio" id="eur_czk" name="prachy" value="eur_czk">
<label for="eur_czk">EUR na CZK</label><br>
<input type="radio" id="czk_eur" name="prachy" value="czk_eur">
<label for="czk_eur">CZK na EUR</label>

<?php
$submit = filter_input(INPUT_POST,'submit');
//$amount = //;
$type = 

if(isset($submit)) {
    // proved konverzaci

if()
} else {
    //vypiš formulář 
}




?>


<br>
<br>
<input type="submit" value="Převést" name="submit" >
</form>

</body>
</html>

