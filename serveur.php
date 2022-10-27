<?php
    $infos = $_POST;
    echo '<pre>';
    print_r($infos);

    echo $infos['prenom'];

?>

<table border=1>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Photo</th>
        
    </tr>

    <tr>
        <td><?php echo $infos['nom']?></td>
        <td><?php echo $infos['prenom']?></td>
        <td><?php echo $infos['date_naissance']?></td>
        <td><?php echo $infos['telephone']?></td>
        <td><?php echo $infos['email']?></td>
        <td><?php echo $infos['ma_photo']?></td>
    </tr>
</table>