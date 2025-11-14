<?php 
    $title = "Received";
    require_once 'Includes/header.php';
    require_once 'Includes/Db/conn.php';
?>
	<h1>Testing!!</h1>
<?php
    If($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postalcode = $_POST['postalcode'];


    $email = mysqli_real_escape_string($conn, $email);
    $address = mysqli_real_escape_string($conn, $address);
    $city = mysqli_real_escape_string($conn, $city);
    $province = mysqli_real_escape_string($conn, $province);
    $postalcode = mysqli_real_escape_string($conn, $postalcode);


      $sql = "INSERT INTO client_info (email, address, city, province, postalcode) VALUES ('$email', '$address', '$city', '$province', ‘$postalcode')";


    if (mysqli_query($conn, $sql)) {
            echo "Record added successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

}
?>

<?php 
    require_once 'Includes/footer.php';
 ?>
