<?php
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here




include ('inc/header.php');
?>

    <!--USER Profil-->
    <section id="profil">
        <div class="wrap_profil">
            <h1>Profil</h1>
            <div class="separator_vaccin"></div>
            <div class="information_contact">
                <h3 class="profil_h3">Votre nom</h3>
                <p>GrosGay</p>
                <h3 class="profil_h3">Votre prénom</h3>
                <p>Maxence</p>
                <h3 class="profil_h3">Votre âge</h3>
                <p>14 ans</p>
            </div>
        </div>
    </section>
    <section id="vaccin">
        <div class="wrap_vaccin">
            <div class="text_vaccin">
                <p>Informations sur vos vaccinations</p>
            </div>
            <div class="list_vaccin">
                <table>
                    <thead>
                    <tr>
                        <th>vds_vaccin</th>
                        <th>vds_user_vaccin</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>vaccin</td>
                        <td>user_date_vaccin</td>
                        <td>vaccin_rappel</td>
                        <td>vaccin_rappel_user</td>
                        <td>vaccin_status</td>
                    </tr>
                    <tr>
                        <td>vaccin</td>
                        <td>user_date_vaccin</td>
                        <td>vaccin_rappel</td>
                        <td>vaccin_rappel_user</td>
                        <td>vaccin_status</td>
                    </tr>
                    <tr>
                        <td>vaccin</td>
                        <td>user_date_vaccin</td>
                        <td>vaccin_rappel</td>
                        <td>vaccin_rappel_user</td>
                        <td>vaccin_status</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


<?php include ('inc/footer.php');
