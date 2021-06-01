<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <style>
        @import "style.CSS";

        html {
            width: 100%;
            min-height: 100%;
        }
        body{
            margin: 25px;
        }
        .button .buttontext {
            visibility: hidden;
            width: 240px;
            border-color: #898989;
            background-color: white;
            color: red;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .button:hover .buttontext {
            visibility: visible;
        }
        div.back{

            width: 100%;
        }
        label{
            font-size: xx-large;
        }

        input,select{
            position: center;
            height: 100px;
            width: 100%;
            font-size: xx-large;
        }
    </style>
</head>

<body>
<form name="input" action="insert.php" method="post">
    <p>
        <label for="Type">ตำแหน่ง:</label>
        <select name="Type" id="Type">
            <option value="ผู้ปกครอง" name="Parent">ผู้ปกครอง</option>
            <option value="ครู" name="Teacher">ครู</option>
        </select><br><br>
        <label for="plateNumber">เลขทะเบียน:</label>
        <input type="text" name="LPN" id="plateNumber" maxlength="7" size="7" oninput="inputCheck()" placeholder="*1กข1234"><br><br>
        <label for="pro">จังหวัด:</label>
        <select name="province" id="pro" oninput="inputCheck()">
            <option value="" selected >*Select</option>
            <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
            <option value="กระบี่">กระบี่ </option>
            <option value="กาญจนบุรี">กาญจนบุรี </option>
            <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
            <option value="กำแพงเพชร">กำแพงเพชร </option>
            <option value="ขอนแก่น">ขอนแก่น</option>
            <option value="จันทบุรี">จันทบุรี</option>
            <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
            <option value="ชัยนาท">ชัยนาท </option>
            <option value="ชัยภูมิ">ชัยภูมิ </option>
            <option value="ชุมพร">ชุมพร </option>
            <option value="ชลบุรี">ชลบุรี </option>
            <option value="เชียงใหม่">เชียงใหม่ </option>
            <option value="เชียงราย">เชียงราย </option>
            <option value="ตรัง">ตรัง </option>
            <option value="ตราด">ตราด </option>
            <option value="ตาก">ตาก </option>
            <option value="นครนายก">นครนายก </option>
            <option value="นครปฐม">นครปฐม </option>
            <option value="นครพนม">นครพนม </option>
            <option value="นครราชสีมา">นครราชสีมา </option>
            <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
            <option value="นครสวรรค์">นครสวรรค์ </option>
            <option value="นราธิวาส">นราธิวาส </option>
            <option value="น่าน">น่าน </option>
            <option value="นนทบุรี">นนทบุรี </option>
            <option value="บึงกาฬ">บึงกาฬ</option>
            <option value="บุรีรัมย์">บุรีรัมย์</option>
            <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
            <option value="ปทุมธานี">ปทุมธานี </option>
            <option value="ปราจีนบุรี">ปราจีนบุรี </option>
            <option value="ปัตตานี">ปัตตานี </option>
            <option value="พะเยา">พะเยา </option>
            <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
            <option value="พังงา">พังงา </option>
            <option value="พิจิตร">พิจิตร </option>
            <option value="พิษณุโลก">พิษณุโลก </option>
            <option value="เพชรบุรี">เพชรบุรี </option>
            <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
            <option value="แพร่">แพร่ </option>
            <option value="พัทลุง">พัทลุง </option>
            <option value="ภูเก็ต">ภูเก็ต </option>
            <option value="มหาสารคาม">มหาสารคาม </option>
            <option value="มุกดาหาร">มุกดาหาร </option>
            <option value="แม่อ่องสอน">แม่อ่องสอน </option>
            <option value="ยโสธร">ยโสธร </option>
            <option value="ยะลา">ยะลา </option>
            <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
            <option value="ระนอง">ระนอง </option>
            <option value="ระยอง">ระยอง </option>
            <option value="ราชบุรี">ราชบุรี</option>
            <option value="ลพบุรี">ลพบุรี </option>
            <option value="ลำปาง">ลำปาง </option>
            <option value="ลำพูน">ลำพูน </option>
            <option value="เลย">เลย </option>
            <option value="ศรีสะเกษ">ศรีสะเกษ</option>
            <option value="สกลนคร">สกลนคร</option>
            <option value="สงขลา">สงขลา </option>
            <option value="สมุทรสาคร">สมุทรสาคร </option>
            <option value="สมุทรปราการ">สมุทรปราการ </option>
            <option value="สมุทรสงคราม">สมุทรสงคราม </option>
            <option value="สระแก้ว">สระแก้ว </option>
            <option value="สระบุรี">สระบุรี </option>
            <option value="สิงห์บุรี">สิงห์บุรี </option>
            <option value="สุโขทัย">สุโขทัย </option>
            <option value="สุพรรณบุรี">สุพรรณบุรี </option>
            <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
            <option value="สุรินทร์">สุรินทร์ </option>
            <option value="สตูล">สตูล </option>
            <option value="หนองคาย">หนองคาย </option>
            <option value="หนองบัวลำภู">หนองบัวลำภู </option>
            <option value="อำนาจเจริญ">อำนาจเจริญ </option>
            <option value="อุดรธานี">อุดรธานี </option>
            <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
            <option value="อุทัยธานี">อุทัยธานี </option>
            <option value="อุบลราชธานี">อุบลราชธานี</option>
            <option value="อ่างทอง">อ่างทอง </option>
        </select><br><br>
        <label for="firstName">ชื่อ:</label>
        <input type="text" name="first_name" id="firstName" oninput="inputCheck()"placeholder="*"><br><br>
        <label for="lastName">นามสกุล:</label>
        <input type="text" name="last_name" id="lastName" oninput="inputCheck()" placeholder="*"><br><br>
        <label for="telephoneNumber">หมายเลขโทรศัพท์:</label>
        <input type="text" name="tel_num" id="telephoneNumber" minlength="10" maxlength="10" size="10" oninput="inputCheck()" placeholder="*0123456789"><br><br>
    </p>

</body>
<script>
    function inputCheck(){
        var proEmp = document.forms['input']['province'].value;
        var fnEmp = document.forms['input']['first_name'].value.length;
        var lnEmp = document.forms['input']['last_name'].value.length;
        var telEmp = document.forms['input']['tel_num'].value.length;
        lpnSplitCheck();
        //console.log(lpnEmp , proEmp , fnEmp , lnEmp ,telEmp);
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
        var x = ""+0+"";
        for (i = lpnSplit.length; i < 7; i++) {
            lpnSplit.push(null);
        }
        //if (lpnSplit.length >= 3){}
        console.log(lpnSplit);
        //console.log(lpnSplit[1]);
        var lenA = Boolean(lpnSplit[0].length >= 1);
        var intA = Number.isInteger(parseInt(lpnSplit[0]));
        var resultB = Number.isInteger(parseInt(lpnSplit[1]));
        var resultC = Number.isInteger(parseInt(lpnSplit[2]));

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

        console.log(!intA , !resultB , resultC , resultD , resultE , resultF);
        //console.log(intA , !resultB , !resultC , empD , resultE , resultF , resultG);
        console.log("emplist",lpnSplit[6] ,empD , empE ,empF ,empG);
        if (resultC) {

            if (!intA && !resultB && resultC && resultD && resultE && resultF&&empG){
                    console.log(lenA, !resultB, resultC, resultD, resultE, resultF, empG);
                    console.log("YES!");
                    var lpnEmp = true;
            }else {var lpnEmp = false;}

        } else {

            if (intA && !resultB && !resultC && intD && resultE && resultF && resultG) {
                console.log(lenA, !resultB, resultC, intD, resultE, resultF, resultG);
                console.log("YES!");
                var lpnEmp = true;
            }else {var lpnEmp = false;}

        }
    }

</script>
</html>