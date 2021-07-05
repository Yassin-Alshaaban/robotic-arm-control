<?php
// إستقبال البيانات القادمة من السلايدرات في صفحة index.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$v1 = $_POST["motor1"];
$v2 = $_POST["motor2"];
$v3 = $_POST["motor3"];
$v4 = $_POST["motor4"];
$v5 = $_POST["motor5"];
$v6 = $_POST["motor6"];
}

// معلومات الإتصال بقاعدة البيانات

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myform";

// إنشاء الإتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);
// إختبار الإتصال
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
#قم بتحديث البيانات في جدول المحركات في الخلية ذات المعرف 1 بقيمة المتغير للمحرك الأول
$update = "update mytable set value= '$v1' where id=1";

#تحقق من تحديث البيانات بنجاح 
if (mysqli_query($conn, $update)) {
echo "تم  ";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

#قم بتحديث البيانات في جدول المحركات في الخلية ذات المعرف 2 بقيمة المتغير للمحرك الثاني
$update2 = "update mytable set value= '$v2' where id=2";
if (mysqli_query($conn, $update2)) {
echo " إرسال ";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

#قم بتحديث البيانات في جدول المحركات في الخلية ذات المعرف 3 بقيمة المتغير للمحرك الثالث
$update3 = "update mytable set value= '$v3' where id=3";
if (mysqli_query($conn, $update3)) {
echo "المعلومات  ";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

#قم بتحديث البيانات في جدول المحركات في الخلية ذات المعرف 4 بقيمة المتغير للمحرك الرابع
$update4 = "update mytable set value= '$v4' where id=4";
if (mysqli_query($conn, $update4)) {
echo " بنجاح";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

#قم بتحديث البيانات في جدول المحركات في الخلية ذات المعرف 5 بقيمة المتغير للمحرك الخامس 
$update5 = "update mytable set value= '$v5' where id=5";
if (mysqli_query($conn, $update5)) {
echo " وتم تحديث &nbsp;";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

#قم بتحديث البيانات في جدول المحركات في الخلية ذات المعرف 6 بقيمة المتغير للمحرك الخامس
$update6 = "update mytable set value= '$v6' where id=6";
if (mysqli_query($conn, $update6)) {
echo "البيانات ";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
# إنهاء الاتصال بقاعدة البيانات

?>