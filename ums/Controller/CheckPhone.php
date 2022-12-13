<?php
include "../Model/DatabaseConnection.php";
$Phone="";
$Phone=$_POST["Phone"];

if($Phone=="")
{
    echo "Phone Empty";
}
else
{

    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $result=$connection->CheckPhone($conobj,"Users",$Phone);
    if ($result->num_rows > 0)
    {
       echo "Phone Already Registered";

    }

    else{
            // echo "Unique Phone";
            /*echo "<table border='1'=>";
                echo "<th>";
                    echo "<tr>";
                        echo "<td> Serial </td>";
                        echo "<td> Status </td>";
                    echo "</tr>";
                echo "</th>";

                echo "<tr>";
                    echo "<td> 1 </td>";
                    echo "<td> Unique Phone </td>";
                echo "</tr>";
            echo "</table>"; */
    }
    $connection->CloseCon($conobj);
}




?>