<?php
require 'db.php';
$note = $_REQUEST['note'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form with PHP & MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 m-auto">
            <?php
            if ($note == 'success')
                echo "
            <div class=\"alert alert-success\" role=\"alert\">
            Form submitted successfully! <br>
            Thank You
            </div>";
            ?>

            <div class="contact-form">
                <h1>Get in Touch</h1>
                <form action="submit.php" method="post" name="contact_form_info">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" class="form-control" name="name" value="" id="inputName" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="email" value="" id="inputEmail" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Subject</label>
                        <input type="text" class="form-control" name="subject" value="" id="inputSubject" required>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" name="message" value="" id="inputMessage" rows="5"
                                  required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" value="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>
                            Send
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
