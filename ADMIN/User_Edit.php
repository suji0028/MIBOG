<?php
session_start();
?>
<?php include 'includes/header.php'; ?>

<br><br>
<?php
include("config.php");
$sel = "SELECT * FROM tbl_register";
$result = mysqli_query($con, $sel);
?>


<?php
    include("config.php");
    ?>

<?php
if (isset($_GET['no'])) {
    $no = $_GET['no'];
    $sel = "SELECT * FROM tbl_register WHERE no='$no'";
    $result = mysqli_query($con, $sel);
    $row = mysqli_fetch_array($result);
}

if (isset($_POST['btn_update'])) {
    $no = $_POST['no'];
    $nm = $_POST['name'];
    $em = $_POST['email'];
    $ps = $_POST['password'];

    $upd = "UPDATE tbl_register SET name='$nm', email='$em', password='$ps' WHERE no='$no'";
    $quer = mysqli_query($con, $upd);

    if ($quer) {
        echo "<script>alert('Successfully updated!!!')</script>";
        header('Location: User_Action.php');
    }
}
?>


<html>
    <head>
        <style>
            body {
                background-color: #191919;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                margin: 0;
                padding: 0;
            }

            h2 {
                font-size: 36px;
                font-weight: bold;
                color: white;
                margin: 30px 0;
                text-align: center;
                text-transform: uppercase;
                letter-spacing: 2px;
                line-height: 1.4;
                padding-bottom: 20px;
            }

            h2 span {
                color:#fc0050;
            }

            h4 {
                font-size: 18px;
                color: white;
                margin-bottom: 10px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                margin-bottom: 20px;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
                width: 100%;
                max-width: 400px;
                box-sizing: border-box;
                background-color: #fff;
                transition: border-color 0.3s, box-shadow 0.3s ease;
            }

            input[type="text"]:focus,
            input[type="email"]:focus,
            input[type="password"]:focus {
                border-color: #007bff;
                box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
                outline: none;
            }

            button {
                background-color: #fc0050;
                color: white;
                border: none;
                padding: 12px 20px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                width: 220px;
                margin-top: 20px;
                transition: background-color 0.3s, transform 0.2s;
                text-align: center;
            }

            button:hover {

                transform: scale(1.05);
                border: 2px solid #fc0050;
                background-color: transparent;

            }

            .btn_back {
                display: inline-block;
                margin-top: 10px;
                padding: 12px 20px;
                border-radius: 5px;
                background-color: transparent;
                color: #fc0050;
                border: 2px solid #fc0050;
                font-size: 16px;
                text-decoration: none;
                cursor: pointer;
                transition: background-color 0.3s, transform 0.2s;
            }

            .btn_back:hover {
                background-color: #fc0050;
                color: white;
                transform: scale(1.05);
            }

            .form-container {
                background-color: #2b2b2b;
                padding: 40px;
                margin: 30px auto;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                max-width: 500px;
                width: 100%;
                text-align: center;
            }

            .form-container h2 {
                margin-bottom: 30px;
            }

            .form-container h4 {
                margin-bottom: 15px;
            }

            .form-container input {
                margin-bottom: 20px;
                padding: 10px;
                width: 100%;
                max-width: 380px;
                border-radius: 5px;
                font-size: 16px;
                background-color: #f9f9f9;
                border: 1px solid #ccc;
            }
        </style>
    </head>



<body>
    <div class="form-container">
        <form method="post">
            <h2><u><span>E</span>DIT <span>T</span>HE <span>U</span>SER <span>D</span>ETAILS</u></h2>

            <h4>NAME : <input type="text" name="name" value="<?php echo $row['Name']; ?>"></h4>

            <h4>EMAIL : <input type="email" name="email" value="<?php echo $row['Email']; ?>"></h4>

            <h4>PASSWORD : <input type="password" name="password" value="<?php echo $row['Password']; ?>"></h4>

            <input type="hidden" name="no" value="<?php echo $row['no']; ?>">

            <button type="submit" name="btn_update">Update</button>
            <a href="User_Action.php" class="btn_back">Back</a>
        </form>
    </div>
</body>
</html>
<br><br><br><br><br>
