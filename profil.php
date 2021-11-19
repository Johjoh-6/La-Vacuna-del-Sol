<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here




include ('inc/header.php');
?>

    <!--USER Profil-->
    <section id="profil">
        <div class="wrap_profil">
            <div class="profil_left">
                <div class="profil_h2">
                    <h2>Profil</h2>
                </div>
                <div class="separator_vaccin"></div>
                <div class="information_contact">
                    <h3 class="profil_h3">Votre nom :</h3>
                    <p>lpb</p>
                    <h3 class="profil_h3">Votre prénom :</h3>
                    <p>Maxence</p>
                    <h3 class="profil_h3">Votre âge :</h3>
                    <p>12 ans</p>
                </div>
            </div>
            <div class="profil_right">
                <img src="./asset/img/profil.png" alt="">
            </div>

        </div>
    </section>

    <section id="vaccin">
        <div class="wrap_vaccin">
            <div class="right">
                <div class="text_vaccin">
                    <p>Informations sur vos vaccinations</p>
                </div>
                    <table class="list_vaccin list1">
                        <thead>
                        <tr class="vaccin_head">
                            <th></th>
                            <th>vds_vaccin</th>
                            <th></th>
                            <th>vds_user_vaccin</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr class="vaccin_body">
                            <td>vaccin</td>
                            <td>user_date_vaccin</td>
                            <td>vaccin_rappel</td>
                            <td>vaccin_rappel_user</td>
                            <td>vaccin_status</td>
                        </tr>
                        </tbody>
                    </table>

                 <table class="list_vaccin list2">
                        <tr class="vaccin_head">
                            <th></th>
                            <th>Prochaine dose</th>
                            <th></th>
                        </tr>
                        <tbody>
                            <tr class="vaccin_body">
                                <td>vaccin</td>
                                <td>vaccin_staus</td>
                                <td>vaccin_rappel</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </section>
=======
>>>>>>> mathis


<?php include ('inc/footer.php');
