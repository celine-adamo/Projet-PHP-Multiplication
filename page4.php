<!-- Une page permettra de tester ses connaissances : 5 multiplications seront générées au hasard dans un formulaire, l'utilisateur répondra dans ce formulaire. Suite à la soumission de ce dernier, son score sera affiché avec les bonnes et les mauvaises réponses. -->
<link href="https://uvc.one/upload/iblock/f0a/f0a40ffd065648ac40d88891420e6a55.css" rel="stylesheet">
<?php include "assets/php/header.php"
?>
<div class=" container-fluid">
    <div class="vh-100 row">
        <div class="page3">
            <h2 class="police  display-3 brillance">Séléctionne une ou plusieurs tables et révise !</h2>
            <div class="shadow-lg p-3 mb-5 rounded col-4">
                <img src="assets/images/mf.jpg" alt="mf" class="rounded-circle border border-light mf">

                <ul class="list-unstyled alert alert-light col">

                    <h5>L'info sympa</h5>
                    <p><em>L'univers de Star Wars regorge de moyens de transport galactique franchement très cool. Mais,
                            allez savoir pourquoi, le Faucon millénaire (ou Millenium Condor) est le vaisseau le plus
                            fameux constamment cité par les fans. Qu'importe, il est vrai que le vaisseau d'Han Solo
                            possède un cachet unique!
                        </em></p>
                </ul>
            </div>
            <form method="post" style="text-align: center;">
                <?php                    
                        for ($i = 1; $i <= 5; $i++) :
                        
                            $rand = rand(1, 10);
                            $rand2 = rand(1, 10);
                            $result = $rand2 * $rand;
                            $var= $rand . "x" . $rand2 . "=";
                        
                      { 
                        if (isset($_POST["bouton"])) {
                            if (empty($result)) {
                                echo "Mauvaise réponse !";
                            } elseif ($result!== $_POST["reponse"]) {
                                echo "Mauvaise réponse !";
                            } else {
                                echo "Bonne réponse !";
                            }
                        }
                        echo "<br>";
                    } ?>
                <input style="text-align: center;" type="text" name="result<?php $i ?>" value="<?php echo" $var"?>" readonly>
                <input type="number" name="reponse<?php $i ?>" value=<?php $result ?>>
                <?php endfor;?>
                <br>
                <button type="submit" name="bouton">valider</button>
            </form>
        </div>
    </div>
</div>

<?php include "assets/php/footer.php" ?>