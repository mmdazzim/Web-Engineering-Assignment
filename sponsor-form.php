<?php

if(!isset($_SESSION)) { 
        session_start(); 
    }
// Include config file
require_once "config.php";

        $id = $_GET['id'];
        $current_user = $_SESSION["username"];

        $sql_get_user = "SELECT * FROM users WHERE username = $current_user";
        $result_list = mysqli_query($link, $sql_get_user);
        $user_id = $result_list["id"];

        $sql_insert = "INSERT INTO sponsor_application (student_id, user_id) VALUES ('$id', '$user_id')";

                $sql_update = "UPDATE student_list SET sponsor_status = 'Sponsored' WHERE id= $id;";

                    if ($link->query($sql_update) === TRUE) {
                        echo "Success!";
                        header("location: student-list.php");
                    } else {
                        echo "Error: " . $sql_update . "<br>" . $link->error;
                    }
?>
