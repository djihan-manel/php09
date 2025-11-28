<?php
$result = "";
if(isset($_POST['calc'])){
    $exp = $_POST['expr'];
    $exp = str_replace(["×","÷"], ["*","/"], $exp);
    if(preg_match('/[^0-9+\-*/().]/', $exp)) $result="خطأ!";
    else{
        try{ $result = eval("return $exp;"); } catch(Exception $e){ $result="خطأ!"; }
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>آلة حاسبة بسيطة</h2>
<form method="post">
    <input type="text" name="expr" placeholder="مثال: 2+3*4">
    <button name="calc">احسب</button>
</form>
<?php if($result!=="") echo "<p>النتيجة: $result</p>"; ?>
</body>
</html>
