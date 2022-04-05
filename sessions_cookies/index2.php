<?php
session_start(); #inicia session
if(isset($_SESSION['nome']))
    unset($_SESSION['nome']); #elimina uma sessions expecifica

session_destroy() # destroi todas as sessions setadas

?>