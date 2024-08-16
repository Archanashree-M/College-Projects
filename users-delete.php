<?php 
include "header.php";

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    try {
        $statement = $pdo->prepare("DELETE FROM `tbl_users` WHERE id = ?");
        $statement->execute([$id]);
        header("location:users.php");
        alert("Deleted Successful");
    } catch (PDOException $e) {
            header("location:users.php");
             alert("Something went to wrong");
    }
} else {
        header("location:users.php");
         alert("Something went to wrong");
}
?>