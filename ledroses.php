<?php

$serial = new phpSerial();
$serial->deviceSet("/dev/cu.usbmodem1411");
$serial->deviceOpen();


if ($_GET['action'] == "submitOn") {
    
    @serial->sendMessage("1/r");
}
if ($_GET['action'] == "submitOn1") {
    
    @serial->sendMessage("2/r");
}
if ($_GET['action'] == "submitOn2") {
    
    @serial->sendMessage("3/r");
}
else if($_GET['action'] == "submitOff") {
    
    @serial->sendMessage("4/r");
}

$serial ->deviceClose();


?>
<html>

<head>
</head>


<body>
<h1>LED ROSE COLOUR</h1>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
		<input type='submit' name='submitOn' value='Turn RED LED ON'>
        <br>
        <input type='submit' name='submitOn1' value='Turn GREEN LED ON'>
        <br>
        <input type='submit' name='submitOn2' value='Turn BLUE LED ON'>
        <br>
        
        <input type='submit' name='submitOff' value='Turn Off LED ROSE'>
    
    </form>
    
</body>    



</html>


