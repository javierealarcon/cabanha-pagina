<?php
if (!empty($_POST["btn-register"])) {
    echo '<div class="alert alert-danger">Los campos están vacios</div>';
} else {
    $user = $_POST["users"];
    $password = $_POST["password"];
    $sql = $connect->query(" select * from users where users = '$user' and password='$password' ");
    if ($data=$sql->fetch_object()) {
        header("location: index.html");
    } else {
        echo '<div class="alert alert-danger">Datos incorrectos</div>';
    }
}
?>