<!DOCTYPE html>
<html lang="en">
<?php
/*****************************************
Author:	Joseph Owens and Femi Oyedepo
Date:	1/14/2015
Description: The Welcome page
 *****************************************/
?>
<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,300italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <title>Welcome to College Store</title>
    <link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
 <?php require ("header.php");?>
        <!--start intro-->
        <section id="intro">
            <img src="images/homebanner.jpg" width="960" height="73" alt="banner" />
        </section>
        <!--end intro-->
        <!--start holder-->
        <div class="holder_content">
            <section class="group2">
                <h3>College Store TEST...</h3>
                <p>...provides everything on your school supplies list. Shop online today for our supplies selection.</p>
                <a class="photo_hover3" href="supplies.php"><img src="images/supplies-bt.jpg" width="360" height="214" title="Supplies" alt="supplies"/></a>
            </section>
            <section class="group3">
                <h3>We offer...</h3>
                <p>...thousands of school spiritwear, T-Shirt designs, and customization; with new inventory each semester/term. </p>
                <a class="photo_hover3" href="school-spirit.php"><img src="images/spirit-bt.jpg" width="360" height="214" title="School Spirit" alt="school spirit"/></a>
            </section>
        </div>
        <!--end holder-->
    </div>
    <!--end container-->
 <!--start footer-->
 <?php require ("footer.php");?>
</div>
<!--end bg-->
</body>
</html>
