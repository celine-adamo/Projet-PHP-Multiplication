<!-- La page d'index présentera rapidement le site et affichera une table de multiplication aléatoire (donc entre 1 et 10 ou 15).
 -->

<?php include "assets/php/header.php"
?>
<div class="container-fluid">
    <div class="row vh-100 home">
            <h1 class="police display-3">Apprendre les tables de multiplication</h1>
            <div class="shadow-lg p-3 mb-5 rounded col-5">
                <ul class="list-unstyled alert alert-light">
                    <li>
                    Ici, tu peux apprendre les tables très facilement et en t'amusant. Les opérations
                sont simples et claires, tu peux donc tout de suite commencer à t’exercer sur les tables de multiplication.
                <br>La première étape permet de te familiariser lis à haute voix et répète. Une table aléatoire
                        s'affichera lorsque tu rafraichira cette page. </li>
                    <li>Si tu crois que tu peux t'en souvenir, c'est qu'il est temps de tester tes connaissances!</li>
                    <li>Tu pourras alors choisir parmis 4 niveaux :</li>
                    <br>
                    <li>
                        <ul>
                            <li>Narada: Monte à bord du vaisseau Narada et choisi la table que tu souhaites réviser!</li>
                            <li>Nostromo: A bord du Nostromo séléctionne la table que tu souhaites réviser!</li>
                            <li>Millenium Falcon: Ici plusieurs tables de multiplications seront disponnibles!</li>
                            <li>Mondoshawan Vessel: Monte à bord du Mondoshawan Vessel et choisi la table que tu souhaites réviser!</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="shadow-lg p-5 mb-8 rounded col-2 text-align:center">
                <div class="alert alert-light font-weight-bolder border border-warning" role="alert">
                    <?php
$rand=rand (1,10);
for ($i=1; $i <= 10; $i++){
    $result = $i * $rand;
    echo "<p>$rand x $i = $result </p>";
}
?>
                </div>
            </div>
</div>
</div>
<?php
include "assets/php/footer.php"
?>
