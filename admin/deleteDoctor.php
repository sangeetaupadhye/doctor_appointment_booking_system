<?php include("./header.php"); ?>
<?php include("./sidebar.php"); ?>

<?php
// Assuming $con is your database connection
if (isset($_GET['id'])) {
    $doctorId = $_GET['id'];

    // You might want to add a confirmation dialog here to prevent accidental deletion
    $deleteQuery = "DELETE FROM user WHERE user_id = '$doctorId' AND user_type = 'Doctor'";

    if (mysqli_query($con, $deleteQuery)) {
        echo "<script>
            alert('Doctor Deleted');
            window.location='./viewDoctor.php';
        </script>";
    } else {
        echo "<script>alert('Error deleting doctor')</script>";
    }
} else {
    echo "<script>window.location='./viewDoctor.php'</script>";
}
?>
