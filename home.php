
<?php


$dates = array("Friday, June 15", "Tuesday, June 21 ", "Monday, July 25", "Saturday, August 12");

$adj = array("lucky", "bouncy", "jolly");

$noun = array("school", "boat", "farm", "market", "town", "basket", "restaurant");

$verb = array("snore", "mumble");

$body_part = array("hair", "toes", "shoulder");

$food = array("tuna", "bananas", "strawberries");

$vehicle = array("truck", "car");

$Gmorning = array("buenos días", "buongiorno", "bonjour");


shuffle($dates);
shuffle($adj);
shuffle($noun);
shuffle($verb);
shuffle($body_part);
shuffle($food);
shuffle($vehicle);
shuffle($Gmorning);

?>




<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Simon's Journal</title>
    <link rel="icon" href="img/icon.png">
</head>
    
    

<body>
    
    <div class="top" >
        <img src="img/xtra-large-header.png"  id="imgHeader">
        <img src="img/small-header.png" id="imgHeader2">
        
    </div>
    
    <div class="title">
        
        <h1 class="title-word">
            <?php echo "<p id='date'> ".$dates[0]."</p>"?>
        </h1>
        
        <div class="click" type="button" onclick="window.location.reload()">
            <p id="button">New Journal Entry! </p>          
        </div>
    </div>
    
    <div class="middle">
           
        <?php
            
//           each word in the adjective array is tied to a photo
            if ($adj[0] == "jolly"){
                echo '<img src="img/sleepy.jpg" id="cat_1">'; 
                    
            } else if ($adj[0] == "bouncy") {
                echo '<img src="img/cozy.jpg" id="cat_1">'; 
                    
            } else {
                echo '<img src="img/pixabay.jpg" id="cat_1">'; 
            }
        
        
        
        ?>
        
        
        
        
        <p id="Words">
            
            Today started out pretty (<?php echo '<span id="blanks">'.$adj[0].'</span>';?>).
            
            I went to look for my human so that she can feed me. 
            
            My human’s name is sally. She was no where to be found in the (<?php echo '<span id="blanks">'.$noun[0].'</span>';?>). 
            
            So I went to the (<?php echo '<span id="blanks">'.$noun[1].'</span>';?>) to see if she was there, I couldn’t find her. After searching high and low, I decided to go back to the (<?php echo '<span id="blanks">'.$noun[2].'</span>';?>).
            
            As I pass sally’s (<?php echo '<span id="blanks">'.$noun[3].'</span>';?>), I can hear her (<?php echo '<span id="blanks">'.$verb[0].'</span>';?>). 
            
            I rolled my eyes, Of course she is still in her (<?php echo '<span id="blanks">'.$noun[4].'</span>';?>) and fast asleep! </p>
        
    
    </div>
    
    <div class="bottom">
        <!--  the picture displayed here is connected to the food array   -->
        <?php
            if ($food[0] =="tuna"){
                echo  "<img src='img/tuna.jpg' id='cat_2'>";
            } else if ($food[0] == "bananas"){
                echo  "<img src='img/banana.jpg' id='cat_2'>";
            } else {
                echo  "<img src='img/strawberry.jpg' id='cat_2'>";
            }
        ?>
                
        
        <p id="Words2">
            My stomach was rumbling, so I decided to take matters into my own paws and wake her up!
            
            I got up on the (<?php echo '<span id="blanks">'.$noun[5].'</span>';?>) and sat right next to sally’s (<?php echo '<span id="blanks">'.$body_part[0].'</span>';?>). 
            
            I started to purr as loud as a (<?php echo '<span id="blanks">'.$vehicle[0].'</span>';?>) 
            
            and  I used my paws to tickle her (<?php echo '<span id="blanks">'.$body_part[1].'</span>';?>). 
            
            She moved a little, so I kept tickling her until she woke up and said (<?php echo '<span id="blanks">"'.$Gmorning[0].'"</span>';?>). 
            
            When sally finally got up, I guided her downstairs. We went to the kitchen and I finally got my 
            
            big bowl of (<?php echo '<span id="blanks">'.$food[0].'</span>';?>)! </p>
        
    
    </div>
    
    
    <script type="text/javascript" src="Js/jquery-2.2.2.min.js"></script>
    <script type="text/javascript" src="Js/myScripts.js"></script>

    
</body>
</html>
