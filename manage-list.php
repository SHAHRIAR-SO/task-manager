<?PHP
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
        <a href="<?php echo SITEURL; ?>index.php">Home</a>
    <h3>Manage Lists page</h3>
    <!--Table to display list start here-->
    <div class="all-list">
        <a href="<?php echo SITEURL; ?>add-list.php">Add list</a>
        <table>
            <tr>
            <th>S.N</th>
            <th>List name</th>
            <th>Actions</th>
            </tr>

            <tr>
                <td>1.</td>
                <td>To Do</td>
                <td>
                    <a href="">Update</a>
                    <a href="">Delete</a>
                </td>
            </tr>

         

            <tr>
                <td>2.</td>
                <td>To Do</td>
                <td>
                    <a href="">Update</a>
                    <a href="">Delete</a>
                </td>
            </tr>
        </table>
    </div>

    <!--Table to display list end here-->
</body>

</html>