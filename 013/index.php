<?php
session_start();
$_SESSION['Mano_sesija'] = 'Skanus';
$_SESSION['loged'] = 'yes';

$_SESSION['log_time'] = time();

setcookie('mano_saldainis', 'karakum', time() + 10);
setcookie('mano_saldainis2', 'smelio juosta', time() + 10);