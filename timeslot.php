<? php
$conn = mysqli_connect("localhost","root","","login") 
			or die("cannot connected");

$startTime = '10:00:00';
$endTime   = '10:30:00';
$Dname="Akash"

$rs = mysql_query( "SELECT * FROM `tslot` WHERE  'Dname'='$Dname' AND `stime` >= '$startTime' and `etime` < '$endTime' ORDER BY `time` " );

$okToUse = true;
while ( $rw = mysql_fetch_assoc( $rs ) ) {
     if ( $rw['status'] == 'Busy' ) {
          $okToUse = false;
          break;
     }
}

if ( $okToUse ) {
     // A continuous block exists from the start time to the end time
     //
     echo "OK";
}
else
     echo "Not ok";
     
     ?>