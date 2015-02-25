<!DOCTYPE html>
<html lang="en">
<?php
/*****************************************
Author:	Joseph Owens and Femi Oyedepo
Date:	1/14/2015
Description: The Supplies page
 *****************************************/
?>
<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,300italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <title>College Bookstore :: Supplies</title>
    <link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
<?php require ("header.php");?>
    <!--start intro-->
    <section id="intro">
        <img src="images/suppliesbanner.jpg" width="960" height="73" alt="Supplies Banner" title="Supplies Banner" />
    </section>
    <!--end intro-->
    <!--start holder-->
    <div class="holder_content">
        <section class="leftnav">
            <div id="sidebar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="on"><a href="supplies.php"><span class="currentPage">Supplies</a>
                    </li>
                    <li><a href="school-spirit.php">School Spirit</a></li>
                </ul>
            </div>
        </section>
        <section class="textgroup">
            <div id="breadcrumb"><span style="float: left;"><a class="breadcrumb" href="index.php">Home</a> &gt; Supplies</span>
            </div><table class="productlist" width="600" height="100%" cellpadding="6">
                <tbody>
                <tr>
                    <td><a href="supplies-product1.php"><img src="images/surfaceprothumbnail.jpg" alt="Surface Pro" title="Surface Pro"/></a>
                    </td>
                    <td><h3>Microsoft Surface Pro</h3>
                        <p> With the Kickstand, optional Type Cover, and multiple ports (including
                            USB 3.0, Mini DisplayPort, and microSD card reader), Surface Pro 3 delivers ...<a href="supplies-product1.php"> more details</a></p></td>
                </tr>
                </tbody>
                <tr></tr>
                <tr></tr>
                <tbody>
                <tr>
                    <td><a href="supplies-product2.php"><img src="images/bindersthumbnail.jpg" alt="Binders" title="Binders"/></a></td>
                    <td><h3>Binders and Notebooks (Mega pack)</h3>
                        <p> This mega pack is sure to last an entire semester.  Notebooks are made
                            with recycled paper (so you will be helping the environment) ...<a href="supplies-product2.php"> more details</a></p></td>
                </tr>
                </tbody>
                <tr></tr>
                <tr></tr>
            </table>
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
