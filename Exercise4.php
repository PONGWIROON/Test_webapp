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
function test($s) {
    $ctr_aa = 0;
    $i = 0;
    while ($i < (strlen($s) - 1)) {
        if (substr($s, $i, 2) == "aa") {
            $ctr_aa++;
            $i++; // เลื่อนตัวชี้ไปข้างหน้าเพื่อไม่นับ "aa" ซ้ำ
        }
        $i++;
    }
    return $ctr_aa;
}

// ทดสอบฟังก์ชัน test และแสดงผลลัพธ์ด้วย echo
echo test("bbaaccaag") . "\n";   // ควรได้ 2 (ครั้งที่ 1: "aa", ครั้งที่ 2: "aa")
echo test("jjkiaaasew") . "\n";  // ควรได้ 1 (ครั้งที่ 1: "aa")
echo test("Jsaaakoiaa") . "\n"; // ควรได้ 2 (ครั้งที่ 1: "aa", ครั้งที่ 2: "aa")
?>

</body>
</html>