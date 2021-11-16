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
        header('location: ');
    } else{
        abort404();
    }
}

// If null put it in Publish, replace the current value.
function changeStatus($id, $from, $status  = 'publish', $url){
    if (!empty($id)) {
        global $pdo;
        $sql = "UPDATE $from 
                SET modified_at= NOW(), status = :status  
                WHERE  id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':status', $status, PDO::PARAM_STR);
        $query->execute();
        header('location: '.$url);
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
