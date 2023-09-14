<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// กำหนดฟังก์ชัน test
function test($temp1, $temp2) {
    return ($temp1 < 0 && $temp2 > 100) || ($temp2 < 0 && $temp1 > 100);
}

// ทดสอบฟังก์ชัน test และแสดงผลลัพธ์ด้วย var_dump
var_dump(test(120, -1));  // ควรได้ true เนื่องจาก $temp1 > 100 และ $temp2 < 0
var_dump(test(-1, 120));  // ควรได้ true เนื่องจาก $temp1 < 0 และ $temp2 > 100
var_dump(test(2, 120));   // ควรได้ false เนื่องจากไม่เข้าเงื่อนไขที่กำหนด
?>

</body>
</html>