<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Password Generator</title>

     <?php
     session_start()
     ?>

   <style>
    body{
        background-color: #001632;
    }
   </style>
</head>
<body>
    <div class="container-fluid">

        <div class="container my-4 text-center">
            <div class="row bg-light">
                <div class="col my-5">
                    <h1><?php echo "Password generata: " . $_SESSION['password']; ?></h1>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>