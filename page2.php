<!-- Une page proposera via un formulaire de réviser une seule table à la fois via un formulaire *(utiliser un select avec plusieurs options)*. Après soumission de ce dernier la table sélectionnée s'affiche. -->

<?php include "assets/php/header.php"
?>
<div class=" container-fluid">
    <div class="vh-100 row">
        <div class="page1">
            <h1 class="police display-2">Séléctionne une tables et révise !</h1>
            <div class="d-flex flex-row-reverse col-9">
                <img src="assets/images/narada.jpg" alt="narada" class="rounded-circle border border-light image">


                <div class="shadow-lg p-4 mb-0 rounded col-5">
                    <ul class="list-unstyled alert alert-light col">

                        <h5>L'info sympa</h5>
                        <p><em>Bien que le USS Enterprise soit l'un des moyens de transport spatial ayant profondément
                                marqué l'imaginaire d'un nombre important de fanatiques de science-fiction, il est, dans
                                les
                                récentes années, l'un des vaisseaux les plus originaux proposés au grand écran.</em></p>
                    </ul>
                </div>
            </div>
            <div class="d-flex flex-row-reverse col-6">
                <div class="alert alert-light col-6 order-4 d-flex justify-content-center" role="alert">
                    <form method="post">
                        <div class="form-group">
                            <label for="table">Paré au révision ?</label>
                            <select class="form-control" id="table" name="table">
                                <?php
                                for ($i = 1; $i <= 10; $i++) : ?>
                                    <option value="<?= $i ?>" <?php if (!empty($_POST) && $i === intval($_POST["table"])) {
                                                                    echo "selected";
                                                                } ?>><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">C'est parti!</button>
                    </form>
                    <?php
                    if (!empty($_POST)) : ?>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-center">Opération</th>
                                    <th scope="col" class="text-center">Résultat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 1; $i <= 10; $i++) :
                                    $result = $_POST["table"] * $i; ?>
                                    <tr>
                                        <td class='text-center'><?= $_POST["table"] ?> x <?= $i ?></td>
                                        <td class='text-center'><?= $result ?></td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    <?php
                    endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<?php include "assets/php/footer.php"
?>