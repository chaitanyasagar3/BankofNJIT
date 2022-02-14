<?php
include_once 'dbConnection.php';
$sql = "DELETE FROM bank.customer WHERE Customer_SSN='" . $_GET["Customer_SSN"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

