<?php 
    require("dbConnect.php");
    //var_dump($_POST);
    //var_dump($_GET);
    $manage_function = $_REQUEST["manage_function"];
    if($manage_function=="new-record"){
        //echo"new-record";

        $mid = $_POST["majorID"];
        $mNAME = $_POST["majorName"];
        $sID = $_POST["schoolID"];

        $sql = "INSERT INTO Major(MID,Name,SchoolID)
        VALUES ('$mid','$mNAME','$sID');";

        $result = $conn->query($sql);
        //header ("location : URL");
        header ("location : http://localhost/itd62-276/Lab5/major-view(1).php")
        exit(0);

    }elseif ($manage_function=="edit-record"){
        echo"edit-record";
    }elseif ($manage_function=="edit-record"){
        echo"delete-record";
?>