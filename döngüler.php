<?php 

$sehirler = array("kütahya","eskisehir","ankara");

$i = 0;  
$a = 0;
$b =0;
while ($i < count($sehirler)) 
{

   print_r($sehirler[$a]);
   echo "<br / >";
   $a++;
   $i++;
}
echo "<br / >";

for($i = 0; $i < count($sehirler); $i++)
{

echo $sehirler[$b];
$b++;
echo "<br / >";
}


echo "<br / >";
do 
{
	  
	print_r($sehirler);
   $i++;
   echo $a ."\n";     
}while($i<count($sehirler)-1);

 echo "<br / >";
foreach( $sehirler as $s ) 
{

   echo $s.'<br />';
}
 
?>