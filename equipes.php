<?php include("header.php") ?>

<h1>Nos profs </h1>

<?php

    $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');

    if($_POST) {
        $insert = ' INSERT INTO profs (nom, email) VALUES  ("'.$_POST['nom'].'", "'.$_POST['email'].'") ';
        $pdo->query($insert);
    }

    // Supprimer une ligne
    
    if(isset($_GET['id']) && $_GET['action'] == 'delete') {
        $sqlDelete = 'DELETE FROM profs WHERE id = '.$_GET['id'].'  ';
        $pdo->query($sqlDelete);
    }

    if(isset($_GET['id']) && $_GET['action']== 'edit') {
        die('Edit');
    }


    $q = 'SELECT * FROM profs';

    $profs = $pdo->query($q)->fetchAll();

    $ul = '<ul>';

    foreach($profs as $k =>  $p) { //represente une ligne dans la table
        $ul .= '<li>
        '.$p['nom'].' - <em>'.$p['email'].'</em>
            <a href="?id='.$p['id'].'&action=delete">Supprimer</a>
            <a href="?id='.$p['id'].'&action=edit">Editer</a>
        </li>';
    }

    $ul .= '</ul>';

    echo $ul;


?>

<form action="equipes.php" method="post">
    <label for="">Nom </label>
    <input type="text" name="nom" id="">
    <br><br>

    <label for="">Email</label>
    <input type="text" name="email" id="">

    <br><br>

    <input type="submit" value="Créer un prof" name="btn_submit">
</form>



<?php include("footer.php") ?>