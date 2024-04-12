<?php
    function getValid(){
        $qnty = $_POST["quantity"];
        return (empty($qnty) || $qnty <= 0) ? "is-invalid":"is-valid" ;

        // if (empty($qnty) || $qnty <= 0) {
        //     echo "is-invalid";
        //     array_push($errors,"quantity");
        // }
        // else{
        //     echo "is-valid";
        // }

    }
    if (isset($_POST["submit"])){
        $quantityError = getValid();

        if ($quantityError == "is-valid") {            
            header("Location:checkout.php");
            exit();
        }
    }
    

                    
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
                        <a href="?type=payment&ticket=adult" class="btn btn-primary">Book</a>
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
                        <a href="?type=payment&ticket=child" class="btn btn-primary">Book</a>
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
                        <a href="?type=payment&ticket=family" class="btn btn-primary">Book</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section <?php if(!isset($_GET["type"])) echo "hidden"?>>
        
        <form class="row g-3 needs-validation" novalidate method="post">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label"><?php echo ucfirst($_GET["ticket"])?> tickets</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">Quantity</span>
                    <input type="number" class="form-control <?php if (isset($_POST["submit"])) echo $quantityError; ?>" id="validationCustomUsername" name="quantity" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">Quantity must be an positive integer.</div>
                </div>
                <input type="date" class="form-control"  min="today" max="today + 10 days" required/>
            </div>

            
            <div class="col-12">
                <input class="btn btn-outline-primary" type="submit" value="Submit" name="submit">
            </div>
        </form>


    </section>

</body>
</html>