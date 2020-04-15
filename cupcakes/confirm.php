<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require('validation.php');
$name="";
$isValid=True;
if(validName($_POST['name'])) {
    $name = $_POST['name'];
}else{
    echo "<p>name is required.</p>";
    $isValid=false;
}
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
    echo "";
}else{
    echo "Choose one flavor at least";
    $isValid=false;
}
if($isValid==true) {
    echo "Thank you $name, for your order. </br> ";
    echo "Order summary:";
    echo "</br>";
    foreach ($_POST['check_list'] as $selected) {
        echo $selected . "</br>";
    }
}
$checked_arr = $_POST['check_list'];
$count = count($checked_arr);
$price=$count * 3.5;
echo "Order Total: $price";
//if(isset($_POST['submit'])){//to run PHP script on submit

//}

