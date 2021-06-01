<?php
include 'Config.php';
error_reporting(0); //show error

$LPN = mysqli_real_escape_string($sqli, $_REQUEST['LPN']);
$Pro = mysqli_real_escape_string($sqli, $_REQUEST['province']);

$result = mysqli_query($sqli, "SELECT * FROM CarOwner WHERE LPN LIKE '%{$LPN}%' AND Province LIKE '%{$Pro}%'  ");
$spam = mysqli_num_rows($result);
echo "
<script>
console.log($spam);
if ($spam == 0){
    var spam = 0;
}else{
    var spam = 1;
}
</script>
";

if ($spam == 0 && $LPN == null){
    echo "<form name=\"input\" action=\"insert.php\" method=\"post\" >
    <p>
        <label for=\"Type\">ตำแหน่ง:</label>
        <select name=\"Type\" id=\"Type\">
            <option value=\"ผู้ปกครอง\" name=\"Parent\">ผู้ปกครอง</option>
            <option value=\"ครู\" name=\"Teacher\">ครู</option>
        </select><br><br>
        <label for=\"plateNumber\">เลขทะเบียน:</label>
        <input type=\"text\" name=\"LPN\" id=\"plateNumber\" maxlength=\"7\" size=\"7\" oninput=\"inputCheck()\" placeholder=\"*1กข1234\"><br><br>
        <label for=\"pro\">จังหวัด:</label>
        <select name=\"province\" id=\"pro\" oninput=\"inputCheck()\">
            <option value=\"\" selected >*Select</option>
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
        </select><br><br>
        <label for=\"firstName\">ชื่อ:</label>
        <input type=\"text\" name=\"first_name\" id=\"firstName\" oninput=\"inputCheck()\" placeholder=\"*\"><br><br>
        <label for=\"lastName\">นามสกุล:</label>
        <input type=\"text\" name=\"last_name\" id=\"lastName\" oninput=\"inputCheck()\" placeholder=\"*\"><br><br>
        <label for=\"telephoneNumber\">หมายเลขโทรศัพท์:</label>
        <input type=\"number\" name=\"tel_num\" id=\"telephoneNumber\" minlength=\"10\" maxlength=\"10\" size=\"10\" oninput=\"inputCheck()\" placeholder=\"*0123456789\"><br><br>
    </p>
    <p>
        <label for=\"st\">จำนวน นร</label>
        <select name=\"st\" id=\"st\">
            <option value=\"0\" selected>...</option>
            <option value=\"1\">1</option>
            <option value=\"2\">2</option>
            <option value=\"3\">3</option>
        </select>
    <div name=\"st1\" id=\"st1\">
        <label for=\"Class\"> ชั้น:</label>
        <select name=\"Class\" id=\"Class\">
            <option value=\" \" selected >Select</option>
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
        <label for=\"stFirstName\">ชื่อ นร::</label>
        <input type=\"text\" name=\"st_first_name\" id=\"stFirstName\">
        <label for=\"stLastName\">นามสกุล นร:</label>
        <input type=\"text\" name=\"st_last_name\" id=\"stLastName\">
    </div>
    <div name=\"st2\" id=\"st2\">
        <p>
            <label for=\"Class2\"> ชั้น:</label>
            <select name=\"Class2\" id=\"Class2\">
                <option value=\"\" selected >Select</option>
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
            <label for=\"stFirstName2\">ชื่อ นร:</label>
            <input type=\"text\" name=\"st_first_name2\" id=\"stFirstName2\">
            <label for=\"stLastName2\">นามสกุล นร:</label>
            <input type=\"text\" name=\"st_last_name2\" id=\"stLastName2\">
        </p>
    </div>
    <div name=\"st3\" id=\"st3\">
        <p>
            <label for=\"Class3\"> ชั้น:</label>
            <select name=\"Class3\" id=\"Class3\">
                <option value=\"\" selected >Select</option>
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
            <label for=\"stFirstName3\">ชื่อ นร:</label>
            <input type=\"text\" name=\"st_first_name3\" id=\"stFirstName3\">
            <label for=\"stLastName3\">นามสกุล นร:</label>
            <input type=\"text\" name=\"st_last_name3\" id=\"stLastName3\">
        </p>
    </div>
    <div class=\"button\">
    <input type=\"submit\" value=\"เพิ่มข้อมูล\" id=\"submit\"  class=\"submit\" disabled>
    <span class=\"buttontext\">กรุณาเติมทุกคำตอบที่มี *</span>
    </div>
";
}else if ($spam == 0){
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

    echo " 
<form name=\"input\" action=\"insertdata.php\" method=\"post\" id='inputform'>
    <p>
        <label for=\"Type\">ตำแหน่ง:</label>
        <input name=\"Type\" id=\"Type\" value='$type'><br><br>
        <label for=\"plateNumber\">เลขทะเบียน:</label>
        <input type=\"text\" name=\"LPN\" id=\"plateNumber\"  value='$LPN' maxlength=\"7\" size=\"7\" oninput=\"inputCheck()\" placeholder=\"*1กข1234\"><br><br>
        <label for=\"pro\">จังหวัด:</label>
        <input name=\"province\" id=\"pro\" value='$Pro' oninput=\"inputCheck()\">
           <br><br>
        <label for=\"firstName\">ชื่อ:</label>
        <input type=\"text\" name=\"first_name\" id=\"firstName\"  value='$first_name' oninput=\"inputCheck()\" placeholder=\"*\"><br><br>
        <label for=\"lastName\">นามสกุล:</label>
        <input type=\"text\" name=\"last_name\" id=\"lastName\" value='$last_name' oninput=\"inputCheck()\" placeholder=\"*\"><br><br>
        <label for=\"telephoneNumber\">หมายเลขโทรศัพท์:</label>
        <input type=\"number\" name=\"tel_num\" id=\"telephoneNumber\" minlength=\"10\" maxlength=\"10\" size=\"10\" value='$tel' oninput=\"inputCheck()\" placeholder=\"*0123456789\"><br><br>
    </p>
    <p>
        <label for=\"st\">จำนวน นร</label>
        <input name=\"st\" id=\"st\" value=' '>
    <div name=\"st1\" id=\"st1\">
        <label for=\"Class\"> ชั้น:</label>
        <input name=\"Class\" id=\"Class\" value='$class'>
        <label for=\"stFirstName\">ชื่อ นร::</label>
        <input type=\"text\" name=\"st_first_name\" value='$st_first_name' id=\"stFirstName\">
        <label for=\"stLastName\">นามสกุล นร:</label>
        <input type=\"text\" name=\"st_last_name\" value='$st_last_name' id=\"stLastName\">
    </div>
    <div name=\"st2\" id=\"st2\">
        <p>
            <label for=\"Class2\"> ชั้น:</label>
            <input name=\"Class2\" id=\"Class2\" value='$class2'>   
            <label for=\"stFirstName2\">ชื่อ นร:</label>
            <input type=\"text\" name=\"st_first_name2\" value='$st_first_name2' id=\"stFirstName2\">
            <label for=\"stLastName2\">นามสกุล นร:</label>
            <input type=\"text\" name=\"st_last_name2\" value='$st_last_name2' id=\"stLastName2\">
        </p>
    </div>
    <div name=\"st3\" id=\"st3\">
        <p>
            <label for=\"Class3\"> ชั้น:</label>
            <input name=\"Class3\" id=\"Class3\" value='$class3'>
   
            <label for=\"stFirstName3\">ชื่อ นร:</label>
            <input type=\"text\" name=\"st_first_name3\" value='$st_first_name3' id=\"stFirstName3\">
            <label for=\"stLastName3\">นามสกุล นร:</label>
            <input type=\"text\" name=\"st_last_name3\" value='$st_last_name3' id=\"stLastName3\">
        </p>
    </div>
    
    <div class=\"button\">
    <input type=\"submit\" value=\"เพิ่มข้อมูล\" id=\"submit\"  class=\"submit\" disabled>
    </div>
    <script>
          document.getElementById(\"submit\").disabled = false ;
           document.getElementById('inputform').submit.click();
            </script>
";
}
else if ($spam == 1){
    echo "
    <script>
        alert('เลขทะเบียนนี้มีในระบบแล้ว');
    </script>
    ";

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

    echo "<form name=\"input\" action=\"insert.php\" method=\"post\" >
    <p>
        <label for=\"Type\">ตำแหน่ง:</label>        
        <select name=\"Type\" id=\"Type\">
            <option value=\"$type\" selected>$type</option>
            <option value=\"ผู้ปกครอง\" name=\"Parent\">ผู้ปกครอง</option>
            <option value=\"ครู\" name=\"Teacher\">ครู</option>
        </select><br><br>
        <label for=\"plateNumber\">เลขทะเบียน:</label>
        <input type=\"text\" name=\"LPN\" id=\"plateNumber\" maxlength=\"7\" size=\"7\" oninput=\"inputCheck()\" placeholder=\"*1กข1234\" value=\"$LPN\"><br><br>
        <label for=\"pro\">จังหวัด:</label>
        <select name=\"province\" id=\"pro\" oninput=\"inputCheck()\">
            <option value=\"$Pro\" selected >$Pro</option>
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
        </select><br><br>
        <label for=\"firstName\">ชื่อ:</label>
        <input type=\"text\" name=\"first_name\" id=\"firstName\" oninput=\"inputCheck()\" placeholder=\"*\" value=\"$first_name\" ><br><br>
        <label for=\"lastName\">นามสกุล:</label>
        <input type=\"text\" name=\"last_name\" id=\"lastName\" oninput=\"inputCheck()\" placeholder=\"*\" value=\"$last_name\"><br><br>
        <label for=\"telephoneNumber\">หมายเลขโทรศัพท์:</label>
        <input type=\"number\" name=\"tel_num\" id=\"telephoneNumber\"  value=\"$tel\" minlength=\"10\" maxlength=\"10\" size=\"10\" oninput=\"inputCheck()\" placeholder=\"*0123456789\"><br><br>
    </p>
    <p>
        <label for=\"st\">จำนวน นร</label>
        <select name=\"st\" id=\"st\">
            <option value=\"0\" >...</option>
            <option value=\"1\">1</option>
            <option value=\"2\">2</option>
            <option value=\"3\" selected>3</option>
        </select>
    <div name=\"st1\" id=\"st1\">
        <label for=\"Class\"> ชั้น:</label>
        <select name=\"Class\" id=\"Class\">
            <option value=\" \"  >Select</option>
            <option value=\"$class\" selected >$class</option>
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
        <label for=\"stFirstName\">ชื่อ นร::</label>
        <input type=\"text\" name=\"st_first_name\" id=\"stFirstName\" value='$st_first_name'>
        <label for=\"stLastName\">นามสกุล นร:</label>
        <input type=\"text\" name=\"st_last_name\" id=\"stLastName\">
    </div>
    <div name=\"st2\" id=\"st2\">
        <p>
            <label for=\"Class2\"> ชั้น:</label>
            <select name=\"Class2\" id=\"Class2\">
                <option value=\"\" >Select</option>
                <option value=\"$class2\" selected >$class2</option>
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
            <label for=\"stFirstName2\">ชื่อ นร:</label>
            <input type=\"text\" name=\"st_first_name2\" id=\"stFirstName2\" value='$st_first_name2'>
            <label for=\"stLastName2\">นามสกุล นร:</label>
            <input type=\"text\" name=\"st_last_name2\" id=\"stLastName2\">
        </p>
    </div>
    <div name=\"st3\" id=\"st3\">
        <p>
            <label for=\"Class3\"> ชั้น:</label>
            <select name=\"Class3\" id=\"Class3\">
                <option value=\"\" >Select</option>
                <option value=\"$class3\" selected >$class3</option>
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
            <label for=\"stFirstName3\">ชื่อ นร:</label>
            <input type=\"text\" name=\"st_first_name3\" id=\"stFirstName3\">
            <label for=\"stLastName3\">นามสกุล นร:</label>
            <input type=\"text\" name=\"st_last_name3\" id=\"stLastName3\">
        </p>
    </div>
    <div class=\"button\">
    <input type=\"submit\" value=\"เพิ่มข้อมูล\" id=\"submit\"  class=\"submit\" disabled>
    <span class=\"buttontext\">กรุณาเติมทุกคำตอบที่มี *</span>
    </div>
";
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert</title>

    <style>
       @import "style.CSS";

    </style>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
</form>
<div class="back">
    <form class="back" method="post" action="search.php?Page=0">
        <br>
        <input type="hidden" value="LPN" name="Select">
        <input type="hidden" value=" " name="search">
        <input type="submit" class="back" value="กลับ" >
    </form>
</div>
</body>
<script>
    window.onload = function () {

    };
    var lpnEmp = null;
    if (spam == 0){
    $("#st1").replaceWith('<div name="st1" id="st1"></div>');
    $("#st2").replaceWith('<div name="st2" id="st2"></div>');
    $("#st3").replaceWith('<div name="st3" id="st3"></div>');}


    document.getElementById("st").onchange = function()
    {
        if(this.value === "0"){
            $("#st1").replaceWith('<div name="st1" id="st1"></div>');
            $("#st2").replaceWith('<div name="st2" id="st2"></div>');
            $("#st3").replaceWith('<div name="st3" id="st3"></div>');
        }
        else if(this.value === "1") {
            $("#st1").replaceWith('<div name="st1" id="st1">\n' +
                '        <p>\n' +
                '        <label for="Class"> ชั้น:</label>\n' +
                '        <select name="Class" id="Class">\n' +
                '        <option value=" " selected >Select</option>' +
                '            <option value="อ.1">อ.1</option>\n' +
                '            <option value="อ.2">อ.2</option>\n' +
                '            <option value="อ.3">อ.3</option>\n' +
                '            <option value="ป.1">ป.1</option>\n' +
                '            <option value="ป.2">ป.2</option>\n' +
                '            <option value="ป.3">ป.3</option>\n' +
                '            <option value="ป.4">ป.4</option>\n' +
                '            <option value="ป.5">ป.5</option>\n' +
                '            <option value="ป.6">ป.6</option>\n' +
                '            <option value="ม.1">ม.1</option>\n' +
                '            <option value="ม.2">ม.2</option>\n' +
                '            <option value="ม.3">ม.3</option>\n' +
                '            <option value="ม.4">ม.4</option>\n' +
                '            <option value="ม.5">ม.5</option>\n' +
                '            <option value="ม.6">ม.6</option>\n' +
                '        </select>\n' +
                '        <label for="stFirstName">ชื่อ นร:</label>\n' +
                '        <input type="text" name="st_first_name" id="stFirstName">\n' +
                '        <label for="stLastName">นามสกุล นร:</label>\n' +
                '        <input type="text" name="st_last_name" id="stLastName">\n' +
                '        </p>\n' +
                '    </div>');
            $("#st2").replaceWith('<div name="st2" id="st2"></div>');
            $("#st3").replaceWith('<div name="st3" id="st3"></div>');
        }
        else if(this.value === "2"){
            $("#st1").replaceWith('<div name="st1" id="st1">\n' +
                '        <p>\n' +
                '        <label for="Class"> ชั้น:</label>\n' +
                '        <select name="Class" id="Class">\n' +
                '        <option value=" " selected >Select</option>' +
                '            <option value="อ.1">อ.1</option>\n' +
                '            <option value="อ.2">อ.2</option>\n' +
                '            <option value="อ.3">อ.3</option>\n' +
                '            <option value="ป.1">ป.1</option>\n' +
                '            <option value="ป.2">ป.2</option>\n' +
                '            <option value="ป.3">ป.3</option>\n' +
                '            <option value="ป.4">ป.4</option>\n' +
                '            <option value="ป.5">ป.5</option>\n' +
                '            <option value="ป.6">ป.6</option>\n' +
                '            <option value="ม.1">ม.1</option>\n' +
                '            <option value="ม.2">ม.2</option>\n' +
                '            <option value="ม.3">ม.3</option>\n' +
                '            <option value="ม.4">ม.4</option>\n' +
                '            <option value="ม.5">ม.5</option>\n' +
                '            <option value="ม.6">ม.6</option>\n' +
                '        </select>\n' +
                '        <label for="stFirstName">ชื่อ นร:</label>\n' +
                '        <input type="text" name="st_first_name" id="stFirstName">\n' +
                '        <label for="stLastName">นามสกุล นร:</label>\n' +
                '        <input type="text" name="st_last_name" id="stLastName">\n' +
                '        </p>\n' +
                '    </div>');
            $("#st2").replaceWith('<div name="st2" id="st2">\n' +
                '        <p>\n' +
                '            <label for="Class2"> ชั้น:</label>\n' +
                '            <select name="Class2" id="Class2">\n' +
                '        <option value=" " selected >Select</option>' +
                '                <option value="อ.1">อ.1</option>\n' +
                '                <option value="อ.2">อ.2</option>\n' +
                '                <option value="อ.3">อ.3</option>\n' +
                '                <option value="ป.1">ป.1</option>\n' +
                '                <option value="ป.2">ป.2</option>\n' +
                '                <option value="ป.3">ป.3</option>\n' +
                '                <option value="ป.4">ป.4</option>\n' +
                '                <option value="ป.5">ป.5</option>\n' +
                '                <option value="ป.6">ป.6</option>\n' +
                '                <option value="ม.1">ม.1</option>\n' +
                '                <option value="ม.2">ม.2</option>\n' +
                '                <option value="ม.3">ม.3</option>\n' +
                '                <option value="ม.4">ม.4</option>\n' +
                '                <option value="ม.5">ม.5</option>\n' +
                '                <option value="ม.6">ม.6</option>\n' +
                '            </select>\n' +
                '            <label for="stFirstName2">ชื่อ นร:</label>\n' +
                '            <input type="text" name="st_first_name2" id="stFirstName2">\n' +
                '            <label for="stLastName2">นามสกุล นร:</label>\n' +
                '            <input type="text" name="st_last_name2" id="stLastName2">\n' +
                '        </p>\n' +
                '    </div>');
            $("#st3").replaceWith('<div name="st3" id="st3"></div>');
        }
        else if(this.value === "3"){
            $("#st1").replaceWith('<div name="st1" id="st1">\n' +
                '        <p>\n' +
                '        <label for="Class"> ชั้น:</label>\n' +
                '        <select name="Class" id="Class">\n' +
                '        <option value=" " selected >Select</option>' +
                '            <option value="อ.1">อ.1</option>\n' +
                '            <option value="อ.2">อ.2</option>\n' +
                '            <option value="อ.3">อ.3</option>\n' +
                '            <option value="ป.1">ป.1</option>\n' +
                '            <option value="ป.2">ป.2</option>\n' +
                '            <option value="ป.3">ป.3</option>\n' +
                '            <option value="ป.4">ป.4</option>\n' +
                '            <option value="ป.5">ป.5</option>\n' +
                '            <option value="ป.6">ป.6</option>\n' +
                '            <option value="ม.1">ม.1</option>\n' +
                '            <option value="ม.2">ม.2</option>\n' +
                '            <option value="ม.3">ม.3</option>\n' +
                '            <option value="ม.4">ม.4</option>\n' +
                '            <option value="ม.5">ม.5</option>\n' +
                '            <option value="ม.6">ม.6</option>\n' +
                '        </select>\n' +
                '        <label for="stFirstName">ชื่อ นร:</label>\n' +
                '        <input type="text" name="st_first_name" id="stFirstName">\n' +
                '        <label for="stLastName">นามสกุล นร:</label>\n' +
                '        <input type="text" name="st_last_name" id="stLastName">\n' +
                '        </p>\n' +
                '    </div>');
            $("#st2").replaceWith('<div name="st2" id="st2">\n' +
                '        <p>\n' +
                '            <label for="Class2"> ชั้น:</label>\n' +
                '            <select name="Class2" id="Class2">\n' +
                '        <option value=" " selected >Select</option>' +
                '                <option value="อ.1">อ.1</option>\n' +
                '                <option value="อ.2">อ.2</option>\n' +
                '                <option value="อ.3">อ.3</option>\n' +
                '                <option value="ป.1">ป.1</option>\n' +
                '                <option value="ป.2">ป.2</option>\n' +
                '                <option value="ป.3">ป.3</option>\n' +
                '                <option value="ป.4">ป.4</option>\n' +
                '                <option value="ป.5">ป.5</option>\n' +
                '                <option value="ป.6">ป.6</option>\n' +
                '                <option value="ม.1">ม.1</option>\n' +
                '                <option value="ม.2">ม.2</option>\n' +
                '                <option value="ม.3">ม.3</option>\n' +
                '                <option value="ม.4">ม.4</option>\n' +
                '                <option value="ม.5">ม.5</option>\n' +
                '                <option value="ม.6">ม.6</option>\n' +
                '            </select>\n' +
                '            <label for="stFirstName2">ชื่อ นร:</label>\n' +
                '            <input type="text" name="st_first_name2" id="stFirstName2">\n' +
                '            <label for="stLastName2">นามสกุล นร:</label>\n' +
                '            <input type="text" name="st_last_name2" id="stLastName2">\n' +
                '        </p>\n' +
                '    </div>');
            $("#st3").replaceWith('<div name="st3" id="st3">\n' +
                '        <p>\n' +
                '            <label for="Class3"> ชั้น:</label>\n' +
                '            <select name="Class3" id="Class3">\n' +
                '        <option value=" " selected >Select</option>' +
                '                <option value="อ.1">อ.1</option>\n' +
                '                <option value="อ.2">อ.2</option>\n' +
                '                <option value="อ.3">อ.3</option>\n' +
                '                <option value="ป.1">ป.1</option>\n' +
                '                <option value="ป.2">ป.2</option>\n' +
                '                <option value="ป.3">ป.3</option>\n' +
                '                <option value="ป.4">ป.4</option>\n' +
                '                <option value="ป.5">ป.5</option>\n' +
                '                <option value="ป.6">ป.6</option>\n' +
                '                <option value="ม.1">ม.1</option>\n' +
                '                <option value="ม.2">ม.2</option>\n' +
                '                <option value="ม.3">ม.3</option>\n' +
                '                <option value="ม.4">ม.4</option>\n' +
                '                <option value="ม.5">ม.5</option>\n' +
                '                <option value="ม.6">ม.6</option>\n' +
                '            </select>\n' +
                '            <label for="stFirstName3">ชื่อ นร:</label>\n' +
                '            <input type="text" name="st_first_name3" id="stFirstName3">\n' +
                '            <label for="stLastName3">นามสกุล นร:</label>\n' +
                '            <input type="text" name="st_last_name3" id="stLastName3">\n' +
                '        </p>\n' +
                '    </div>');
        }
    };

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




