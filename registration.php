<!DOCTYPE html>
<html>
<body>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['dob']) || empty($_POST['password']) || empty($_POST['c_password']) || empty($_POST['address'])) {
        
    }

    else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $password = $_POST['password'];


        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "wtk";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

        $sql = "INSERT INTO users VALUES ('".$name."','".$email."','".$phone."','".$dob."','".$address."','".$password."')";

        if ($conn->query($sql) === TRUE) {
            header('location: login_form.php');
        } 
        else {
            $passerr = "Database Connection failed!!!";
        }
        $conn -> close();
    }
}
?>

    <h3>Registration Form</h3>
    <br>
    <label for="name">Full Name: </label>
    <input type="text" name="name" id="name" placeholder="Enter Name">
    <p style="padding: 0; margin: 0; color: red;" id="validatename">Cann't be Empty!</p>
    <br>

    <label for="email">Email: </label>
    <input type="text" name="email" id="email" placeholder="Enter Email Address">
    <p style="padding: 0; margin: 0; color: red;" id="validateemail">Cann't be Empty!</p>
    <br>

    <label for="phone">Phone: </label>
    <input type="text" name="phone" id="phone" placeholder="01XXXXXXXXX">
    <p style="padding: 0; margin: 0; color: red;" id="validatephone">Cann't be Empty!</p>
    <br>

    <label for="dob">Date of birth: </label>
    <input type="date" name="dob" id="dob">
    <br>
    <br>

    <label for="password">Password: </label>
    <input type="password" name="password" id="password" placeholder="Enter Password">
    <p style="padding: 0; margin: 0; color: red;" id="passvalidate">Cann't be Empty!</p>
    <br>

    <label for="c_password">Confirm Password: </label>
    <input type="password" name="c_password" id="c-password" placeholder="Confirm Your Password">
    <p style="padding: 0; margin: 0; color: red;" id="cpassvalidate">Cann't be Empty!</p>
    <br>

    <label for="address">Address: </label>
    <input type="text" name="address" id="address" placeholder="Enter Address">
    <br>
    <p style="padding: 0; margin: 0; color: red;" id="validateaddress">Cann't be Empty!</p>
    <br>
    <button id="submit" class="btn-design" name="button1">Submit</button>
    <button id="reset" class="btn-design" name="button1">Reset</button>


    <script src="script.js"></script>


</body>

</html>