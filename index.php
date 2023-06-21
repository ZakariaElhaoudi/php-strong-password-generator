<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Password Generator</title>
</head>
<body>
<!--  Milestone 1
        Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere minuscole e maiuscole, numeri e simboli) da restituire all’utente.
        Scriviamo tutto (logica e layout) in un unico file index.php. -->
    <div class="container ">
        <form>
            <label>Lunghezza della password</label>
            <input type="number" name="passwordLength">
            <input type="submit" name="generate" value="Generate">
        </form>
        <?php
       

        if (isset($_GET["generate"])) {
            $passwordLength = intval($_GET["passwordLength"]);

            

            $uppr_case = "ABCDEFGHIJKLMNOPQRSTUVWYZ";
            $lower_case = "abcdfghijklmnopqrstuvwxyz";
            $numbers = "0123456789";    
            $special_chars = "@#*?!";

           
            $chars = $uppr_case . $lower_case . $numbers . $special_chars;

            $password = " ";

            for ($i=0; $i < $passwordLength; $i++) { 
                $randomChars = mt_rand(0, strlen($chars) - 1);
                $password .= $chars[$randomChars];
            }
            echo "Password generata: " . $password;

        }



        ?>
    </div>    
</body>
</html>