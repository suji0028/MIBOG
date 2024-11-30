
<?php include 'header.php'; ?>

<?php
$con = mysqli_connect("localhost", "root", "", "merged_database");
if(isset($_POST['submit']))
{
	$nm=$_POST['name'];
	$em=$_POST['email'];
    $sb=$_POST['subject'];
	$me=$_POST['message'];
	$ins="insert into tbl_contact values('','$nm','$em','$sb','$me')";
	$q=mysqli_query($con,$ins);
	echo"<script>alert('successfully submitted')</script>";
}

?>



<body class="contactbody">


        <section class="login-main-sec">
            <div class="container-fluid">
                <div class="contact-form">
                    <h1>Contact <span>Us</span></h1>
                    <p>We are always out there to help you! Fill out the form given below and get a reply from us within 2 business days.</p>
                <form method="post">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your E-mail" required>
                    <input type="text" name="subject" placeholder="What brings you here?" required>
                    <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                    <input type="submit" name="submit" value="Submit" class="submit-btn">
                </form>
                </div>
            </div>
            
        </section>

</body>
<?php include 'footer.php'; ?>

</html>    
