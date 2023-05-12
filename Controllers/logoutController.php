<?php 
// le logout d'un site au final c'est juste unset la variable de session

function logout(){
    session_unset();
    header('location:index.php');    
}
