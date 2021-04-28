<?php
session_start();

require_once("db-connect.php");

if (isset($_POST["submit"])) {
    $eid = test_input($_POST["empNo"]);
    $pwd = test_input($_POST["password"]);

    if (empty($eid)) {
        header("location: index.php?error=EmployeeID is Required");
    }
    else if (empty($pwd)) {
        header("location: index.php?error=Password is Required");
    }

    else {
        $pwd = md5($pwd);
        $query = "CALL LOGIN_VALIDATION('$eid', '$pwd');";
        $result = $db->query($query);

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            echo "<pre>";
            print_r($row);

            if($row["empID"] === $eid && $row["empPassword"] === $pwd && $row["UserType"] === "admin") {

                $_SESSION["eid"] = $row["empID"];
                $_SESSION["name"] = $row["empName"];
                $_SESSION["userType"] = $row["UserType"];

                header("location: admin/dashboard.php");
                exit();
            }

            else if($row["empID"] === $eid && $row["empPassword"] === $pwd && $row["UserType"] === "user") {

                $_SESSION["eid"] = $row["empID"];
                $_SESSION["name"] = $row["empName"];
                $_SESSION["userType"] = $row["UserType"];

                header("location: employee/dashboard.php");
                exit();
            }

            else {
                header("location: index.php?error=Incorrect Employee ID or Password");
            }
        }
        else {
            header("location: index.php?error=Incorrect Employee ID or Password");
        }
    }
}
else {
    header("location: index.php");
}


/*
Validate Form Data
    1. Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
    2. Remove backslashes (\) from the user input data (with the PHP stripslashes() function)
*/
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>