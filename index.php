<?php
 
    session_start();
   
    $lettre = $_POST['lettre'];
    
    
    if(!isset($_SESSION['error']) || isset($_GET['reset'])){
        $_SESSION['error'] = 0;
    }
    
    
    $error = $_SESSION['error'];
    
    if(!preg_match(" /^[a-zA-Z]{1,1}$/ ", $lettre)){
        $error++;
        $lettre = "Ce caractère n'est pas autorisé";
    }

     $_SESSION['error'] = $error;
     
  
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./KNACSS/css/knacss.css"/>
        <link rel="stylesheet" href="./css/leon.css"/>

        <title>Le pendu</title>
    </head>
    <body>


        <div class="alert--inverse uno">
            <h1 class="titre">LE PENDU: deviner un mot</h1>
        </div>
        <form class="resultat" method="post" action="index.php">
            
            <p>Révéler une lettre : <input type="text" name="lettre" maxlength="1" size="1"/></p>
            <button type="submit">Envoyer</button>
        </form>
        
        <?php
        
        $pendu=array("img/pendu1.png","img/pendu2.png","img/pendu3.png","img/pendu4.png","img/pendu5.png","img/pendu6.png","img/pendu7.png","img/pendu8.png"); 
        
        ?>
        <h2><?= strtoupper($lettre) ?></h2><img src="<?= $pendu[$error] ?>">
       
        
        <a href="index.php?reset">RAZ</a>
        <script
                src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous">
        </script>
        <script>


        </script>
    </body>
</html>


