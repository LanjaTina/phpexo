<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus aspernatur, iste eius iusto rerum incidunt ipsam dicta excepturi adipisci voluptates nisi placeat explicabo, saepe cupiditate?';
    
        $details = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum consequatur nam nemo voluptas minus mollitia quod tempora dolores. Iusto ratione sed impedit perferendis cupiditate iure vitae ipsum corporis, magnam debitis!";
    
        
        function getNbreLike() {
            return 72;
        }

        function getListeEtudiant() {
            $etudiants = [
                1 => 'Djamil',
                2 => 'Kanto',
                3 => 'Mihaja',
                4 => 'Claudia',
                5 => 'Princia'
            ];    
            return $etudiants;
        }
        
    ?>

    <div style="float:right">
        <h3>S'authentifier</h3>
        <?php
            include('formulaire.php');
        ?>
    </div>

    <h1 style="clear : both">Page de description</h1>

    <p><?php echo $description; ?></p>

    <h3>Détails de la page</h3>

    <p><?php echo $details; ?></p>


    <h4>Nombre de LIKE : <?php echo getNbreLike(); ?> </h4>


    <h3>Listes des étudiants</h3>
    <?php 
    
        require('liste_etudiants.php')
    ?>
</body>
</html>