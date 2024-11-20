<?php
session_start();
include("config.php");

$sel = "SELECT * FROM tbl_contact";
$result = mysqli_query($con, $sel);
include 'includes/header.php';
?>
<br><br><br><br><br>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Contacts</title>
    <style>

        body {
            background-color: #191919;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: white;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 50px;
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }
        span{
            color:red;
        }

        table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.2);
            background-color: #282828;
        }

        th, td {
            padding: 15px;
            text-align: center;
            font-size: 20px;
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

        .btn-edit, .btn-delete {
            padding: 10px 15px;
            font-size: 15px;
            font-weight: bold;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: inline-block;
            margin: 3px;
        }

        .btn-edit {
            background-color: #4CAF50;
            border: 2px solid #45a049;
        }

        .btn-delete {
            background-color: #f44336;
            border: 2px solid #d32f2f;
        }

        .btn-edit:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        .btn-delete:hover {
            background-color: #d32f2f;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h1><span>M</span>anage <span>C</span>ontacts</h1>
    <center>
        <table>
            <tr>
                <th>SR. NO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row['no']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['subject']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td><a class="btn-edit" href="c_Edit.php?no=<?php echo $row['no']; ?>">EDIT</a></td>
                <td><a class="btn-delete" href="c_Delete.php?no=<?php echo $row['no']; ?>">DELETE</a></td>
            </tr>
            <?php } ?>
        </table>
    </center>
</body>
</html>