<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coiffure</title>
</head>
<body>
   <h1>Ajout coiffeur</h1>
   
   <form action="#" method="post">
        <input type="text" name="coiffeur">
        <input type="submit" name="envoi">
    
    </form>
<?php     
    $coiffeurAjouter= $_POST["coiffeur"];
    $db = new PDO('mysql:host=exmachinefmci.mysql.db; dbname=exmachinefmci; charset=utf8', 'exmachinefmci', 'carp310M');
     
    if(isset($_POST["envoi"])){
        $result=$db->prepare("INSERT INTO coiffeurbutez (coiffeur) VALUES (:coiffeurAjouter)");
        $result->execute(array("coiffeurAjouter" => $coiffeurAjouter));
     }
?>

 
    
</body>
</html>