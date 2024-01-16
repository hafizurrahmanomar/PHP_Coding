
<?php

/*PHP Conditional Statements*/

// if ,else statement executes
$age=12;

if($age>=18){
    print(" He is adult ");

}else{ 
    print"He is not adult.";
}
print"<br/>";
   
// ========if,elseif, else statement executes =======================

   $age=19;

    if($age>=90){
        echo "Old person";

    }
elseif($age<40){
   echo "Young";

}

elseif($age<20){
    echo "Boy";

}
else{
    echo "Child";
}
// ============if,elseif, else statement executes ===================
print"<br/>";
   

$color="Green";

if($color=="Blue")
    print("Color is:Blue");
if ($color=="Red") 
    print"Color is :Red";
else 
    print" Color Not define";

print "<br/>";

// =============switch statement executes ============
$color = "Blue";

switch($color){
    case "Green":
        echo "This color is :Green";
        break;
    case "Blue":
        echo "This color is :Blue";
        break;
     case "Red":
        echo "This color is :Red";
        break;
    case "Yellow":
        echo "This color is :Yellow";
    default:
        echo "Not specify color define";

}

/* PHP loop*/ 
// =======while loop========================


$n_counter=0;
while($n_counter<=10){
    print "This count number:$n_counter.<br/>";
    $n_counter++;
}
// ==========do loop===================
$num=0;

do{
    print "This number:$num.<br/>";
    $num++;
}while($num<=10);


// ======for =====



for($ticket=1;$ticket<=30;$ticket++) {

    print "This ticket number:$ticket.<br/>";


}

// ======foreach loop=======

$person = array(
   "Hafiz" => 56,
   "Toha" => 6,
   "keya" => 16,
   "nayeem" => 16,
);

foreach($person as $key => $value){

    print "Name: $key Age: $value <br/>";
}

?>
