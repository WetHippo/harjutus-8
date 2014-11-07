<!DOCTYPE HTML!>
<html>
<head>
	<title>harjutus - 8 kont. strukt. funkt.</title>
	<meta charset="UTF-8">
</head>
<body>
	<h2>Funktsioon "continue"</h2>
	<?php
for ($number = 1; $number <= 10; $number++) {
    if ($number == 5) {
        continue;
    }
    echo $number . ", ";
}
?>
<h2>Funktsioon "break"</h2>
	<?php
for ($number = 1; $number <= 10; $number++) {
    if ($number == 6) {
        break;
    }
    echo $number . ", ";
}
?>
</body>
</html>