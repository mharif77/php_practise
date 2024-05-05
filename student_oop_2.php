<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
 if(isset($_REQUEST['submit'])){
$st =  $_REQUEST['st']; 
$obj = new student ('result.txt');
echo $obj-> show_result($st);

}
class student{
    public $datas;
    public $arraydata;

    public function __construct($file){
        $this->datas = $file;
        $this->arraydata = file( $this->datas);
}



public function show_result($st){
    foreach( $this->arraydata as $data){
        $line =  explode("|" , $data);
        list($id, $name, $score, $result)= $line;
        if($id == $st){
           $output = "id : $id <br>
           name :  $name <br>
           score : $score <br>
           result : $result";
            
        }
    }
    return   $output;
}
}
 
?>
    

    
   
        

    <form action="" method="post">
        <select name="st" id="">
            <option value="">choose one</option>
            <option value="1">arif</option>
            <option value="2">nusrat</option>
            <option value="3">noman</option>
        </select>
        <input type="submit" name = "submit" value="show value">
    </form>
</body>
</html>