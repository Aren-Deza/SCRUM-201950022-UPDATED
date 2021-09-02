<?php
    date_default_timezone_set('Asia/Manila');
    include 'dbconnector.inc.php';
    include 'comments.inc.php';
?>

<!DOCTYPE html> <!--This file holds the gallery and comment section-->
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="aren deza's website.">
        <title>DezaArt</title>
        <link rel="stylesheet" href="styling.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;800&display=swap&family=Syncopate:wght@700&display=swap" rel="stylesheet"> 
    </head>

    <header>
        <h1>DEZA<span>ART</span></h1>
        <nav>
            <ul>
                <div class="sizeup">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact Me</a></li>
                </div>
            </ul>
        </nav>
    </header>

    <body>
        <h2>GALLERY</h2>

        <div class="centered">
            <h2>Alien Landscape</h2> 
            <p>comissioned by a friend to draw a fictional postcard</p>
            <img src="images/postcard.jpg" alt="postcard space" class="art">
        </div>

        <div class="centered">
            <h2>Evil Designs</h2>
            <p>my entry for a character design challenge on twitter</p>
            <img src="images/character.jpg" alt="weird people" class="art">
        </div>

        <div class="centered">
            <h2>Sprite Concepts</h2>
            <p>concept artwork for another friend's rpg maker game</p>
            <img src="images/sprites.jpg" alt="not a game" class="art">
        </div>
        <br>

        <h2>COMMENTS</h2><br>

        <!--PHP COMMENTS FORM-->

        <?php
        // constructs a form for the comment section.
        echo "<form method='POST' action='".set_comments($conn)."'>
            <input type='hidden' name='u_id' value='anon'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='c_text'></textarea> <br>
            <button type='submit' name='comment_submit' class='coolbutton'>SUBMIT COMMENT</button>
        </form><br><br>";
        // calls get_comments, echoing each comment into a box.
        get_comments($conn);
        ?>

    </body>

</html>