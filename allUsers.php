<!DOCTYPE html>
<html lang="en">
<?php
/**
 * Created by PhpStorm.
 * User: josephowens
 * Date: 2/22/15
 * Time: 5:16 PM
 */
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
<div class="viewusers_content">
    <section class="leftnav2">
        <div id="sidebar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="supplies.php">Supplies</a>
                <li><a href="school-spirit.php">School Spirit</a></li>
            </ul>
        </div>
    </section>
    <section class="textgroup2">
    <div id="breadcrumb">
						<span style="float: left;">
							<a class="breadcrumb" href="index.php">Home</a> &gt; All Users
						</span>
    </div>

<table id="allusers">

    <tr id="allusers3">
        <th>First Name </th>
        <th>Last Name </th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Username</th>
        <th>Password</th>

        <?php

        $fp = fopen("users.csv", 'r');
        rewind($fp);


        while (!feof($fp)) {
            $list = fgetcsv($fp, 1024, ",",'"');

            if ($list != ""){
                // user data
                print "<tr><td>$list[0]</td>";
                print "<td>$list[1]</td>";
                print "<td>$list[2]</td>";
                print "<td>$list[3]</td>";
                print "<td>$list[4]</td>";
                print "<td>$list[5]</td>";

            }

        }
        ?>

</table>
    </section>

</body>

</html>

<!--start footer-->
<?php require ("footer.php");?>

<!--end bg-->
</body>
</html>



