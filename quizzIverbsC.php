<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styleBase.css" />
    <title>EnglishApp-accueil</title>
</head>

<body>
    <!-- ===================== Entete =====================-->

    <div id="entete"></div>

    <div id="main">
        <!-- ==================== Menu =========================-->

        <div id="menu">
            <nav>
                <ul>
                    <a href="PageAccueil.html"  title="Retour à la page d'accueil"><img src="images/accueilMaison.jpg"/></a>


                     
                    <li><a href="Vocabulaire.html" title = "Fiches de vocabulaires">Vocabulary</a></li>

                     <li><a href="grammaire.html" title = "Revoyons les règles de grammaire">Grammar</a></li>

                     <li><a href="toeic.html" title = "Exercices pour le TOEIC">TOEIC</a></li>
                    <li><a href="cvandcl.html" title = "Comment bien construire son CV et sa CV">CV and Cover Letter</a></li>
                </ul>
            </nav>
         </div>
    <!-- ======================= Centre Page ===================-->

        <div id="contenu">  
		<?php 
        if (isset($_POST['Valider']) ) {
            $choix1 = $_POST['calcul1'];
            $choix2 = $_POST['calcul2'];
            if ($choix1==5 ) {
                if($choix2==24){
                    echo 'Oui oui oui';
                    echo '<br>';
                }else{
                    echo 'Retourne apprendre les multiplications';
                }
                    echo 'Bonne réponse';
                    echo '<br>';

            }else{
                    echo 'nahh mon pote t es pas loin ';
                    echo '<br>';

            }

            //echo $_POST['calcul1'.'calcul2'];
        }
         ?>



     </div>
    </div>
    
    <!-- ================Le pied de page ===================-->
    
    <div id="footer">
        <p>© Copyright la team CodeursFous, tous droits réservés</p>
    </div>
    
</body>
</html>