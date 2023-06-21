<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Password Generator</title>


        <?php 
            include "functions.php"; 
            header('Location: ./header.php');
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
            <div class="row ">
                <div class="col my-5">
                    <div class="card bg">
                        <div class="card-header my-5 py-5 ">
                            <h1>Genera Password</h1>
                        </div>
                        <div class="card-dody my-5 py-5">
                            <form>
                                <label><h2>Lunghezza della password</h2></label>
                                <input type="number" name="passwordLength">
                                <input type="submit" name="generate" value="Generate">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>