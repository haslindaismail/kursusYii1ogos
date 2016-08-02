<?php 
class Training{

function getuser($username,$usertype){
	if ($usertype=="user") {
		return "selamat datang ".$username.". Jenis user ialah User";
	}
	else{
		return "selmat datang ".$username.". Jenis user ialah Admin";
	}
}

function getCGPA($cgpa){
$nama="aziey";
$course="science comp";

if($cgpa==4.0){
	$grade="high destinction";
}
elseif ($cgpa >= 3.33 && $cgpa <= 3.99) {
	$grade="destinction";
}
elseif ($cgpa >= 2.67 && $cgpa <= 3.32) {
	$grade="credit";
}
elseif ($cgpa >= 2.00 && $cgpa <= 2.66) {
	$grade="pass";
}
elseif ($cgpa <= 1.99) {
	$grade="failed";
}
else{
	$grade=null;
}


if($grade==null){
	echo "sila masukkan CGPA yg betul";
}
else{
	echo "selamat datang ".$nama.". u hv enroll ".$course.". Based on your CGPA (".$cgpa."), your grade is ".$grade;
}

}

function calculateGST($item1,$item2,$gst,$service){
	$grandtotal = ($item1+$item2)+(($item1+$item2)*($gst+$service));
	return $grandtotal;
}

}

$train = new Training;
echo $train->getuser("aziey","user").'<br/>';
echo $train->getCGPA(4).'<br/>';
echo $train->calculateGST(325.60,545.40,0.06,0.10);


 ?>