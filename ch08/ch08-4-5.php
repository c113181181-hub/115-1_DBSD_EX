<?php
$error = "";
$msg = "";
$name = "";
$username = "";
$showform = "true";
if (isset($_GET["Reg"])) {
    $name = $_GET["name"];
    $username = $_GET["UserName"];
    $pass1 = $_GET["Pass1"];
    $pass2 = $_GET["Pass2"];
    if(empty($username)) {
        $error = "your username is empty<br/>";
    } else {
        if(empty($pass1)) {
            $error = "your password is empty<br/>";
        } else {
            if($pass1 != $pass2) {
               $error = "your password is not the same<BR/>";
            } else {
                $showform = false;
                $msg = "Name:" . $name ."<br/>";            
                $msg .= "UserName:" . $username ."<br/>";
                $msg .= "Password:" . $pass1 ."<br/>";
            } 
        }
    }
}
?>

<?php if ($showform){
        require("about me.php");
        echo"W08-EX03" ."<br/>";
    ?>
<form action="ch08-4-5.php" method="get">
    Name: <input type =text name="name" /><br/>
    ID: <input type =text name="UserName" /><br/>
    Password: <input type =password name="Pass1" /><br/>
    Password-again: <input type =password name="Pass2" /><br/>
    <input type="submit" name="Reg"value="Register User" />
</form>
<?php
} else {
    require("about me.php");
    echo"W08-Ex03" ."<br/>";
    echo $msg;
}
?>