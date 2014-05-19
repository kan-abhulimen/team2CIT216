<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <style>
body
{
background-color:#FFFF99;
}
</style>
    </head>
    <body>
        <h2>If Else Statement</h2>
        <img border="0" src="/images/if_else.PNG" alt="If Else" width="600" height="228">
        <br>
     <?php     
    \date_default_timezone_get("America/Denver");
    $t=  date("h:m:s:am");
            
    if ($t < "11:59:59:pm") {
        echo"Have a good day!";
    }
    else{
        echo"Have a good night!";
    }
    ?>
          <br>
        <a href="http://getstartedkan.com/index.php">Home Page</a>
        <a href="http://getstartedkan.com/class_presentation.php">Class Presentation</a> 
        <a href="http://getstartedkan.com/1st_presentation.php">1st Presentation</a>
        <a href="http://getstartedkan.com/2nd_presentation.php">2nd Presentation</a>
        <a href="http://getstartedkan.com/3rd_presentation.php">3rd Presentation</a>
    </body>
</html>