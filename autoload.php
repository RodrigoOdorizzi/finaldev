<?php
spl_autoload_register(function ($nomeClasse) {
  if (file_exists("DTO" . DIRECTORY_SEPARATOR . $nomeClasse . ".class.php"))
    require_once("DTO" . DIRECTORY_SEPARATOR . $nomeClasse . ".class.php");
});
