<?php 

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Home</title>
    <style>
        body{
            min-height: 100dvh !important;
        }
    </style>
</head>
<body>
    <?php require "navbar.php" ?>

    <section <?php if(isset($_GET["type"]) && $_GET["type"] == "payment") echo "hidden"?>>
        <div class="container d-flex justify-content-center gap-5 my-auto">
            <div class="card" style="width: 18rem;">
                <img src="images/ticket.jpg" class="card-img-top" alt="Ticket">
                <div class="card-body">
                    <h5 class="card-title">Adult ticket</h5>
                    <p class="card-text">Adult ticket. For people ages 18+</p>
                    <div class="card-footer d-flex col justify-content-between">
                        <p class="card-text">£12.00</p>
                        <a href="?type=payment" class="btn btn-primary">Book</a>
                    </div>
                </div>
            </div>
    
            <div class="card" style="width: 18rem;">
                <img src="images/ticket.jpg" class="card-img-top" alt="Ticket">
                <div class="card-body">
                    <h5 class="card-title">Child ticket</h5>
                    <p class="card-text">Child ticket. For people under 18</p>
                    <div class="card-footer d-flex col justify-content-between">
                        <p class="card-text">£8.00</p>
                        <a href="?type=payment" class="btn btn-primary">Book</a>
                    </div>
                </div>
            </div>
    
            <div class="card" style="width: 18rem;">
                <img src="images/ticket.jpg" class="card-img-top" alt="Ticket">
                <div class="card-body">
                    <h5 class="card-title">Family ticket</h5>
                    <p class="card-text">Family ticket. This is for minimum one adult and two children.</p>
                    <div class="card-footer d-flex col justify-content-between">
                        <p class="card-text">£25.00</p>
                        <a href="?type=payment" class="btn btn-primary">Book</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section <?php if(!isset($_GET["type"])) echo "hidden"?>>
        
        <form class="row g-3 needs-validation" novalidate action="ticket.php?type=payment" method="post">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Adult tickets</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">Quantity</span>
                    <input type="text" class="form-control" id="validationCustomUsername" name="adult_ticket_number" aria-describedby="inputGroupPrepend" required>
                </div>
                <?php

                    if (isset($_POST["submit"])) {
                        
                        $adultTicket = $_POST["adult_ticket_number"];
            
                        if (empty($adultTicket)) {
                            echo"<div class='alert alert-danger' role='alert'>This field is required</div>";

                            // echo"<div class='invalid-feedback'>This field is required</div>";
                        }
                        else {
                            if (is_numeric($adultTicket)) {
                                echo"<div class='valid-feedback'>Looks good!</div>";
                            } 
                            else {
                                echo"<div class='invalid-feedback'>Please enter a number</div>";
                            }
                        }
                    }

                    
                ?>
            </div>

            
            <div class="col-12">
                <input class="btn btn-outline-primary" type="submit" value="Submit" name="submit">
            </div>
        </form>


    </section>

</body>
</html>