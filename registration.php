<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php
/*****************************************
Author:	Joseph Owens and Femi Oyedepo
Date:	2/9/2015
Description: Registration page
 *****************************************/


// Writing to users.csv
if(isset($_POST["submitted"])) {
    @ $fp = fopen("users.csv", 'a');
    if (!$fp) {
        echo "<div class='error'>Write access is denied</div>";
        exit;
    }

    $fname = htmlspecialchars(strip_tags($_POST["fname"]));
    $lname = htmlspecialchars(strip_tags($_POST["lname"]));
    $phone = htmlspecialchars(strip_tags($_POST["phone"]));
    $email = htmlspecialchars(strip_tags($_POST["email"]));
    $dob = htmlspecialchars(strip_tags($_POST["dob"]));
    $radio = $_POST["radio"];
    $select = $_POST["select"];
    $subjects1 = $_POST["subjects1"];
    $subjects2 = $_POST["subjects2"];
    $subjects3 = $_POST["subjects3"];
    $username = htmlspecialchars(strip_tags($_POST["username"]));
    $password = htmlspecialchars(strip_tags($_POST["password1"]));
    $textarea = htmlspecialchars(strip_tags($_POST['textarea']));

    $output = "\"$fname\",\"$lname\",\"$email\",\"$dob\",\"$radio\",\"$textarea\",\"$userid\",\"$password1\",\n";
    fwrite($fp,$output);

    echo "<h2>Welcome, " . $fname . " has been created and logged in as " . $username . "</h2>";

    fclose($fp);
}
?>
<head>
    <script type="text/javascript" src=""></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript" src="form.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,300italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <title>College Bookstore :: Product Page :: Surface Pro</title>
    <link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
<?php require ("header.php");?>
    <!--start intro-->
    <section id="intro">
        <img src="images/registerbanner.jpg" width="960" height="73" alt="banner" />
    </section>
    <!--end intro-->
    <!--start holder-->
    <div class="holder_content">
        <section class="leftnav">
            <div id="sidebar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="supplies.php">Supplies</a>
                    <li><a href="school-spirit.php">School Spirit</a></li>
                </ul>
            </div>
        </section>
        <section class="formgroup">
            <div id="breadcrumb"><span style="float: left;"><a class="breadcrumb" href="index.php">Home</a> &gt; Registration</span>
            </div>



<?php
if (isset($_POST['date'])) {
    echo filter_var($_POST['date'], FILTER_SANITIZE_DATE);
    echo "<br/><br/>";
}
if (isset($_POST['fname'])) {
        echo filter_var($_POST['fname'], FILTER_SANITIZE_NAME);
        echo "<br/><br/>";
    }
if (isset($_POST['lname'])) {
    echo filter_var($_POST['lname'], FILTER_SANITIZE_NAME);
    echo "<br/><br/>";
}

if (isset($_POST['dob'])) {
    echo filter_var($_POST['dob'], FILTER_SANITIZE_DOB);
    echo "<br/><br/>";
}
if (isset($_POST['zip'])) {
    echo filter_var($_POST['city'], FILTER_SANITIZE_ZIP);
    echo "<br/><br/>";
}
if (isset($_POST['email'])) {
    echo filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    echo "<br/><br/>";
}
if (isset($_POST['userid'])) {
    echo filter_var($_POST['userid'], FILTER_SANITIZE_USERID);
    echo "<br/><br/>";
}
if (isset($_POST['password1'])) {
    echo filter_var($_POST['password1'], FILTER_SANITIZE_PASSWORD1);
    echo "<br/><br/>";
}
if (isset($_POST['password2'])) {
    echo filter_var($_POST['password2'], FILTER_SANITIZE_PASSWORD2);
    echo "<br/><br/>";
}

?>

            <form id="userForm" action="reg-process.php" onsubmit=" return validateForm()" method="POST">
