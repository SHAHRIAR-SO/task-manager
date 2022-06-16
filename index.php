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
    <!--Menu Start here-->
    <div class="menu">
        <a href="<?php echo SITEURL;?>index.php">Home</a>
        <a href="#">To Do</a>
        <a href="#">Doing</a>
        <a href="#">Done</a>

        <a href="<?php echo SITEURL;?>manage-list.php">Manage list</a>
    </div>

    <!--Menu ends here-->

    <!--Task start here-->
    <div class="all-task">
        <a href="#">Add task</a>
        <table>
            <tr>
                <th>S.N</th>
                <th>Task Name</th>
                <th>Priority</th>
                <th>Deadline</th>
                <th>Action</th>
            </tr>

            <tr>
                <td>1.</td>
                <td>Design a website</td>
                <td>Medium</td>
                <td>23/05/2022</td>
                <td>
                    <a href="#">update</a>
                    <a href="#">delete</a>
                </td>
            </tr>
        </table>
    </div>
    <!--Task ends here-->

</body>

</html>