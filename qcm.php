<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<title>QCM</title>
<link rel="icon" href="./photos/anim2.gif" type="image/gif">
<style type="text/css">
body {background-color: #A8BBE6;}a {color: blue;}a:hover {color: #AB6100;}a:link {color: brown;}
</style>
</head>
 
<body>
 
<?php
 
if(isset($_POST['choice']) && isset($_POST['choice2'])){
                $choice = intval($_POST['choice']);
                $choice2 = intval($_POST['choice2']);
                echo "<br /><br /"><p>Vos cho"ix :<br />";
 
                $reponse_vraie_question_1 = "1";
                $reponse_vraie_question_2 = "2";
 
                if($choice == $reponse_vraie_question_1) $vrai_ou_faux_1 = "gagn&eacute;s !";
                elseif($choice != $reponse_vraie_question_1) $vrai_ou_faux_1 = "perdus !";
                if($choice2 == $reponse_vraie_question_2) $vrai_ou_faux_2 = "gagn&eacute;s !";
                elseif($choice2 != $reponse_vraie_question_2) $vrai_ou_faux_2 = "perdus !";
                $question_1 = "Quelles est la place du pilote dans un avion ?";
                $question_2 = "Quelle est l'ann&eacute;e de cr&eacute;ation d'AIR FRANCE ?";
                $reponse_1_question_1 = "A gauche";
                $reponse_2_question_1 = "A droite";
                $reponse_1_question_2 = "1945";
                $reponse_2_question_2 = "1933";
                $reponse_3_question_2 = "1969";
                if($choice = 1) $choice = $reponse_1_question_1;
                elseif($choice = 2) $choice = $reponse_2_question_1;
                if($choice2 = 1) $choice2 = $reponse_1_question_2;
                elseif($choice2 = 2) $choice2 = $reponse_2_question_2;
                elseif($choice2 = 3) $choice2 = $reponse_3_question_2;
 
                echo '<br />Pour la question 1 ('.$question_1.'), vous avez r&eacute;pondus "'.$choice.'" et la bonne r&eacute;ponse &eacute;tait la n&deg;'.$reponse_vraie_question_1.', vous avez donc '.$vrai_ou_faux_1;
                echo '<br />Pour la question 2 ('.$question_2.'), vous avez r&eacute;pondus "'.$choice2.'" et la bonne r&eacute;ponse &eacute;tait la n&deg;'.$reponse_vraie_question_2.', vous avez donc '.$vrai_ou_faux_2.'</p>';
 
        }
        else {
             header("Location : qcm.html");
             }
 
?>
 
</body>
</html>