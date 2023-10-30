<?php

$nm = $_POST['name'];
$grd = $_POST['grd'];
$ot = $_POST['othours'];
$la = $_POST['loananount'];
$du = $_POST['dur'];
$b = 0;
$otr = 0;
$otam = 0;
$netsal = 0;

print "Emp Name = $nm <br><br>";

if ($grd == 'A')
{
    $b = 15000;
}

else if ($grd == 'B')
{
    $b = 25000;
}
else if ($grd == 'C')
{
    $b = 45000;
}

else{
    $b = 60000;
}

print "Emp Grade = $grd<br><br>";
print "Basic =$b <br> <br>";


if ($grd == 'A')
{
    $otr = 100;
}

else if ($grd == 'B')
{
    $otr = 150;
}
else if ($grd == 'C')
{
    $otr = 200;
}

else{
    $otr = 300;
}

print "OT Rate =$otr<br><br>";

print "OT Hours =$ot<br><br>";

$otam = $otr * $ot;
print "OT Amonunt = $otam<br><br>";
print "Loan Amount = $la<br><br>";
print "Loan Duration = $du Months<br><br>";

$inter =$la*$du*10/100;
print "Loan Interest = $inter<br><br>";

$mp = $b-$inter;

print "Monthly Payment = $mp<br><br>";

$netsal = $mp + $otam;

print "Net Salary =$netsal<br><br>";

?>
