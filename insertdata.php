
<?php
include 'Config.php';

// Escape user inputs for security
$type = mysqli_real_escape_string($sqli, $_REQUEST['Type']);
$LPN = mysqli_real_escape_string($sqli, $_REQUEST['LPN']);
$Pro = mysqli_real_escape_string($sqli, $_REQUEST['province']);
$first_name = mysqli_real_escape_string($sqli, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($sqli, $_REQUEST['last_name']);
$tel = mysqli_real_escape_string($sqli, $_REQUEST['tel_num']);
$class = mysqli_real_escape_string($sqli, $_REQUEST['Class']);
$st_first_name = mysqli_real_escape_string($sqli, $_REQUEST['st_first_name']);
$st_last_name = mysqli_real_escape_string($sqli, $_REQUEST['st_last_name']);
$class2 = mysqli_real_escape_string($sqli, $_REQUEST['Class2']);
$st_first_name2 = mysqli_real_escape_string($sqli, $_REQUEST['st_first_name2']);
$st_last_name2 = mysqli_real_escape_string($sqli, $_REQUEST['st_last_name2']);
$class3 = mysqli_real_escape_string($sqli, $_REQUEST['Class3']);
$st_first_name3 = mysqli_real_escape_string($sqli, $_REQUEST['st_first_name3']);
$st_last_name3 = mysqli_real_escape_string($sqli, $_REQUEST['st_last_name3']);


// Attempt insert query execution
$insert = "INSERT INTO CarOwner (LPN,Province,Type,FirstName,Surname,TEL,Grade,STName,STSurName,Grade2,STN2,STSN2,Grade3,STN3,STSN3) VALUES ('$LPN','$Pro','$type','$first_name', '$last_name', '$tel',
'$class','$st_first_name','$st_last_name','$class2','$st_first_name2','$st_last_name2','$class3','$st_first_name3','$st_last_name3')";
if(mysqli_query($sqli, $insert)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $insert. " . mysqli_error($sqli);
}
header( 'refresh: 2; url=/M6_project_CarOwner/search.php?Page=0' );
exit(0);

// Close connection
mysqli_close($sqli);