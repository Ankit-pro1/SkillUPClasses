<?php
$con = mysqli_connect('localhost', 'skilliyf_skilliyf', 'skillupdata@123', 'skilliyf_skillupdata', '3306');
// $con = mysqli_connect('localhost:3307', 'root', '', 'skillupdata');
mail("ankitkumar151615@gmail.com", "Just Testing", "Message is passed by Ankit Kumar");
if (!$con) {
?>
    <script type="text/javascript">
        alert("Unable to connect with database");
    </script>
<?php }
$user =  $_POST['username'];
$email = $_POST['usermail'];
$phone = $_POST['usernumber'];
$message = $_POST['usermessage'];

$sql = " INSERT INTO skillupusers(name, email, phone_no, message)
values('$user', '$email', '$phone', '$message') ";

$query = mysqli_query($con, $sql);
if ($query) {
?>
    <script type="text/javascript">
        alert("Thank you for your response");
        window.location.replace('index.php');
    </script>
<?php
} else {
?>
    <script type="text/javascript">
        alert("Please try again");
    </script>
<?php
}
?>