<!DOCTYPE html>
<html>
<body>
<?php
$today = date("D");
switch($today){
    case "Mon":
       
        
    case "Tue":
        echo "Far From Week End";
		break;
    case "Wed":
        
    case "Thu":
        echo "Approching Week End";
        break;
    case "Fri":
        echo "Tommarow is Week End.";
        break;
    case "Sat":
        
    case "Sun":
        echo "It's A Week End.";
        break;
    default:
        echo "No information available for that day.";
        break;
}
?>
 
</body>
</html>
