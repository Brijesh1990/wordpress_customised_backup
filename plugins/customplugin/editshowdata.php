<?php
global $wpdb;
//edit data for update 
if(isset($_GET["eid"]))
{
    //edit data for update
   
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Add Data</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <h2 align="center">Add New data</h2>
    <hr style="border: solid 2px; width: 50%;">
    <form method="POST">
        <table align='center'>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" placeholder="Name *"></td>
            </tr>

            <tr>
                <th>Userame</th>
                <td><input type="text" name="uname" placeholder="Useername *"></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><input type="text" name="em" placeholder="Email *"></td>
            </tr>


            
            <tr>
                <th>Password</th>
                <td><input type="password" name="pass" placeholder="Password *"></td>
            </tr>


            <tr>
                <th>Address</th>
                <td><textarea  name="add" placeholder="Address *"></textarea></td>
            </tr>



            <tr>
                <th>Geender</th>
                <td>Male :<input type="radio" name="gender" value="male">
                Female<input type="radio" name="gender" value="female"></td>
            </tr>

            <tr>
              
                <td><input type="submit" name="sub" value="AddData *"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>