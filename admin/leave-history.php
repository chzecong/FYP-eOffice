<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../global.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Leave History</title>
</head>
<body>

<table class="table">
    <thead class="table-dark">
        <tr>
        <th scope="col">Employee ID</th>
        <th scope="col">Name</th>
        <th scope="col">Leave Type</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        <th scope="col">Leave Status</th>
        </tr>
    </thead>
    <tbody>

    <?php
        require("../db-connect.php");
        $query = "CALL GET_APPROVE_AND_DECLINE_LEAVE();";
        $result = $db->query($query);

        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
            ?>
                <tr>
                <th scope="row"><?php echo $row["empID"] ?></th>
                <td><?php echo $row["empName"] ?></td>
                <td><?php echo $row["leaveType"] ?></td>
                <td><?php echo $row["startDate"] ?></td>
                <td><?php echo $row["endDate"] ?></td>
                <td><?php echo $row["leaveStatus"] ?></td>
                </tr>
            <?php
            }
        }
        else {
            // echo "Error: ".$query."<br>".$db->error;
            echo "There are no results";
            return 0;
        }
    ?>

    </tbody>
</table>

</body>
</html>