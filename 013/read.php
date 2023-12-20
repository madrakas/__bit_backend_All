<?php
session_start();

echo $_SESSION['loged'];
echo $_COOKIE['mano_saldainis2'];

if ($_SESSION['log_time'] < time() + 10){
    echo 'Sesija baigėsi';
}