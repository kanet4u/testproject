<?php
$soni = 1;

if (isset($_POST["aforizm"]))
{
    $f = $_POST["aforizm"];
    $a = $_POST["author"];



    $file = fopen("data/".$_POST['cat']."/aforizmlar", "r");
    if($file)
    {
        while(($line = fgets($file)) != false)
        {
           $soni++;
        }
    }

            $writing = fopen("data/".$_POST['cat']."/aforizmlar", "a");
            fprintf($writing,"%s", "\n". $soni.".;".$f."'$a/0");
            header("Location: index.php?a=add");
}

?>
<form method = "post" action = "add.php">
    <select id = "cat" name = "cat">
        <option>Введите категорию</option>
        <option value = "jizn">О жизни</option>
        <option value = "drujba">О дружбе</option>
        <option value = "lyubov"> О любви</option>
        <option value = "schastye">О счастье</option>
    </select><br>

    <textarea placeholder="Введите афоризм" cols = "100" rows = "5" name = "aforizm" id = "text"></textarea><br>
    <input placeholder="Введите автор" type="text" name="author" id="author"><br>
    <input type = "submit" value = "Добавить" name = "button1" id = "btn1"><br>
</form>
