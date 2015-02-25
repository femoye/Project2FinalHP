<!DOCTYPE html>
<html lang="en">
<?php
/*****************************************
Author: Your Name
Date:   Current Date
Description:
This page reads customer names from a flat text
file and displays them in option box.  Based on
user input and submission of the form, detailed
information on the customer will be displayed.

Variables:
$filePointer   - is a pointer to the file that is opened for reading
$customerInfo  - is an array that stores the values from the file
$customer      - value passed from the form to specify a customer
$submit        - the submit button
 *****************************************/
?>

<head>
    <title>Customers Registered</title>
</head>

<body>



<h3>Current Customers</h3>

<?php
$filePointer = fopen("files/newCustomers.txt", "r");
if (!$filePointer){
    print "The customer file is empty or missing";
    exit;
}

while(!feof($filePointer)){
    $customerInfo = fgetcsv($filePointer, 100, "\t");   // read
    if($customerInfo!=""){
        echo "$customerInfo[0],$customerInfo[1],$customerInfo[2],
		$customerInfo[3],
                $customerInfo[4],$customerInfo[5],$customerInfo[6] <br />";
    }  // end if

}  // end while
?>

</table>
</body>
</html>
