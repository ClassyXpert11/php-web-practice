<?php
// data to be inserted to database
// $room_data = array(
//     array("Single", "A cozy room with a single bed", 50),
//     array("Double", "A spacious room with a double bed", 80),
//     array("Suite", "A luxurious suite with a king-sized bed", 150),
//     array("Family", "A family room with multiple beds", 120)
// );

// Loop through room data and insert into database
// foreach ($room_data as $room) {
//     $room_type = $room[0];
//     $room_desc = $room[1];
//     $room_price = $room[2];

//     $sql = "INSERT INTO rooms (room_type, room_desc, room_price) VALUES ('$room_type', '$room_desc', '$room_price')";
//     if (mysqli_query($conn, $sql)) {
//         echo "New record created successfully<br>";
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }
// }

function validateRoomType()
{
    $roomType = $_POST["roomType"] ?? '';
    return ($roomType == "Choose..." || empty($roomType)) ? "is-invalid" : "is-valid";
}

function validateMonth()
{
    $month = $_POST["month"] ?? '';
    return ($month == "Choose..." || empty($month)) ? "is-invalid" : "is-valid";
}

function validateStartDate()
{
    $startDate = $_POST["startDate"] ?? '';
    $endDate = $_POST["endDate"] ?? '';
    return (empty($startDate) || $startDate >= $endDate) ? "is-invalid" : "is-valid";
}

function validateEndDate()
{
    $endDate = $_POST["endDate"] ?? '';
    $startDate = $_POST["startDate"] ?? '';
    return (empty($endDate) || $endDate <= $startDate) ? "is-invalid" : "is-valid";
}

function roomAvailablity()
{
    $sql = "SELECT `month` FROM hotel_booking";

    include "databasecon.php";
    $result = mysqli_query($conn, $sql);
    $months = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($months, $row["month"]);
    }
    return $months;
    // use in_array(user_inputted_variable, array itself)
    // so it would look more like if in_array($month, $months) then code here and else stuff

}

function insertToDatabase()
{
    $roomType = $_POST["roomType"] ?? '';
    $month = $_POST["month"] ?? '';
    $startDate = $_POST["startDate"] ?? '';
    $endDate = $_POST["endDate"] ?? '';

    $roomTypeError = validateRoomType();
    $monthError = validateMonth();
    $startDateError = validateStartDate();
    $endDateError = validateEndDate();

    if ($roomTypeError == "is-valid" && $monthError == "is-valid" && $startDateError == "is-valid" && $endDateError == "is-valid") {
        $sql = "INSERT INTO hotel_booking (room_type, month, start_date, end_date)
            VALUES ('$roomType', '$month', '$startDate', '$endDate')";
        require_once "databasecon.php";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "you're good to go";
        } else {
            echo "There is an error";
        }
    }

}

if (isset($_POST["submit"])) {
    insertToDatabase();
    $months = roomAvailablity();
    print_r($months);

}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Hotel</title>
</head>

<body>

    <?php
    $active = "hotel";
    require "navbar.php"
        ?>

    <main>
        <div class="container d-flex justify-content-center mt-5">

            <!-- need to validate this form -->
            <form class="col-md-4 needs-validation" method="post" novalidate>

                <div class="input-group has-validation mb-3">
                    <span class="input-group-text" id="inputGroupPrepend">Select room type:</span>
                    <select class="form-select <?php if (isset($_POST["submit"]))
                        echo validateRoomType(); ?>" name="roomType" id="validationCustom04" required>
                        <option selected disabled>Choose...</option>
                        <option>Single</option>
                        <option>Double</option>
                        <option>Suite</option>
                        <option>Family</option>
                    </select>
                    <div class="invalid-feedback">Please select a room type</div>
                </div>

                <div class="input-group has-validation mb-3">
                    <span class="input-group-text" id="inputGroupPrepend">Month</span>
                    <select class="form-select <?php if (isset($_POST["submit"]))
                        echo validateMonth(); ?>" name="month" id="validationCustom04" required>
                        <option selected disabled>Choose...</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                    </select>
                    <div class="invalid-feedback">Please select month</div>
                </div>

                <div class="input-group has-validation mb-3">
                    <span class="input-group-text" id="inputGroupPrepend">Start date:</span>
                    <input type="number" min="1" max="31" name="startDate" class="form-control <?php if (isset($_POST["submit"]))
                        echo validateStartDate(); ?>" id="validationCustomUsername"
                        aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">Please choose a start date</div>
                </div>

                <div class="input-group has-validation mb-3">
                    <span class="input-group-text" id="inputGroupPrepend">End date:</span>
                    <input type="number" min="1" max="31" name="endDate" class="form-control <?php if (isset($_POST["submit"]))
                        echo validateStartDate(); ?>" id="validationCustomUsername"
                        aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">Please choose an end date</div>
                </div>

                <div class="d-flex justify-content-center">
                    <input class="btn btn-outline-success col-md-5" type="submit" value="Submit" name="submit">
                </div>

            </form>

        </div>
    </main>

</body>

</html>