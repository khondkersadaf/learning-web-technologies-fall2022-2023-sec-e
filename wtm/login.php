<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null username/password";
        }
    }


?>

<html>
<head>
    <title>Home</title>
</head>
<body>
    <form method="post" action="loginCheck.php" enctype="">
        
            
            <table align="center">
                <tr>
                    <td><td><h1>Login</h1></td></td>
                </tr>
                <tr>
                    <td>UserName</td>
                    <td><input type="text" name="username" value="" placeholder=""/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="" placeholder=""/></td>
                </tr>
                    <td> </td>
                    <td>
                        <input type="submit" name="" value="Login"> 
                        <input type="reset" name="" value="Clear">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <a href="help.html">Can’t access your account?</a>
                    </td>
                </tr>
       </form>
</body>
</html>