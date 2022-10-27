<ul>
    <?php
        $li = '';
        $etudiants = getListeEtudiant();
        foreach ($etudiants as $key => $etudiant) {
            $li .= '<li>'.$key.' '.$etudiant.'</li>';
        }

        echo $li;
    ?>

    </ul>