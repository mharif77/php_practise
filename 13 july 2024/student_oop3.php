<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Result</h1>

    <?php 
    if(isset($_POST['submit'])){
        $stid = $_POST['stid'];
        $st = new student('result.txt');
        $st->result($stid);


    }
    
    class student{
        public $datas;

        public function __construct($x){
            $this-> datas = file($x);
        }

        public function result($stid){
            foreach($this-> datas as $data){
                $line = explode("|", $data);
                list($id, $name, $batch) = $line;
                if($id==$stid){
                    echo "ID: $id <br> Name: $name <br> Batch: $batch";
                }
            }
        }
    }
    
    ?>
    <form action="" method="post">
        <select name="stid">
            <option value="">Select One</option>
            <option value="1">Mohiuddin</option>
            <option value="2">Abdullah</option>
            <option value="3">Saif</option>
        </select>
        <input type="submit" name="submit" value="Show Result">

    </form>
</body>
</html>