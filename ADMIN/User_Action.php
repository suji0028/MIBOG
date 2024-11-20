<?php
    session_start();
    include("config.php");
    $sel = "SELECT * FROM tbl_register";
    $result = mysqli_query($con, $sel);
    include 'includes/header.php';
?>
<br><br><br><br><br>
<!DOCTYPE html>
<html>
<head>
    <title>Manage User</title>
    <style>
        body {
            background-color: #191919;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: white;
        }

        h1 {
            font-size: 50px;
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }
        span{
            color:red;
        }

        table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.2);
        }

        th, td {
            padding: 15px;
            font-size: 20px;
            text-align: center;
            border: 1px solid #444;
        }

        th {
            background-color: #333;
            color: #f1f1f1;
        }

        td {
            background-color: #222;
            color: #f1f1f1;
        }

        tr:nth-child(even) {
            background-color: #2b2b2b;
        }

        tr:hover {
            background-color: #444;
        }

        a.btn-edit, a.btn-delete {
            display: inline-block;
            padding: 8px 12px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        a.btn-edit {
            background-color: #28a745;
        }

        a.btn-edit:hover {
            background-color: #218838;
        }

        a.btn-delete {
            background-color: #dc3545;
        }

        a.btn-delete:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h1><span>M</span>anage <span>U</span>ser <span>D</span>etails</h1>
    <center>
        <table>
            <tr>
                <th>SR.NO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            <?php
            while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row['no']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['Password']; ?></td>
                <td><a class="btn-edit" href="User_Edit.php?no=<?php echo $row['no']; ?>">EDIT</a></td>
                <td><a class="btn-delete" href="User_Delete.php?no=<?php echo $row['no']; ?>">DELETE</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </center>
    <br><br><br><br><br>
</body>
</html>
