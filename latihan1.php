	<strong>MALAYSIA STATES: </strong>
	<ul>
	   <?php
	   $states = array("Selangor", "Johor", "Negeri Sembilan", "Melaka", "Perak", "Perlis", "Kelantan", "Terengganu", "Pulau Pinang", "Pahang", "Sabah", "Sarawak", "Kuala Lumpur", "Labuan", "Putrajaya");

	$ibunegeri = array("ShahAlam", "Johor Bahru", "Negeri Sembilan", "Melaka", "Perak", "Perlis", "Kelantan", "Terengganu", "Pulau Pinang", "Pahang", "Sabah", "Sarawak", "Kuala Lumpur", "Labuan", "Putrajaya");

	$shortname = array("SGR", "JDT", "Negeri Sembilan", "Melaka", "Perak", "Perlis", "Kelantan", "Terengganu", "Pulau Pinang", "Pahang", "Sabah", "Sarawak", "Kuala Lumpur", "Labuan", "Putrajaya");


	echo "<table border='1' cellspacing='0' cellpadding='0'>";
	echo "<tr><td width=100px align=center><strong>State Name</strong></td><td width=100px align=center><strong>Ibu Negeri</strong></td><td width=100px align=center><strong>Short Name</strong></td></tr>";

	 $num = 0;
	   do{
	   	echo "<table border='1' cellspacing='0' cellpadding='0'>";
	   	if ($states[$num]=="Johor")

	       echo "<tr><td width=100px align=center><strong>".$states[$num] ."</strong></td><td width=100px align=center><strong>".$ibunegeri[$num] ."</strong></td><td width=100px align=center><strong>".$shortname[$num] ."</strong></td></tr>";
	   else  
	   	echo "<tr><td width=100px align=center>".$states[$num] ."</td><td width=100px align=center>".$ibunegeri[$num] ."</td><td width=100px align=center>".$shortname[$num] ."</td></tr>";

	       $num++;
	   }while($num <= 13);
	   echo"</table>";
	   ?>
	<hr/>
	<strong>BOLD</strong>State is the state you're living in



	  

