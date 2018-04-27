<?php


$usb_Port ="/dev/cu.usbmodem1411";

switch($_POST)
    
{
      case isset($_POST['submitOn']):
			exec("ECHO 1 > $usb_Port"); // Turn On RED
			break; 
        
    case isset($_POST['submitOn1']):
			exec("ECHO 2 > $usb_Port"); // Turn On GREEN
			break;  
        
    case isset($_POST['submitOn2']):
			exec("ECHO 3 > $usb_Port"); // Turn On BLUE
			break;   
     case isset($_POST['submitOff']):
			exec("ECHO 4 > $usb_Port"); // Turn On BLUE
			break;       
}
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

