<?php require_once("database/DBConnection.php"); ?>
<?php require_once ("Sessions.php"); ?>
<?php require_once ("Functions.php"); ?>

<?php
/**
 * Author Safnaj on 1/14/2019
 * Project Giant CMS
 **/
if(isset($_GET["id"])){
    $PostId = $_GET["id"];
    global $DBConnect;
    $Query = "DELETE FROM comments WHERE id='$PostId'";
    $Execute = mysqli_query($DBConnect,$Query);
    if($Execute){
        $_SESSION["SuccessMessage"]="Comment Deleted Successfully..!";
        RedirectTo("Comments.php");
    }else{
        $_SESSION["ErrorMessage"]="Something Went Wrong..!";
        RedirectTo("Comments.php");
    }
}