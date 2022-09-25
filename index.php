<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Contact Us Form</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 m-auto">
                <div class="card mt-4">
                    <div class="card-title">
                        <h2 class="text-center py-1">Contact Us Form</h2>
                        <hr>
                        <?php
                            $Message = "";
                            if(isset($_GET['error']))
                            {
                                $Message = " Please fill the details ";
                                echo '<div class="alert alert-danger">'.$Message.'</div>';
                            }

                                if(isset($_GET ['success']))
                                {
                                    $Message = " Your Message has been sent";
                                    echo '<div class="alert alert-success">'.$Message.'</div>';
                                }

                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" class="form-control mb-3" name="username" placeholder="Your Name">
                            <input type="email" class="form-control mb-3" name="email" placeholder="Your Email">
                            <input type="text" class="form-control mb-3" name="subject" placeholder="Subject">
                            <textarea name="message" class="form-control mb-3" placeholder="Write Your Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>