<?php
                if(isset($_POST['submit'] ) ) {
                @ $filePointer = fopen("users.csv","a");
                if (!$filePointer){
                print "Write access is denied";
                exit;
                }

                // shortcut names

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $dob = $_POST['dob'];
                $userid = $_POST['userid'];
                $password1 = $_POST['password1'];
                $password2 = $_POST['password2'];


                $output = "\"$fname\" \t \"$lname\" \t \"$email\" \t \"$dob\" \t \"$userid\" \t \"$password1\" \n";
                fwrite($filePointer, $output);
                fclose($filePointer);
                }   // end if
  ?>
                <div>
                    <fieldset>
                        <div id="errorDiv">
                        <?php
                            if (isset($_SESSION['error']) && isset ($_SESSION['formAttempt'])) {
                                unset($_SESSION['formAttempt']);
                                print "Errors encountered<br />\n";
                                foreach ($_SESSION['error'] as $error) {
                                    print $error . "<br />\n";
                                } //end foreach
                            } //end if
                        ?>
                        </div>
                        <label for="fname">First Name:* </label>
                        <input type="text" id="fname" name="fname" placeholder="only letters permitted" pattern="[A-Za-z]{1,20}" autofocus>
                        <span class="errorFeedback errorSpan" id="fnameError">First Name is required</span>
                        <br />
                        <label for="lname">Last Name:* </label>
                        <input type="text" id="lname" name="lname" placeholder="only letters permitted" pattern="[A-Za-z]{1,20}">
                        <span class="errorFeedback errorSpan" id="lnameError">Last Name is required</span>
                        <br />
                        <label for="dob">Date of Birth: </label>
                        <input type="date" id="dob" value="<?php echo $_POST['dob']; ?>" name="dob"
                                placeholder="mm/dd/yyyy">
                        <br />
                        <label for="reference">Found us where:</label></td>
                        <select id="reference" name="reference" >
                                <option value=""></option>
                                <option <?php echo $reference=='Website'?'selected':''; ?> >Website</option>
                                <option <?php echo $reference=='Facebook'?'selected':''; ?> >Facebook</option>
                                <option <?php echo $reference=='Phonebook'?'selected':''; ?> >Phonebook</option>
                        </select>
                        <br />
                        <label for="email">E-mail Address:* </label>
                        <input type="text" id="email" value="<?php echo $_POST['email']; ?>" name="email" pattern="[\w\D]+@[a-z0-9.-]+\.[\a-z]{2,3}">
                        <span class="errorFeedback errorSpan" id="emailError">E-mail is required</span>
                        <br />
                        <label for="gender">Gender:*</label>
                            <span class'errorFeedback errorSpan'><?php echo $gender_error ?></span>
                        <input class="radioButton" type="radio" name="gender" id="male" value="male"
                            <?php if ((isset($gender)) && ($gender==='male')) {echo "checked"; }
                            ?>/>
                        <label class="radioButton" for="male">Male</label>
                        <input class="radioButton" type="radio" name="gender" id="female" value="female"
                            <?php if ((isset($gender)) && ($gender==='female')) {echo "checked"; }
                            ?>/>
                        <label class="radioButton" for="female">Female</label>
                        <br />
                        <label for="subjects">Favorite Subjects(s)</label>
                        <input class="mathCheck" type="checkbox" name="autotype[]" id="math" value="math">
                        <label class="mathLabel" for="math">Math</label>
                        <input class="checkBox" type="checkbox" name="autotype[]" id="science" value="science">
                        <label class="scienceLabel" for="science">Science</label>
                        <input class="checkBox" type="checkbox" name="autotype[]" id="art" value="art">
                        <label class="artLabel" for="art">Art</label>
                        <br />
                        <label for="userid">User ID:* </label>
                        <input type="text" id="userid" placeholder="create a username" value="<?php echo $_POST['userid']; ?>" name="userid" size="10" ><span class="errorFeedback errorSpan" id="useridError">User ID required</span>
                        <br />
                        <label for="password1">Password:* </label>
                        <input type="password" id="password1" placeholder="create a password" value="<?php echo $_POST['password1']; ?>" name="password1" ><span class="errorFeedback errorSpan" id="password1Error">Password required</span>
                        <br />
                        <label for="password2">Verify Password:* </label>
                        <input type="password" id="password2" placeholder="confirm password" value="<?php echo $_POST['password2']; ?>" name="password2" size="10">
                        <span class="errorFeedback errorSpan" id="password2Error">Passwords don’t match</span>
                        <br />
                        <label for="comments">Your Comments:</label>
                        <input type="text" name="comments" class="commentBox">
                        <br />
                        <input type="submit" id="submit" name="submit" value="Submit">
                        <br />
                        <input type="hidden" value="true" name="submitted" />
                    </fieldset>
                </div>
            </form>
            <script>
                document.form.dob.onfocus=function() {
                    document.getElementById('dobhint').innerHTML = "(Enter date of birth)";
                }

                document.form.dob.onblur=function() {
                    document.getElementById('dobhint').innerHTML = "";
                }


            </script>
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
