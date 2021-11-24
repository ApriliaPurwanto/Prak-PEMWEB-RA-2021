<?php
include "connect.php";

switch ($_GET['action'])
{

    case 'save':

        $fullname = $_POST['fullname'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $division = $_POST['division'];

        $query = mysqli_query($koneksi, "INSERT INTO member(fullname, birthdate, email, phone, division) VALUES('$fullname', '$birthdate', '$email', '$phone', '$division')");
        if ($query)
        {
            echo "Saved successfully";
        }
        else
        {
            echo "Failed to save data :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':
        
        $num = $_POST['num'];
        $fullname = $_POST['fullname'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $division = $_POST['division'];

        $query = mysqli_query($koneksi, "UPDATE member SET fullname='$fullname', birthdate='$birthdate', email='$email', phone='$phone', division='$division' WHERE num='$num'");
        if ($query)
        {
            echo "Edited successfully";
        }
        else
        {
            echo "Failed to edit data:" . mysqli_error($koneksi);
        }
    break;

    case 'delete':

        $num = $_POST['num'];
        $query = mysqli_query($koneksi, "DELETE FROM member WHERE num='$num'");
        if ($query)
        {
            echo "Deleted successfully";
        }
        else
        {
            echo "Failed to delete data :" . mysqli_error($koneksi);
        }
    break;
}
?>