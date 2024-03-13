<?php
$email =  $_GET["Mail"];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse mail a le bon format";
} else {
    echo "L'adresse mail n'a pas le bon format";
}
