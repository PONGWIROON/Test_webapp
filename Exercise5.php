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
function test($n) {
    return $n % 3 == 0 || $n % 7 == 0;
}

// ทดสอบฟังก์ชัน test และแสดงผลลัพธ์ด้วย var_dump
var_dump(test(3));  // ควรได้ true เนื่องจาก 3 เป็นพหุคูณของ 3
var_dump(test(14)); // ควรได้ true เนื่องจาก 14 เป็นพหุคูณของ 7
var_dump(test(12)); // ควรได้ true เนื่องจาก 12 เป็นพหุคูณของ 3
var_dump(test(37)); // ควรได้ false เนื่องจาก 37 ไม่เป็นพหุคูณของ 3 หรือ 7
?>

</body>
</html>