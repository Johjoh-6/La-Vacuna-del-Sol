<?php
session_start();
require ('inc/func.php');
require ('inc/pdo.php');
// Set PHP here
if (isLogged()){
    header('Location: index.php');
}

$error = [];
$succes = false;

if (!empty($_POST['submitted'])) {
    //For users
    //XSS
    $email = cleanXss('email');
    // Error
    $error = mailValidation($error, $email, 'email');
    if(empty($error['email'])) {
        $sql = "SELECT * FROM vds_users WHERE email = :email";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email,PDO::PARAM_STR);
        $query->execute();
        $verifEmail = $query->fetch();
        if(!empty($verifEmail)) {
            $succes = true;
            // the message
            $msg = "Cliquez sur le liens";
            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg,70);
            // send email
            //mail($verifEmail['email'],"Votre mots de passe",$msg);

            // recup.php?token=dfshfsdkfysdu&mail=

        }else{
            $error['email'] = 'Cette email n\'existe pas';
        }
    }

}
include ('inc/header.php');
?>

    <section id="lost-pwd">
        <div class="wrap_contact">
            <?php if ($succes){ ?>
                <div class="msg">
                    <p>Email envoyé</p>
                    <a href="index.php"><p>Retour à l'accueil</p></a>
                    <a href="recup.php?token=<?= urlencode($verifEmail['token']);?>&email=<?= urlencode($verifEmail['email']);?>"><p style="color: black">Token URL !</p></a>
                </div>
            <?php }else { ?>
                <form action="" method="post" class="wrapform" novalidate>
                    <label for="email">Votre Email :</label>
                    <input type="email" name="email" id="email" placeholder="Votre email...">
                    <span class="error"><?= returnError($error, 'email');?></span>
                    <input type="submit" name="submitted" value="Demander">
                </form>
            <?php }?>
        </div>
    </section>

<?php
include('inc/footer.php');
