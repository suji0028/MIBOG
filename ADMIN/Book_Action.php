<?php
session_start();
include("config.php");

$sel = "SELECT * FROM tbl_booking";
$result = mysqli_query($con, $sel);
include 'includes/header.php';
?>
<br><br><br><br><br>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Booking</title>
    <style>
        body {
            background-color: #191919;
            color: #fff;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            font-size: 50px;
            color: white;
            margin-bottom: 30px;
        }
        span{
            color:red;
        }

        .table-container {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.2);
            
        }

        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.2);
            margin: 0 auto;
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
            text-decoration: none;
            color: white;
            display: inline-block;
            margin: 3px;
            transition: background-color 0.3s ease, transform 0.2s ease;
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
    <h1><span>M</span>anage <span>B</span>ooking</h1>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>SR. NO</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Departure Date</th>
                    <th>Return Date</th>
                    <th>TRAVEL Destination</th>
                    <th>Package</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['no']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['departure_date']; ?></td>
                    <td><?php echo $row['return_date']; ?></td>
                    <td><?php echo $row['travel_destination']; ?></td>
                    <td><?php echo $row['package']; ?></td>
                    <td><a class="btn-edit" href="Book_Edit.php?no=<?php echo $row['no']; ?>">Edit</a></td>
                    <td><a class="btn-delete" href="Book_Delete.php?no=<?php echo $row['no']; ?>">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>
