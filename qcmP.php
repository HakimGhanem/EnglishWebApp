<html>
<body>
<title>QCM</title>
<link rel="icon" href="./photos/anim2.gif" type="image/png">
 
<body bgcolor="#A8BBE6">
<body link="blue" vlink="#AB6100" alink="brown">
 
<script type="text/javascript">
dateheure = new Date();
document.write("Nous sommes le "+dateheure.getDate()+"/"+(dateheure.getMonth()+1)+"/"+dateheure.getFullYear()+"<br>"); document.write("et il est actuellement "+dateheure.getHours()+":"+dateheure.getMinutes());
</script>
<br>
<br>
 
<form action="qcm.php" method="post">
Quelles est la place du pilote dans un avion ? :
<input type="radio" name="choice" value="1">A gauche
<input type="radio" name="choice" value="2">A droite<br>
 
Quelle est l'année de création d'AIR FRANCE ? :
<input type="radio" name="choice2" value="1">1945
<input type="radio" name="choice2" value="2">1933
<input type="radio" name="choice2" value="3">1969<P>
 
<P>
<INPUT TYPE="RESET" VALUE="Effacer"> Pour recommencer<P>
<INPUT TYPE="SUBMIT" VALUE="Valider" > Pour envoyer ces informations<P>
 
</FORM >
 
 
 
</body>
</html>


<?php
 
//Si le formulaire à bien été soumis
if(isset($_POST['choice']) && isset($_POST['choice2'])){
$choice = intval($_POST['choice']);
$choice2 = intval($_POST['choice2']);
echo 'Vos choix :<br />';
 
//Ici on met le numéro de la réponse de la question 1 qui est vraie
//met par exemple '2'
$reponse_vraie_question_1 = "1";
 
//Ici on met le numéro de la réponse de la question 2 qui est vraie
//met par exemple '2'
$reponse_vraie_question_2 = "1";
 
//Ne touche pas à cette partie
if($choice == $reponse_vraie_question_1) $vrai_ou_faux_1 = "gagnés !";
elseif($choice != $reponse_vraie_question_1) $vrai_ou_faux_1 = "perdus !";
if($choice2 == $reponse_vraie_question_2) $vrai_ou_faux_2 = "gagnés !";
elseif($choice2 != $reponse_vraie_question_2) $vrai_ou_faux_2 = "perdus !";
$question_1 = "Quelles est la place du pilote dans un avion ?";
$question_2 = "Quelle est l'année de création d'AIR FRANCE ?";
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
 
echo '<br />Pour la question 1 ('.$question_1.'), vous avez répondu "'.$choice.'" et la bonne réponse était la n°'.$reponse_vraie_question_1.', vous avez donc '.$vrai_ou_faux_1;
echo '<br />Pour la question 2 ('.$question_2.'), vous avez répondu "'.$choice2.'" et la bonne réponse était la n°'.$reponse_vraie_question_2.', vous avez donc '.$vrai_ou_faux_2;
 
}
else {
//si le formulaire n'a pas été soumis ou si il est incomplet, on redirige le visiteur vers la page du QCM
header("Location : URL-DE-LA-PAGE-DU-QCM");
}
 
?>