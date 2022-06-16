<?php
include('config/constants.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK MANAGER WITH PHP AND MYSQL</title>
</head>

<body>
    <h1>Task Manager</h1>
    <a href=" <?PHP echo SITEURL;?>index.php">Home</a>
    <a href="<?PHP echo SITEURL;?>manage-list.php">Manage list</a>
    <h3>Add List Page</h3>
    <!--form to add list here-->
    <form method="POST" action="">
        <table>
            <tr>
                <td>List Name:</td>
                <td><input type="text" name="list_name" placeholder="type your name here"> </td>
            </tr>

            <tr>
                <td>List Description:</td>
                <td><textarea name="list description" id="" cols="" rows="" placeholder="type List Description here"></textarea></td>
            </tr>
            <tr>
                <td><input type="Submit" name="Submit" value="SAVE"></td>
            </tr>
        </table>
    </form>
    <!--form to add list here-->

</body>

</html>

<?php
//chcek weather the form is submitted or not
if (isset($_POST['Submit'])) {
    //echo 'form Submited';
    //Get the values From and save it is in the variable

    $list_name = $_POST['list_name'];
    $list_description = $_POST['list_description'];

    //connect database
    $conn = mysqli_connect(LOACLHOST, DB_USERNAME, DB_PASSWORD) or die (mysqli_error());

    //check weather the database connected ot not

    /* if($conn == true){
    //     echo 'database connceted';
     }*/

    //Select Database

    $db_select = mysqli_select_db($conn,DB_NAME);

    //weather database is connectd or not
   /* if($db_select == true)
    {
        echo "database selected";
    } */

    //sql query to insert data into data base
    $sql = "INSERT INTO tbl_lists SET 
         list_name = '$list_name',
         list_description = '$list_description
         ";

         //execute query and insert into data
         $res = mysqli_query($conn,$sql);

         //chcek weather the query executed succesfully or not

         if($res == true)
         {
            echo 'data inserted';
            header('location:' .SITEURL. 'manage-list.php');
         }

}

?>