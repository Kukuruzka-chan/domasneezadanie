<?php
if (isset($_COOKIE["name"])) {

setcookie("name", "Иван", time() + 3600);

}

if (isset($_COOKIE["name"])) {
    echo"значение cookie: " .
$_COOKIE['name'];

} else {
    echo "Имя не сохраненно";
}
?>