<?php
    session_start();
    echo $_SESSION["quantity"];

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Checkout</title>
    <style>
        body{
            min-height: 100dvh !important;
        }
    </style>
</head>
<body>

    <?php require "navbar.php" ?>

    <section>

        <div class="container vstack w-50 mt-5">
            <h1>Ticket information</h1>
            <hr>
            
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">Ticket type</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Adult</th>
                        <td>2</td>
                        <td>£12</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container d-flex justify-content-center mt-5">
            <form method="post" novalidate>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Card number</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="1234 1234 1234 1234">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Name on card</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Anakin Skywalker">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Expiry date</span>
                    <input type="text" aria-label="First name" class="form-control" placeholder="MM">
                    <input type="text" aria-label="Last name" class="form-control" placeholder="YY">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">CVV code</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="111">
                </div>

            </form>
        </div>

        <div class="container vstack w-25">
            <h3>Order summary</h3>

            
        </div>

    </section>

    
</body>
</html>