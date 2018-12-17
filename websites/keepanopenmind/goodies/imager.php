<?php 
$hotel = "open";
if($_GET['do'] == "gen"){ 
    $username = $_POST['name']; 
     
    $direction = $_POST['direction']; // 3-10  
    $action = $_POST['action']; // wlk, wav, std,  
    $head = $_POST['head']; // 3-10 
    $size = $_POST['size']; // s, l 
     
    if($hotel == "force"){ 
        $fp = @file_get_contents("http://forcehotel.com/api_access.php?api=avatar&user=" . $username . "&direction=" . $direction . "&action=" . $action . "&head_direction=" . $head . "&gesture=" . $gesture . "&size=" . $size);  
    } else if($hotel == "open"){ 
        $fp = @file_get_contents("http://openhabbo.com/api_access.php?api=avatar&user=" . $username . "&direction=" . $direction . "&action=" . $action . "&head_direction=" . $head . "&gesture=" . $gesture . "&size=" . $size);  
    } else { 
        echo "Invalid hotel selected!"; 
    } 
     
    $userImage = $fp; 
}  


if(strlen($userImage) > 0){ 
?>
<br /><img src="<?php echo $userImage ?>" border="0" /><br />
<?php 
} 
?> 
<center>
<form action="?do=gen" method="POST"> 
    Name:<br /><input type="text" name="name" /><br /> 
    Body Direction:<br /> 
    <select name="direction"> 
        <option value="3">3</option> 
        <option value="4">4</option> 
        <option value="5">5</option> 
        <option value="6">6</option> 
        <option value="7">7</option> 
        <option value="8">8</option> 
        <option value="9">9</option> 
        <option value="10">10</option> 
    </select> 
    <br /> 
    Head Direction:<br /> 
    <select name="head"> 
        <option value="3">3</option> 
        <option value="4">4</option> 
        <option value="5">5</option> 
        <option value="6">6</option> 
        <option value="7">7</option> 
        <option value="8">8</option> 
        <option value="9">9</option> 
        <option value="10">10</option> 
    </select> 
    <br /> 
    Action:<br /> 
    <select name="action"> 
            <option value="std">None</option> 
        <option value="wav">Wave</option> 
        <option value="wlk">Walk</option> 
        <option value="sit">Sit</option> 
        <option value="lay">Lay down</option> 
        <option value="drk=1">Drinking</option> 
        <option value="crr=1">Hold drink (blue)</option> 
        <option value="none">---</option> 
        <option value="crr=2">Hold: Carrot</option> 
        <option value="crr=3">Hold: Ice</option> 
        <option value="crr=5">Hold: Cola</option> 
        <option value="crr=6">Hold: Coffee</option> 
        <option value="crr=9">Hold: Pink potion</option> 
        <option value="crr=33">Hold: Calippo icecream</option> 
        <option value="crr=42">Hold: Japanese tea</option> 
        <option value="crr=43">Hold: red glass</option> 
        <option value="crr=44">Hold: green glass</option> 
        <option value="crr=667">Hold: Bubbles</option> 
        <option value="none">---</option> 
        <option value="drk=2">Eat: Carrot</option> 
        <option value="drk=3">Eat: Ice</option> 
        <option value="drk=33">Eat: Calippo icecream</option> 
        <option value="drk=5">Drink: Cola</option> 
        <option value="drk=6">Drink: Coffee</option> 
        <option value="drk=9">Drink: Pink potion</option> 
        <option value="drk=42">Drink: Japanese tea</option> 
        <option value="drk=43">Drink: red glass</option> 
        <option value="drk=44">Drink: green glass</option> 
        <option value="drk=667">Drink: Bubbles</option> 
    </select> 
    <br /> 
    Gesture:<br /> 
    <select name="gesture"> 
<option value="std">None</option> 
        <option value="sml">Smile</option> 
        <option value="sad">Sad</option> 
        <option value="spk">Speak</option> 
        <option value="eyb">Eyes closed</option> 
        <option value="agr">Angry</option> 
        <option value="srp">Surprised</option> 
    </select> 
    <br /> 
    Avatar Size:<br /> 
    <select name="size"> 
        <option value="l">Standard / Large</option> 
        <option value="s">Small</option> 
    </select> 
    <br /> 
    <input type="submit" name="Generate!" /> 
</form>
</center>