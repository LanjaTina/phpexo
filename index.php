<?php 
    

        $pdo = new PDO('mysql:host=localhost;dbname=info320', 'root', '');
        

        $q = 'INSERT INTO specialites (nom, credit) VALUES ("mmmmmmmmmmmmm", 566) ';
        $pdo->query($q);


        $data = $pdo->query("SELECT * FROM specialites")->fetchAll();

        foreach($data as $s) {
            echo $s['nom'] . '<br>';
        }

        

?>

