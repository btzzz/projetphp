<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>


    <title>Contact</title>

</head>


<body>
    <?php 

    $prenom= "hugo";
    echo "<h1>Hello $prenom !</h1>";

    if(isset($_POST["envoie"])){
        if($_POST["message"]=='' || !isset($_POST["message"])){

            echo "Veuillez remplir le champ message";
        }
            mail('hugo.butez6@outlook.fr', 'Hello toi', $_POST['message']);
            echo "<em style='color: white;'>Le pigeon voyageur s'est taillé</em>";
    }

    if(isset($_POST['rights'])){
        if(!isset($_POST['mail'])){
            $_POST['mail']='';
        }
        $addresseMail = $_POST["mail"];
        $message = $_POST["message"];
        $bdd = new PDO('mysql:host=exmachinefmci.mysql.db; dbname=exmachinefmci; charset=utf8', 'exmachinefmci', 'carp310M');

        $result = $bdd->prepare('INSERT INTO mdsbutez (mail, message) VALUES (:addresseMail, :message)');
        $result->execute(array('addresseMail' => $addresseMail, "message" => $message));
    }

    ?>
    <div id="container">
    <h1>CONTACT</h1><div class="center">

    <form class="shadow flex" method="POST" action="#" name="contact">
    <!--onsubmit="return isMessageSet()"-->
        <div>
            <input type="radio" name="civilite"> <label for="civilite">Monsieur</label>
            <input type="radio" name="civilite"> <label for="civilite">Madame</label>
            <br>
            <br>
        </div>

        <label for="lastName">Votre Nom</label><input type="text" maxlength="12" placeholder="Votre Nom"
            name="lastName" autofocus autocapitalize="on" placeholder="Votre Nom"><br>
        <label for="phoneNumber">Votre numéro de téléphone</label><input type="tel" minlength="10" maxlength="10"
            name="phoneNumber" placeholder="Votre numéro de téléphone"><br>
        <label for="mail">Votre Mail</label><input type="mail" name="mail" placeholder="Votre Mail"><br>

        <label for="country">Votre Pays</label>
        <select name="country">
            <option value="">Choisissez votre pays</option>
            <option value="france">FR</option>
            <option value="allemagne">DE</option>
            <option value="angleterre">UK</option>
        </select><br>

        <label for="message">Votre message</label><br>

        <textarea name="message" cols="50" rows="10"></textarea><br>


        <div>
            <input type="checkbox" name="rights">
            <label for="rights">Enregistrer mes données</label>
        </div>
        <input type="submit" value="Envoyer" name="envoie"><br>
    </form>
        <a href="index.html">Retour</a>
</div>

</body>

</html>