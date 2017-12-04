<?php 
    define("TITLE", "Honest Click Bait Headlines");
    if(isset($_POST["fixSubmit"])) {
        /* Grab value from textarea is $_POST collection, make all letters lowercase using strtolower() function store in a variable*/
        $clickBait = strtolower($_POST["clickBaitHeadline"]);
        
        //store array of clickbait-sounding words or phrases
        $a = array("scientists", "doctors", "hate", "stupid", "weird", "simple", "trick", "shocked me", "you'll never believe", "hack", "epic", "unbelievable");
        
        /* Strore array of replacement words or phrases make sure each replacement is in the same order as the clickbait word you're trying to replace */
        $b = array("so-called scientists", "so-called doctors", "aren't threatened by", "average", "completeky normal", "ineffective", "method", "is no different than the others", "you won't really be surprised by", "slightly improve", "boring", "normal");
        
        /* Use the str_replace() function to replace the words uppercase the first letter in every word using ucwords() function store in a variable */
        $honestHeadline = str_replace($a, $b, $clickBait);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo TITLE; ?></title>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program.</p>
            
            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder = "Paste click bait headline here." class="form-control input-lg" name="clickBaitHeadline">
                    </textarea>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fixSubmit">Make Honest!</button>
                </form>
            </div>
            <br>
            <?php
                if(isset($_POST["fixSubmit"])) {
                    /* Use ucwords() function to uppercase first letter in every word, echo the variable on the screen */
                    echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($clickBait)."</h4><hr>";   
                    
                    //echo the honest headline
                    echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($honestHeadline)."</h4>";   
                }
            ?>
            
        </div>
        <!-- Bootstrap JS -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>