<?php
global $wpdb;
$tablename=$wpdb->prefix."add_entry";
// delete data
if(isset($_GET["did"]))
{
    $did=$_GET["did"];
    // $wpdb->query("delete from ".$tablename." where id=".$did);
    $wpdb->query("delete from $tablename where id='$did'");
    // echo "<h2 align='center'>Data Deleted Successfuly</h2>";
    echo "<script>
    alert('Data successfuly Deleted')

    </script>"; 
}

// edit data



// update

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


</head>
<body>
   <h1 align="center">Manage All Data</h1>
   <hr style="width: 40%; border: solid 1px;">
    <table border="1" width="90%">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
       <?php
       $shwdata=$wpdb->get_results("select * from ".$tablename);
       //print_r($shwdata);
       if (count($shwdata) > 0) {
           $count=1;
       
           foreach ($shwdata as $shwdata1) {
               ?>
        <tr>
            <td><?php echo $shwdata1->id; ?></td>
            <td><?php echo $shwdata1->name; ?></td>
            <td><?php echo $shwdata1->username; ?></td>
            <td><?php echo $shwdata1->email; ?></td>
            <td><?php echo $shwdata1->address; ?></td>
            <td><?php echo $shwdata1->gender; ?></td>
            <td><a href="?page=showdata&did=<?php  echo $shwdata1->id; ?>" onclick="return confirm('Are You sure to delete Data ?')">Delete</a>
             | <a href="?page=editshowdata&eid=<?php  echo $shwdata1->id; ?>"  data-toggle="modal" data-target="#ed">Edit</a></td>
        </tr>

         
        <?php
          $count++;
           }
       }
            else
             {
                echo "<tr><td colspan='7'><h3 align='center'>No records Found in tables</h3></td></tr>";
            }
        

        ?>

    </table>

    <!-- edit data modal  -->

    <div class="modal fade mt-5" id="ed" role="dialog">
        <div class="modal-dialog mt-5">
            <div class="modal-content">
           
            <div class="form-group">
            <button type="button" class="float-right btn btn-sm btn-danger" data-dismiss="modal">&times;</button>
             
            <h2 align="center">Edit data</h2>
    <hr style="border: solid 2px; width: 50%;">
    <form method="POST">

        <table align='center'>
        
        <tr>
                <th>Name</th>
                <td><input type="text" name="name" placeholder="Name *" class="form-control"></td>
            </tr>

            <tr>
                <th>Userame</th>
                <td><input type="text" name="uname" placeholder="Useername *" class="form-control"></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><input type="text" name="em" placeholder="Email *" class="form-control"></td>
            </tr>

            <tr>
                <th>Address</th>
                <td><textarea  name="add" placeholder="Address *" class="form-control"></textarea></td>
            </tr>

            <tr>
                <th>Gender</th>
                <td>Male :<input type="radio" name="gender" value="male">
                Female<input type="radio" name="gender" value="female"></td>
            </tr>

            <tr>
              
                <td colspan="2" align="center"><input type="submit" name="sub" value="Update Data *" class="btn btn-danger btn-lg"></td>
            </tr>
        </table>
    </form>
    
            </div>


            </div>
        </div>
    </div>
    
</body>
</html>