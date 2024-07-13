<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $st = $_POST['st'];
        $obj = new student('result.txt');
        echo $obj-> show_result($st);
    }
    ?>
    <form action="" method="post">
        <select name="st" id="">
            <option value="">choose one</option>
            <option value="1">arif</option>
            <option value="2">mim</option>
            <option value="3">humaira</option>

        </select>
        <input type="submit" name="submit" value="show result">
    </form>
</body>
</html>