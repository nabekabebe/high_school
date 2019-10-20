<?php 
session_start();
function Message(){
    $Output="<div class=\"alert alert-danger\">";
    $Output.=htmlentities($_SESSION["ErrorMessage"]);
    $Output.="</div>";
    return $$Output;
}
?>