<?php

require 'vendor/autoload.php';

define('TITLE','Visualizar vaga');

use \App\Entity\Vaga;


$obVaga=Vaga::getVaga($_GET['id']);


include 'includes/header.php';
include 'includes/formulario-view.php';
include 'includes/footer.php';

?>