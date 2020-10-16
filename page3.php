<!-- Une page proposera via un formulaire de réviser plusieurs tables à la fois via un formulaire *(utiliser des checkboxs pour cela)*. Après soumission de ce dernier les tables sélectionnées s'affichent. -->

<?php include "assets/php/header.php"
?>
<div class=" container-fluid">
    <div class="vh-100 row">

        <div class="page2">
            <h2 class="display-3" style="text-shadow: 2px 4px 3px rgba(0,0,0,0.3) ">Séléctionne plusieurs tables et révise !</h2>            <img src="assets/images/nostromo.jpg" alt="nostromo" class="rounded-circle border border-light nostromo">

            <div class="d-flex flex-row-reverse col-9">
                <div class="shadow-lg p-3 mb-0 rounded col-7 ">
                    <ul class="list-unstyled alert alert-light col">
                        <br>
                        <h5>L'info sympa</h5>
                        <p><em>L'extérieur de la navette commerciale Nostromo n'est pas nécessairement son aspect le
                                plus
                                invitant, mais c'est surtout pour son environnement intérieur. Après tout, c'est
                                majoritairement là que l'action de ce huis clos insoutenable se déroule. Suffit de
                                penser à
                                la salle de réveil, la salle d'opération, la salle à dîner ainsi qu'aux sombres
                                couloirs...
                                Un décor saisissant qui sert parfaitement le film Alien.
                            </em></p>
                    </ul>
                </div>
            </div>
            <div class="alert alert-light col-5" role="alert">

                <form method="post">
                    <div class="form-group">

                        <?php for ($i = 1; $i <= 10; $i++) : ?>

                        <div class="form-check form-check-inline">

                            <input class="form-check-input" name="check<?= $i ?>" type="checkbox" value="<?= $i ?>"
                                id="check<?= $i ?>"
                                <?php if (!empty($_POST) && isset($_POST["check$i"]) && $i === intval($_POST["check$i"])) echo "checked"; ?>>

                            <label class="form-check-label" for="check<?= $i ?>">
                                <?= $i ?>
                            </label>
                        </div>
                        <?php endfor; ?>
                        <button type="submit" class="btn btn-primary">Choisir !</button>
                    </div>
                </form>

                <div class="centre">
                <?php

    if (!empty($_POST)) :
        foreach ($_POST as $value) :
            $table = (int)$value;
    ?>
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
                        $result = $table * $i; ?>
                        <tr>
                            <td class='text-center'><?= $table ?> x <?= $i ?></td>
                            <td class='text-center'><?= $result ?></td>
                        </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
                <?php endforeach;
    endif; ?>
    </div>
            </div>
        </div>
    </div>
</div>



<?php include "assets/php/footer.php"
?>