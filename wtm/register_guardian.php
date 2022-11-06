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
    <title>Guardian Registration</title>
</head>
<body>
    <form method="" action="" enctype="">
            <table align="center">
                <tr>
                    <td><td><h1>Guardian Registration</h1></td></td>
                </tr>
                <tr>
                    <td>UserName</td>
                    <td><input type="text" name="" value="" placeholder=""/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="" value="" placeholder=""/></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" value=""/> Male
                        <input type="radio" name="gender" value=""/> Female
                        <input type="radio" name="gender" value=""/> Other
                    </td>
                </tr>
                
                <tr>
                        <tr>
                            <td>Department</td>
                            <td>
                                <input type="radio" name="CSE" value=""/> CSE
                                <input type="radio" name="EEE" value=""/> EEE
                                <input type="radio" name="BBA" value=""/> BBA
                            </td>
                        </tr>
                    </tr>        
                <tr>
                    <td> Photo: </td>
                    <td><input type="file" name="" value="" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="" value="" placeholder=""/></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="" value="" placeholder=""/></td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <input type="submit" name="" value="Confirm Registration"> 
                        <input type="reset" name="" value="Clear">
                    </td>
                </tr>
            </table>
       </form>
</body>
</html>