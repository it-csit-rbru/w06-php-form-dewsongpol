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
    <?php
  

    $get_sid            = $_GET["sid"]; echo " รหัสนักศึกษา : $get_sid<br>";
    $get_fname          = $_GET["fname"]; echo "ชื่อ : $get_fname<br>";
    $get_laname         = $_GET["laname"]; echo "นามสุล : $get_laname<br>";
    $get_program        = $_GET["program"]; echo "สาขา : $get_program<br>";
    $get_faculty        = $_GET["faculty"]; echo "คณะ : $get_faculty<br>";
    $get_std_year       = $_GET["std_year"]; echo "ชั้นปี : $get_std_year<br>";
    $prj_name_th        = $_GET["prj_name_th"]; echo "ชื่อโครงาน(ไทย) : $prj_name_th<br>";
    $prj_name_en        = $_GET["prj_name_en"]; echo "ชื่อโครงาน(อังกฤษ) : $prj_name_en<br>";
    $prj_type           = $_GET["prj_type"]; echo "ประเภทโครงงาน : $prj_type<br>";
    $prj_tool           = $_GET["prj_tool"];
    $prj_tool_list           = implode(",",$prj_tool);
    echo    "เครื่องมือ : $prj_tool_list<br>";
    $prj_advisor    = $_GET["prj_advisor"]; 
    echo "อาจารย์ที่ปรึกษา : $prj_advisor<br>";
 
   
    



    


    ?>
</body>
</html>