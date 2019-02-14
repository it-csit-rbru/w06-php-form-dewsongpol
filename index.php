<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>ระบบการเสนอ</h1>
    <form action="project_data.php" method="get">
        <fieldset id="sect1">
        <legend>ส่วนที่1</legend>
        <label>รหัสนักศึกษา</label><input type="text" name="sid">
        <label>ชื่อ</label><input type="text" name="fname">
        <label>นามสกุล</label><input type="text" name="laname"><br>
        <label for="program">สาขา</label>
        <select name="program">
            <option value="1">คอมพิวเตอร์ศึกษา</option>
            <option value="1">ภาษาไทย</option>
            <option value="1">วิทยาการ</option>
            <option value="1">วิทยาการ</option>
            <option value="1">วิทยาการ</option>
        </select> 
        <label for="faculty">คณะ</label>
        <select name="faculty">
            <option value="วิทยาการ">วิทยาการ</option>
            <option value="ครุศาสตร์">ครุศาสตร์</option>
            <option value="วิทยาการ">วิทยาการ</option>
            <option value="วิทยาการ">วิทยาการ</option>
            <option value="วิทยาการ">วิทยาการ</option>
        </select> 
        <label for="std_year">ชั้นปี</label>
        <input type="radio" name="std_year" value="1"><label>ปี 1</label>
        <input type="radio" name="std_year" value="2"><label>ปี 2</label>
        <input type="radio" name="std_year" value="3"><label>ปี 3</label>
        <input type="radio" name="std_year" value=""><label>ปี 4</label>
        <input type="radio" name="std_year" value="5"><label>ปี 5</label>
        </fieldset>
        <fieldset id="sect2">
        <legend>ส่วนที่2</legend>
        <label for="prj_name_th">ชื่อโครงาน(ไทย)</label><textarea name="prj_name_th"></textarea><br>
        <label for="prj_name_en">ชื่อโครงงาน(อังกฤษ)</label><textarea name="prj_name_en"></textarea><br>
        
        <label for="prj_type">ประเภทโครงงาน</label>
        <select name="prj_type">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
         </select> <br>
        
        <label >เครื่องมื่อที่ใช้</label>
        <input type="checkbox" name="prj_tool[]" value="html"><label>html</label>
        <input type="checkbox" name="prj_tool[]" value="css"><label>css</label>
        <input type="checkbox" name="prj_tool[]" value="javascript"><label>javascript</label>
        <input type="checkbox" name="prj_tool[]" value="php"><label>php</label>
        <input type="checkbox" name="prj_tool[]" value="bootstrap"><label>bootstrap</label>
        <input type="checkbox" name="prj_tool[]" value="material design"><label>material design</label>
        <input type="checkbox" name="prj_tool[]" value="angular"><label>angular</label>
        <input type="checkbox" name="prj_tool[]" value="react"><label>react</label>
        <input type="checkbox" name="prj_tool[]" value="mysql"><label>mysql</label>
        <input type="checkbox" name="prj_tool[]" value="chartjs"><label>chartjs</label><br>
        <label>อาจารย์ที่ปรึกษา</label>
        <select name="prj_advisor">
        <option value="ผศ.บุญเรือน พฤกษ์ศศิธร">ผศ.บุญเรือน พฤกษ์ศศิธร</option>
        <option value="ผศ.ทิพย์วรรณ ฟูเฟื่อง">ผศ.ทิพย์วรรณ ฟูเฟื่อง</option>
        </select>
        </fieldset>
        <input type="submit" value="go...">
    </form>
</body>
</html>