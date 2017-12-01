<?php 
header('Content-type:text/html;charset=utf8');
/*$conn = @ mysql_connect("localhost", "root", "") or die("datebase can`t been connected");
mysql_select_db("danmu", $conn);
mysql_query("set names 'utf8'"); //


$sql="SELECT `danmu` FROM `danmu`";
$query=mysql_query($sql); 
//echo $danmu;
echo "[";
$first=0;
while($row=mysql_fetch_array($query)){
	if ($first) {
		echo ",";
		
	}
$first=1;
echo "'".$row['danmu']."'";
}
	echo "]";
*/
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$result = $redis->lRange('danmu_data',0,-1);
echo json_encode($result);

?>
