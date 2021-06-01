<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Temp </title>
</head>
<body>
<form name="EventConfirmRedirection" method="post" action="search.php">
    <input type="hidden" value="LPN" name="Select"></input>
    <input type="hidden" value=" "name="search"></input>
    <input type="submit" value="Start" >
</form>
</body>
<script type="text/javascript">
    window.onload = function() {
        console.log('before');
        setTimeout(function(){
            console.log('after');
        },2000);
        document.forms["EventConfirmRedirection"].submit();
    }
</script>
</html>
<?php
include 'Config.php';


$ID = $_POST["ID"];
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
// Escape user inputs for security

$update = "UPDATE CarOwner SET LPN = '$LPN' ,Province = '$Pro' ,Type = '$type' ,FirstName = '$first_name' ,Surname = '$last_name' ,TEL = '$tel' ,
Grade = '$class' ,STName = '$st_first_name' ,STSurName = '$st_last_name' ,Grade2 = '$class2' ,STN2 = '$st_first_name2' ,STSN2 = '$st_last_name2' ,
Grade3 = '$class3' ,STN3 = '$st_first_name3' ,STSN3 = '$st_last_name3' WHERE id='$ID'";
if(mysqli_query($sqli, $update)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $update. " . mysqli_error($sqli);
}
header( 'refresh: 500; url=/M6_project_CarOwner/index.php' );
 exit(0);

// Close connection
mysqli_close($sqli);

