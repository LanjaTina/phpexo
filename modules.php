<?php include("header.php") ?>

<h1>Nos modules </h1>

<?php

    $pdo = new PDO('mysql:host=localhost;dbname=info253', 'root', '');


    if(isset($_POST['btn_submit'])) {

        $sqlInsert = 'INSERT INTO modules (nom, credit) VALUES ("'.$_POST['nom'].'", '.$_POST['credit'].') ';
        $pdo->query($sqlInsert);
    }


    $q = 'SELECT * FROM modules';

    $modules = $pdo->query($q)->fetchAll();

    $ul = '<ul>';

    foreach($modules as $k =>  $module) {
        $ul .= '<li>'.$module['credit'].' - '.$module['nom'].'</li>';
    }

    $ul .= '</ul>';

    echo $ul;


?>

<form action="modules.php" method="post">
    <label for="">Nom </label>
    <input type="text" name="nom" id="">
    <br><br>

    <label for="">Crédit</label>
    <input type="text" name="credit" id="">

    <br><br>

    <input type="submit" value="Créer un module" name="btn_submit">
</form>



<?php include("footer.php") ?>