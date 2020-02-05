<?php

function FormatDateTime($timestamp, $modo, $orario) {
 /* VALORI DI MODO
    1 = 12/08/2002 (default)
	2 = 12 agosto 2002
	3 = Lunedi, 12 agosto 2002
	4 = Lunedi, 12/08/2002
    5 = 08/12/2002
	6 = 12 august 2002
	7 = Monday, 12 august 2002
	8 = Monday, 08/12/2002
   VALORI DI ORARIO
    0 = NO ORARIO
    1 = MODO + 12:33:45
    2 = MODO + 12:33
    3 = MODO + 00:33
    4 = MODO + 00:33 AM o PM 
    5 = MODO + 00:33 am o pm */
 switch($modo) {
  case 1 : $newdata=date("d/m/Y",$timestamp);
  		   break;
  case 2 : setlocale(LC_TIME,"it");
   		   $newdata=strftime("%d %B %Y",$timestamp);
  		   break;
  case 3 : setlocale(LC_TIME,"it");
   		   $newdata=strftime("%A, %d %B %Y",$timestamp);
  		   break;
  case 4 : setlocale(LC_TIME,"it");
   		   $newdata=strftime("%A, %d/%m/%Y",$timestamp);
  		   break;
  case 5 : $newdata=date("m/d/Y",$timestamp);
  		   break;
  case 6 : setlocale(LC_TIME,"uk");
   		   $newdata=strftime("%d %B %Y",$timestamp);
  		   break;
  case 7 : setlocale(LC_TIME,"uk");
   		   $newdata=strftime("%A, %d %B %Y",$timestamp);
  		   break;
  case 8 : setlocale(LC_TIME,"uk");
   		   $newdata=strftime("%A, %m/%d/%Y",$timestamp);
  		   break;
  default: $newdata=date("d/m/Y",$timestamp);
  		   break;
 }
 switch($orario) {
  case 0 : $newdata=$newdata;
  		   break;
  case 1 : $newdata.=date(" H:m:s",$timestamp);
  		   break;
  case 2 : $newdata.=date(" H:m",$timestamp);
  		   break;
  case 3 : $newdata.=date(" h:m:s",$timestamp);
  		   break;
  case 4 : $newdata.=date(" h:m:s A",$timestamp);
  		   break;
  case 5 : $newdata.=date(" h:m:s a",$timestamp);
  		   break;
 }
 return $newdata;
}


function logo($titolo) {

$timestamp=time();
$modo="2";
$orario="1";
$data=FormatDateTime($timestamp, $modo, $orario);

$head = "<table border=0 summary=logo width=100%'>
                <td width=100><img src=../images/logo.png  border=0 height=100/></td>
                <td align=center width=1000><h1>$titolo</h1></td>
                <td width=400><h3 align=center>$data</h3></td>
        </table>";
print $head;
}



?>
