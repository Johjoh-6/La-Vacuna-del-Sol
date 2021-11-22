<?php
//Important to put in the toolbox
function debug(array $array){
    echo '<pre style="height: 200px; overflow-y: scroll; font-size: .7rem; padding: .6rem; font-family: Consolas,monospace; background: #000000; color: #ffffff;">';
    print_r($array);
    echo '</pre>';
}

function getById($table ,$id){
    global $pdo;
    $sql = "SELECT * FROM $table WHERE  id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

function cleanXss($key){
    return trim(strip_tags($_POST[$key]));
}

/*Return value in input if no error and value*/
function returnValue($id){
    if (!empty($_POST[$id])){
        return $_POST[$id];
    }
}
/*Return error*/
function returnError($error, $id){
    if (!empty($error[$id])){
        return $error[$id];
    }
}
/*Value value for error clean, adapt the text error*/
function validInput($error, $value, $key, $min, $max){
    if (!empty($value)){
        if (mb_strlen($value) < $min){
            $error[$key] = 'Erreur, Veuillez remplir le champ'.$key.' avec un contenu entre  '.$min.' et '.$max.' caractere !';
        } elseif (mb_strlen($value) > $max){
            $error[$key] = 'Erreur, Veuillez remplir le champ'.$key.' avec un contenu entre  '.$min.' et '.$max.' caractere !';
        }
    } else {
        $error[$key] = 'Veuillez remplir ce champ !';
    }
    return $error;
}

/* Clean delete element of the table*/
function deleteById($id, $table){
    if (!empty($id)) {
        global $pdo;
        $sql = "DELETE FROM $table WHERE id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        //Change location
        header("Refresh:0");
    } else{
        abort404();
    }
}

// If null put it in Publish, replace the current value.
function changeStatus($id, $from, $status  = 'publish'){
    if (!empty($id)) {
        global $pdo;
        $sql = "UPDATE $from 
                SET modified_at	= NOW(), status = :status  
                WHERE  id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':status', $status, PDO::PARAM_STR);
        $query->execute();
        header('Location: ' . $_SERVER['HTTP_REFERER']);;
    } else{
        abort404();
    }

}
/*Return the date in DD/MM/YYYY*/
function transformDate($column, $key){
    return date('d/m/y',strtotime($column[$key]));
}

/* Return error 404*/
function abort404(){
    header('HTTP/1.1 404 Not Found');
    header('Location: 404.php');
}

function getDbOrderAsc($table){
    global $pdo;
    $sql= "SELECT * FROM  $table ORDER BY name asc";
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}
function getDb($table){
    global $pdo;
    $sql= "SELECT * FROM  $table";
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function tableName($table){
    $tablesList = ['vds_msg' => 'Message', 'vds_testimonial'=> 'Avis', 'vds_users' => 'Utilisateur', 'vds_vaccin' =>'Vaccin', 'vds_user_vaccin' => 'Find name'];
    foreach ($tablesList as $tableList => $value) {
        if ($tableList == $table){

            return $value;
        }
        }
}

function mailValidation($error,$value,$key){
    if(!empty($value)){
        if (filter_var($value, FILTER_VALIDATE_EMAIL)==false) {
            $error[$key]='Veuillez renseigner un email valide';
        }
    } else{
        $error[$key]='Veuillez renseigner ce champ';
    }
    return $error;
}

function samePassword($error, $password1, $password2, $key){
    if ($password1 === $password2){
        return $password1;
    }else {
        $error[$key] = 'Mots de passe différent';
    }
    return $error;
}

function getNameTable ($funcTable){
        if ($funcTable == 'supprimer') {
            $name = 'delete';
        }
    if ($funcTable == 'modifier') {
        $name = 'update';
    }
    if ($funcTable == 'marquer lu') {
        $name = 'read';
    }
    if ($funcTable == 'publier') {
        $name = 'publish';
    }
    if ($funcTable == 'repondu') {
        $name = 'answer';
    }
    return $name;
}
function getTableIcons($funcTable)
{
    if ($funcTable == 'supprimer') {
        $icon = 'fas fa-trash-alt';
    }
    if ($funcTable == 'modifier') {
        $icon = 'fas fa-edit';
    }
    if ($funcTable == 'marquer lu') {
        $icon = 'fas fa-envelope-open';
    }
    if ($funcTable == 'publier') {
        $icon = 'fas fa-paper-plane';
    }
    if ($funcTable == 'repondu') {
        $icon = 'fas fa-check-square';
    }
    return $icon;
}
function renameKey($key){
    $name = $key;
    if ($key == 'name') {
        $name = 'nom';
    }
    if ($key == 'prenom') {
        $name = 'prenom';
    }

    if ($key == 'created_at') {
        $name = 'crée le';
    }
    if ($key == 'modified_at') {
        $name = 'modifié le';
    }
    if ($key == 'content') {
        $name = 'description';
    }
    if ($key == 'last_log') {
        $name = 'derniere connection';
    }
    return $name;
}
function valueFormat($key, $value){
    $valuePrepare =$value;
    if ($key == 'dob') {
        $valuePrepare = date('d/m/Y', strtotime($value));
    }
    if ($key == 'created_at') {
        $valuePrepare = date('d/m/Y', strtotime($value));
    }
    if ($key == 'modified_at') {
        $valuePrepare = date('d/m/Y', strtotime($value));
    }
    if ($key == 'last_log') {
        $valuePrepare = date('d/m/Y', strtotime($value));
    }
    if ($key == 'status'){
        switch ($value){
            case 'draft':
                $valuePrepare = "Brouillon";
                break;
            case 'publish':
                $valuePrepare = "Publier";
                break;
            case 'answered':
                $valuePrepare = "Répondu";
                break;
            case 'read':
                $valuePrepare = "Lu";
                break;
        }
    }

    return $valuePrepare;
}
function showColumnSelectedValue ($key, $value, $avoidColumn){
                if (!in_array($key, $avoidColumn)) {
                    $adapt = valueFormat($key, $value);
                    echo  '<th>'. $adapt. '</th>';
                }
}
function showColumnSelectedKey ($list,$avoidColumn){
    foreach ($list as $key => $value){
        if (!in_array($key, $avoidColumn)){
                $name = renameKey($key);
                echo  '<th>'. $name . '</th>';
                 } }
}


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function showForUpdate ($key, $data){
    if(!empty($_POST[$key])) {
        echo $_POST[$key];
    } else {
        echo $data;
    }
}

function isSelected ($item, $key, $value){
if ($item[$key] == $value) {
    echo 'selected';
}
}

function joinUserId($join){
    global $pdo;
    $sql= "SELECT vds_users.id,vds_users.name as name, vds_users.prenom as prenom, $join.*
    FROM vds_users
    INNER JOIN $join
    ON vds_users.id = $join.id_user";
    $query = $pdo->prepare($sql);
    $query->execute();
    return  $query->fetchAll();
}

function getTestiRandomLimit( $limit){
    global $pdo;
    $sql= "SELECT vds_users.id,vds_users.name as name, vds_users.prenom as prenom, vds_testimonial.* 
    FROM vds_users 
    INNER JOIN vds_testimonial
    ON vds_users.id = vds_testimonial.id_user
    ORDER BY vds_testimonial.created_at LIMIT $limit
    ";
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}


function joinUserVaccin(){
    global $pdo;
    $sql= "";
    $query = $pdo->prepare($sql);
    $query->execute();
    return  $query->fetchAll();
}
