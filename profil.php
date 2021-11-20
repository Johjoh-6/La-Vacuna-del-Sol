<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here




include ('inc/header.php');
?>

    <div class="text_contact">
        <h2 class="title">Profil</h2>
    </div>
    <!--USER Profil-->
    <section id="profil">
        <div class="wrap_profil">
            <div class="profil_left">
                <div class="information_contact">
                    <div class="title_profil">
                        <h2>Information</h2>
                    </div>
                    <div class="profil_name">
                        <h3 class="profil_h3">Votre nom :</h3>
                        <p>Benzema</p>
                    </div>
                    <div class="profil_name">
                        <h3 class="profil_h3">Votre prénom :</h3>
                        <p>Karim</p>
                    </div>
                    <div class="profil_name">
                        <h3 class="profil_h3">Votre email :</h3>
                        <p>Karim@gmail.com</p>
                    </div>
                    <div class="profil_name">
                        <h3 class="profil_h3">Votre âge :</h3>
                        <p>33 ans</p>
                    </div>
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


<?php include ('inc/footer.php');
