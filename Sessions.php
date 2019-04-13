<?php
/**
 * Author Safnaj on 1/7/2019
 * Project PhpStorm
 **/

session_start();
function Message(){
    if(isset($_SESSION["ErrorMessage"])){
        $Output = "<div class=\"alert alert-danger\">
            <script>
                $('div.alert').delay(1700).slideUp(300);
            </script>
            ";
        $Output.= htmlentities($_SESSION["ErrorMessage"]);
        $Output.="</div>";
        $_SESSION["ErrorMessage"] = null;
        return $Output;
    }
}

function SuccessMessage(){
    if(isset($_SESSION["SuccessMessage"])){
        $Output = "<div class=\"alert alert-success\"> 
            <script>
                $('div.alert').delay(1700).slideUp(300);
            </script>
            ";
        $Output.= htmlentities($_SESSION["SuccessMessage"]);
        $Output.="</div>";
        $_SESSION["SuccessMessage"] = null;
        return $Output;
    }
}
?>