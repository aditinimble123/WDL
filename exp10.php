<form method="POST">

    Enter Name:
    <input type="text" name="name"><br><br>

    Enter Email:
    <input type="text" name="email"><br><br>

    <input type="submit">

</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "<h3>Form Data Received Using POST Method</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>