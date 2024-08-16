<?php 
include "header.php";

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    try {
        $statement = $pdo->prepare("DELETE FROM `tbl_clients` WHERE id = ?");
        $statement->execute([$id]);
        header("location:clients.php");
        alert("Deleted Successful");
    } catch (PDOException $e) {
            header("location:clients.php");
             alert("Something went to wrong");
    }
} else {
        header("location:clients.php");
         alert("Something went to wrong");
}
?>
