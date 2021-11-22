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
            <div class="add_vac">
                <a class="btn" onclick="myFunctions()">Ajoutez un vaccin a votre liste</a>
                <form action="" class="add_form" id="add">
                    <div class="colonne">
                        <label for="vaccin-select">Choisissez un vaccin :</label>
                        <select name="vaccins" id="vaccin-select">
                            <option value="">--SVP Choisissez un vaccin--</option>
                            <option value="aztrazenka">Astrazeneka</option>
                            <option value="moderna">Moderna</option>
                            <option value="pfizer">Pfizer</option>
                            <span class="error"></span>
                        </select>
                        <label for="date-add">Date de votre dernier vaccin :</label>
                        <input class="date-add" type="date" name="dob" value="<?php echo date('Y-m-d', strtotime(date('Y-m-d')));?>">
                        <span class="error"></span>

                        <input type="submit" name="submitted" value="Envoyer">
                    </div>
                </form>
            </div>
            <div class="right">
                <div class="text_vaccin">
                    <p>Informations sur vos vaccinations</p>
                </div>

                <div class="grid">
                    <div class="head_grid gridflex">
                        <h2>Nom du vaccin</h2>
                        <h2>Date de la derniere dose</h2>
                        <h2>Séparation entre les doses</h2>
                        <h2>Votre prochaine dose</h2>
                        <h2>Obligatoire</h2>
                    </div>

                    <div class="body_grid gridflex">
                            <p>vaccin</p>
                            <p>user_date_vaccin</p>
                            <p>vaccin_rappel</p>
                            <p>vaccin_rappel_user</p>
                            <p>obligatoire</p>
                    </div>
            </div>
                <div class="grid">
                    <div class="footer_grid gridflex">
                        <h2>Nom du vaccin</h2>
                        <h2>Date de la derniere dose</h2>
                        <h2>Séparation entre les doses</h2>
                        <h2>Votre prochaine dose</h2>
                        <h2>Obligatoire</h2>
                    </div>
            </div>

           <p class="addnew">Vous souhaitez ajouter un vaccin qui n'est pas sur la liste <a class="btn" onclick="myFunction3()">cliquez ici.</a></p>
            <form action="" class="add_form" id="ads">
                <div class="form_add">
                    <label for="nam_vac">Nom du vaccin :</label>
                    <input class="nam_vac" type="text" name="nam_vac" placeholder="Le nom de votre vaccin ici" value="">
                    <span class="error"></span>

                    <label for="desc">Description de votre vaccin :</label>
                    <textarea name="message" placeholder="Votre description"></textarea>
                    <span class="error"></span>

                    <label for="date-select">Nombre de mois pour rappels :</label>
                    <input type="number" name="date-select" placeholder="entrez le nombre de mois ici">
                    <span class="error"></span>
                    </select>


                    <input class="submit" type="submit" name="submitted" value="Envoyer">
                </div>

            </form>
        </div>
    </section>


<?php include ('inc/footer.php');
