<?php
$con = mysqli_connect("localhost", "root", "", "apicard");
$response = array();
if ($con) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM card_1 WHERE id = '$id'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $response['message'] = "Row deleted successfully";
            echo json_encode($response, JSON_PRETTY_PRINT);
        } else {
            echo "No row found with the given ID";
        }
    } else {
        echo "Please provide a valid row ID";
    }
} else {
    echo "Data connection failed";
}
?>