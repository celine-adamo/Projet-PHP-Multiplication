<!-- 
Une page permettra à l'utilisateur de tester ces connaissances d'une autre manière. Un formulaire lui permettra de choisir une table de multiplication. Suite à la soumission de ce formulaire, un autre formulaire affichera une multiplication avec un nombre aléatoire * la table sélectionnée. Suite à la soumission du formulaire, un messsage affichera s'il a juste ou faux.
 -->
<?php include "assets/php/header.php"
?>

<div class="container-fluid">
    <div class="row">
        <div class="page4">
            <h1 class="police  display-3">Séléctionne une ou plusieurs tables et révises !</h1>
            <div class="shadow-lg p-3 mb-5 rounded col-4">
                <img src="assets/images/vessel.jpg" alt="vessel" class="rounded-circle border border-light vessel">

                <ul class="list-unstyled alert alert-light col">

                    <h5>L'info sympa</h5>
                    <p><em>Son apparition dans Le Cinquième Élément est peut-être trop brève, mais le vaisseau des
                            Mondoshawans possède un des plus beaux design qui soit. Son look rétro et sa couleur cuivrée
                            lui confèrent une certaine élégance qu'on observe rarement dans la conception d'objets
                            volants pour le cinéma de science-fiction.
                        </em></p>
                </ul>
            </div>

            <div class="centre">
                <div class="list-unstyled alert alert-light col-5" style="text-align: center;">
                    <div class="col-5" style="margin-left: 30%;">

                        <form method="post">
                            <label for="table">Choisi ta table !</label>
                            <select class="form-control" id="table" name="table">
                                <?php
                                $rand = rand(1, 10);
                                for ($i = 1; $i <= 10; $i++) : ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                            <?php
                            if (isset($_POST["table"])) {
                                $result = $rand * $_POST["table"];
                            }
                            ?>

                            <br>
                            <button type="submit" class="btn btn-primary">C'est parti!</button>
                        </form>
                    </div>

                    <div class="col-5" style="margin-left:3%;">
                        <?php
                        if (!empty($_POST)) : ?>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="text-center">Opération</th>
                                        <th scope="col" class="text-center">Résultat</th>
                                    </tr>
                                </thead>
                                <div class="mt-5 centre shadow-lg  rounded col-4">
                                    <tbody>
                                        <form method="post">
                                            <tr>
                                                <td class='text-center'><?= $_POST["table"] ?> x <?= $rand ?></td>
                                                <td class='text-center'><input type='number' name="result">
                                                    <input type="hidden" name="reponse" value="<?= $result; ?>">
                                                    <input type="hidden" name="table" value="<?= $_POST['table']?>">
                                                    <button type="submit" name="star" class="btn btn-primary ">Star't</button>
                                                </td>
                                            </tr>
                                        </form>
                                    </tbody>
                                </div>
                            </table>
                        <?php
                        endif; 
                        if (isset($_POST['reponse'])){
                            if ($_POST['reponse']!==$_POST['result']){
                                echo "Mauvaise réponse !";
                            }
                            else { 
                                echo "Bonne Réponse !";

                            }

                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include "assets/php/footer.php"
?>