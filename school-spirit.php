<!DOCTYPE html>
<html lang="en">
<?php
/*****************************************
Author:	Joseph Owens and Femi Oyedepo
Date:	1/14/2015
Description: The School Spirit page
 *****************************************/
?>
<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,300italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <title>College Bookstore :: School Spirit</title>
    <link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
<?php require ("header.php");?>
    <!--start intro-->
    <section id="intro">
        <img src="images/schoolspiritbanner.jpg" width="960" height="73" alt="School Spirit Banner" title="School Spirit Banner" />
    </section>
    <!--end intro-->
    <!--start holder-->
    <div class="holder_content">
        <section class="leftnav">
            <div id="sidebar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="supplies.php">Supplies</a></li>
                    <li class="on"><a href="school-spirit.php"><span class="currentPage">School Spirit</a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="textgroup">
            <div id="breadcrumb">
						<span style="float: left;">
							<a class="breadcrumb" href="index.php">Home</a> &gt; School Spirit
						</span>
            </div><table class="productlist" width="600" height="100%" cellpadding="6">
                <tbody>
                <tr>
                    <td><a href="spirit-product1.php"><img src="images/bannerthumbnail.jpg" alt="Banner" title="Banner"/></a></td>
                    <td><h3>Banner</h3>
                        <p>We offer the finest banners from your favorite college teams. An assortment of colors for you to choose from ...<a href="spirit-product1.php"> more details</a></p></td>
                </tr>
                </tbody>
                <tbody>
                <tr>
                    <td><a href="spirit-product2.php"><img src="images/sweatshirtthumbnail.jpg" alt="Long Sleeve Shirt" title="Long Sleeve Shirt"/></td>
                    <td><h3>Long Sleeve Shirt</h3>
                        <p>This long-sleeve shirt features a crisp classic image of your college in bold white lettering
                            contrasting definitively against navy blue ...<a href="spirit-product2.php"> more details</a></p></td
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
