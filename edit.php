<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CarOwnerSearch</title>
    <style>
        @import "style.CSS";

    </style>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

</body>
<script>
    var lpnEmp = null;
    function inputCheck(){
        lpnSplitCheck(lpnEmp);
        var proEmp = document.forms['input']['province'].value;
        var fnEmp = document.forms['input']['first_name'].value.length;
        var lnEmp = document.forms['input']['last_name'].value.length;
        var telEmp = document.forms['input']['tel_num'].value.length;
        console.log(lpnEmp , proEmp , fnEmp , lnEmp ,telEmp);
        if(lpnEmp && proEmp !="" && fnEmp !=0 && fnEmp !=0 && lnEmp !=0 && telEmp ==10){

            document.getElementById("submit").disabled = false ;
        }
        else {
            document.getElementById("submit").disabled = true ;
        }
    }
    window.onload = function() {
        lpnSplitCheck(lpnEmp);
        var proEmp = document.forms['input']['province'].value;
        var fnEmp = document.forms['input']['first_name'].value.length;
        var lnEmp = document.forms['input']['last_name'].value.length;
        var telEmp = document.forms['input']['tel_num'].value.length;
        console.log(lpnEmp , proEmp , fnEmp , lnEmp ,telEmp);
        if(lpnEmp && proEmp !="" && fnEmp !=0 && fnEmp !=0 && lnEmp !=0 && telEmp ==10){

            document.getElementById("submit").disabled = false ;
        }
        else {
            document.getElementById("submit").disabled = true ;
        }
    }

    function lpnSplitCheck() {
        var lpnCheck = document.forms['input']['LPN'].value;
        var lpnSplit = lpnCheck.split("");
        var letters = /[ก-ฮ]/;
        for (i = lpnSplit.length; i < 7; i++) {
            lpnSplit.push(null);
        }
        //if (lpnSplit.length >= 3){}
        console.log(lpnSplit);
        var intA = Number.isInteger(parseInt(lpnSplit[0]));
        var charA =letters.test(lpnSplit[0]);

        var charB =letters.test(lpnSplit[1]);

        var intC = Number.isInteger(parseInt(lpnSplit[2]));
        var charC =letters.test(lpnSplit[2]);


        var intD = Number.isInteger(parseInt(lpnSplit[3]));
        var empD = Boolean(lpnSplit[3]  == null);
        if (intD || empD) {
            var resultD = true;
        }else {
            var resultD = false;
        }

        var intE = Number.isInteger(parseInt(lpnSplit[4]));
        var empE = Boolean(lpnSplit[4] == null);
        if (intE || empE) {
            var resultE = true;
        }else {
            var resultE = false;
        }

        var intF = Number.isInteger(parseInt(lpnSplit[5]));
        var empF = Boolean(lpnSplit[5]== null);
        if (intF || empF) {
            var resultF = true;
        }else {
            var resultF = false;
        }

        var intG = Number.isInteger(parseInt(lpnSplit[6]));
        var empG = Boolean(lpnSplit[6] == null);
        if (intG || empG) {
            var resultG = true;
        }else {
            var resultG = false;
        }

        if (intC) {

            if (charA && charB && intC && resultD && resultE && resultF && empG){
                console.log(charA , charB , intC , resultD , resultE , resultF , empG);
                console.log("YES!");
                lpnEmp = true;
            }else {lpnEmp = false;}

        } else if (charC) {

            if (intA && charB && charC && intD && resultE && resultF && resultG) {
                console.log(intA , charB , charC , intD , resultE , resultF , empG);
                console.log("YES!");
                lpnEmp = true;
            }else { lpnEmp = false;}

        }
    }
</script>
</html>
<?php
include 'Config.php';

$ID=$_GET["ID"];
$result = mysqli_query($sqli,"SELECT * from CarOwner WHERE ID LIKE '$ID'");
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<form action='update.php' name='input' method='post'>";
    while ($row = $result->fetch_assoc()) {
        $type = $row ['Type'];
        $LPN = $row['LPN'];
        $Pro = $row['Province'];
        $first_name = $row['FirstName'];
        $last_name = $row['Surname'];
        $tel = $row['TEL'];
        $class = $row['Grade'];
        $st_first_name = $row['STName'];
        $st_last_name = $row['STSurName'];
        $class2 = $row['Grade2'];
        $st_first_name2 = $row['STN2'];
        $st_last_name2 = $row['STSN2'];
        $class3 = $row['Grade3'];
        $st_first_name3 = $row['STN3'];
        $st_last_name3 = $row['STSN3'];
      echo " 
        <p>      
        <label for=\"Type\">ตำแหน่ง:</label>
        <select name=\"Type\" id=\"Type\" oninput=\"inputCheck()\">
        <option value=\"$type\" name=\"$type\" >$type</option>
            <option value=\"Parent\" name=\"Parent\">Parent</option>
            <option value=\"Teacher\" name=\"Teacher\">Teacher</option>
        </select>
        <label for=\"plateNumber\">เลขทะเบียน:</label>
        <input type=\"text\" name=\"LPN\" id=\"plateNumber\" maxlength=\"7\" size=\"7\" value='$LPN' oninput=\"inputCheck()\">
        <label for=\"pro\">จังหวัด:</label>
        <select name=\"province\" oninput=\"inputCheck()\" id=\"pro\">
            <option value=\"$Pro\" selected>$Pro</option>
            <option value=\"กรุงเทพมหานคร\">กรุงเทพมหานคร</option>
            <option value=\"กระบี่\">กระบี่ </option>
            <option value=\"กาญจนบุรี\">กาญจนบุรี </option>
            <option value=\"กาฬสินธุ์\">กาฬสินธุ์ </option>
            <option value=\"กำแพงเพชร\">กำแพงเพชร </option>
            <option value=\"ขอนแก่น\">ขอนแก่น</option>
            <option value=\"จันทบุรี\">จันทบุรี</option>
            <option value=\"ฉะเชิงเทรา\">ฉะเชิงเทรา </option>
            <option value=\"ชัยนาท\">ชัยนาท </option>
            <option value=\"ชัยภูมิ\">ชัยภูมิ </option>
            <option value=\"ชุมพร\">ชุมพร </option>
            <option value=\"ชลบุรี\">ชลบุรี </option>
            <option value=\"เชียงใหม่\">เชียงใหม่ </option>
            <option value=\"เชียงราย\">เชียงราย </option>
            <option value=\"ตรัง\">ตรัง </option>
            <option value=\"ตราด\">ตราด </option>
            <option value=\"ตาก\">ตาก </option>
            <option value=\"นครนายก\">นครนายก </option>
            <option value=\"นครปฐม\">นครปฐม </option>
            <option value=\"นครพนม\">นครพนม </option>
            <option value=\"นครราชสีมา\">นครราชสีมา </option>
            <option value=\"นครศรีธรรมราช\">นครศรีธรรมราช </option>
            <option value=\"นครสวรรค์\">นครสวรรค์ </option>
            <option value=\"นราธิวาส\">นราธิวาส </option>
            <option value=\"น่าน\">น่าน </option>
            <option value=\"นนทบุรี\">นนทบุรี </option>
            <option value=\"บึงกาฬ\">บึงกาฬ</option>
            <option value=\"บุรีรัมย์\">บุรีรัมย์</option>
            <option value=\"ประจวบคีรีขันธ์\">ประจวบคีรีขันธ์ </option>
            <option value=\"ปทุมธานี\">ปทุมธานี </option>
            <option value=\"ปราจีนบุรี\">ปราจีนบุรี </option>
            <option value=\"ปัตตานี\">ปัตตานี </option>
            <option value=\"พะเยา\">พะเยา </option>
            <option value=\"พระนครศรีอยุธยา\">พระนครศรีอยุธยา </option>
            <option value=\"พังงา\">พังงา </option>
            <option value=\"พิจิตร\">พิจิตร </option>
            <option value=\"พิษณุโลก\">พิษณุโลก </option>
            <option value=\"เพชรบุรี\">เพชรบุรี </option>
            <option value=\"เพชรบูรณ์\">เพชรบูรณ์ </option>
            <option value=\"แพร่\">แพร่ </option>
            <option value=\"พัทลุง\">พัทลุง </option>
            <option value=\"ภูเก็ต\">ภูเก็ต </option>
            <option value=\"มหาสารคาม\">มหาสารคาม </option>
            <option value=\"มุกดาหาร\">มุกดาหาร </option>
            <option value=\"แม่อ่องสอน\">แม่อ่องสอน </option>
            <option value=\"ยโสธร\">ยโสธร </option>
            <option value=\"ยะลา\">ยะลา </option>
            <option value=\"ร้อยเอ็ด\">ร้อยเอ็ด </option>
            <option value=\"ระนอง\">ระนอง </option>
            <option value=\"ระยอง\">ระยอง </option>
            <option value=\"ราชบุรี\">ราชบุรี</option>
            <option value=\"ลพบุรี\">ลพบุรี </option>
            <option value=\"ลำปาง\">ลำปาง </option>
            <option value=\"ลำพูน\">ลำพูน </option>
            <option value=\"เลย\">เลย </option>
            <option value=\"ศรีสะเกษ\">ศรีสะเกษ</option>
            <option value=\"สกลนคร\">สกลนคร</option>
            <option value=\"สงขลา\">สงขลา </option>
            <option value=\"สมุทรสาคร\">สมุทรสาคร </option>
            <option value=\"สมุทรปราการ\">สมุทรปราการ </option>
            <option value=\"สมุทรสงคราม\">สมุทรสงคราม </option>
            <option value=\"สระแก้ว\">สระแก้ว </option>
            <option value=\"สระบุรี\">สระบุรี </option>
            <option value=\"สิงห์บุรี\">สิงห์บุรี </option>
            <option value=\"สุโขทัย\">สุโขทัย </option>
            <option value=\"สุพรรณบุรี\">สุพรรณบุรี </option>
            <option value=\"สุราษฎร์ธานี\">สุราษฎร์ธานี </option>
            <option value=\"สุรินทร์\">สุรินทร์ </option>
            <option value=\"สตูล\">สตูล </option>
            <option value=\"หนองคาย\">หนองคาย </option>
            <option value=\"หนองบัวลำภู\">หนองบัวลำภู </option>
            <option value=\"อำนาจเจริญ\">อำนาจเจริญ </option>
            <option value=\"อุดรธานี\">อุดรธานี </option>
            <option value=\"อุตรดิตถ์\">อุตรดิตถ์ </option>
            <option value=\"อุทัยธานี\">อุทัยธานี </option>
            <option value=\"อุบลราชธานี\">อุบลราชธานี</option>
            <option value=\"อ่างทอง\">อ่างทอง </option>
        </select>
        <label for=\"firstName\">ชื่อ:</label>
        <input type=\"text\" name=\"first_name\" id=\"firstName\" value='$first_name' oninput=\"inputCheck()\">
        <label for=\"lastName\">นามสกุล:</label>
        <input type=\"text\" name=\"last_name\" id=\"lastName\" value='$last_name' oninput=\"inputCheck()\">
        <label for=\"telephoneNumber\">หมายเลขโทรศัพท์:</label>
        <input type=\"number\" name=\"tel_num\" id=\"telephoneNumber\" minlength=\"10\" maxlength=\"10\" size=\"10\" value='$tel' oninput=\"inputCheck()\">
    </p>
    <div name=\"st1\" id=\"st1\">
        <p>
        <label for=\"Class\"> ชั้น:</label>
        <select name=\"Class\" id=\"Class\">
            <option value=\"$class\" selected>$class</option>
            <option value=\"\"> ... </option>
            <option value=\"อ.1\">อ.1</option>
            <option value=\"อ.2\">อ.2</option>
            <option value=\"อ.3\">อ.3</option>
            <option value=\"ป.1\">ป.1</option>
            <option value=\"ป.2\">ป.2</option>
            <option value=\"ป.3\">ป.3</option>
            <option value=\"ป.4\">ป.4</option>
            <option value=\"ป.5\">ป.5</option>
            <option value=\"ป.6\">ป.6</option>
            <option value=\"ม.1\">ม.1</option>
            <option value=\"ม.2\">ม.2</option>
            <option value=\"ม.3\">ม.3</option>
            <option value=\"ม.4\">ม.4</option>
            <option value=\"ม.5\">ม.5</option>
            <option value=\"ม.6\">ม.6</option>
        </select>
        <label for=\"stFirstName\"> ชื่อ นร:</label>
        <input type=\"text\" name=\"st_first_name\" id=\"stFirstName\" value='$st_first_name'>
        <label for=\"stLastName\">นามสกุล นร:</label>
        <input type=\"text\" name=\"st_last_name\" id=\"stLastName\" value='$st_last_name'>
        </p>
    </div>
    <div name=\"st2\" id=\"st2\">
        <p>
            <label for=\"Class2\"> ชั้น:</label>
            <select name=\"Class2\" id=\"Class2\">
            <option value=\"$class2\" selected>$class2</option>
                <option value=\"\"> ... </option>
                <option value=\"อ.1\">อ.1</option>
                <option value=\"อ.2\">อ.2</option>
                <option value=\"อ.3\">อ.3</option>
                <option value=\"ป.1\">ป.1</option>
                <option value=\"ป.2\">ป.2</option>
                <option value=\"ป.3\">ป.3</option>
                <option value=\"ป.4\">ป.4</option>
                <option value=\"ป.5\">ป.5</option>
                <option value=\"ป.6\">ป.6</option>
                <option value=\"ม.1\">ม.1</option>
                <option value=\"ม.2\">ม.2</option>
                <option value=\"ม.3\">ม.3</option>
                <option value=\"ม.4\">ม.4</option>
                <option value=\"ม.5\">ม.5</option>
                <option value=\"ม.6\">ม.6</option>
            </select>
            <label for=\"stFirstName2\"> ชื่อ นร:</label>
            <input type=\"text\" name=\"st_first_name2\" id=\"stFirstName2\" value='$st_first_name2'>
            <label for=\"stLastName2\">นามสกุล นร:</label>
            <input type=\"text\" name=\"st_last_name2\" id=\"stLastName2\" value='$st_last_name2'>
        </p>
    </div>
    <div name=\"st3\" id=\"st3\">
        <p>
            <label for=\"Class3\"> ชั้น:</label>
            <select name=\"Class3\" id=\"Class3\">
            <option value=\"$class3\" selected>$class3</option>
                <option value=\"\"> ... </option>
                <option value=\"อ.1\">อ.1</option>
                <option value=\"อ.2\">อ.2</option>
                <option value=\"อ.3\">อ.3</option>
                <option value=\"ป.1\">ป.1</option>
                <option value=\"ป.2\">ป.2</option>
                <option value=\"ป.3\">ป.3</option>
                <option value=\"ป.4\">ป.4</option>
                <option value=\"ป.5\">ป.5</option>
                <option value=\"ป.6\">ป.6</option>
                <option value=\"ม.1\">ม.1</option>
                <option value=\"ม.2\">ม.2</option>
                <option value=\"ม.3\">ม.3</option>
                <option value=\"ม.4\">ม.4</option>
                <option value=\"ม.5\">ม.5</option>
                <option value=\"ม.6\">ม.6</option>
            </select>
            <label for=\"stFirstName3\"> ชื่อ นร:</label>
            <input type=\"text\" name=\"st_first_name3\" id=\"stFirstName3\" value='$st_first_name3'>
            <label for=\"stLastName3\">นามสกุล นร:</label>
            <input type=\"text\" name=\"st_last_name3\" id=\"stLastName3\" value='$st_last_name3'>
        </p>
    </div>
    <input name='ID' value='$ID' type='hidden' size='1'>
    ";

    }
    echo "<input type='submit' id='submit' value='บันทึก' class=\"back\" >";
    echo "</form>";

    echo "<div class=\"back\">
    <form class=\"back\" method=\"post\" action=\"search.php?Page=0\">
    <br>
        <input type=\"hidden\" value=\"LPN\" name=\"Select\"></input>
        <input type=\"hidden\" value=\" \"name=\"search\"></input>
        <input type=\"submit\" class=\"back\" value=\"กลับ\" >
    </form>
</div>";
}