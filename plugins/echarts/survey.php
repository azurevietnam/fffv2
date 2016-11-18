<?
include("./require.php");
$survey = $mysql->loadarray("SELECT * FROM wz_no_order");
$ykien = array(
	"1" => "Khách hàng đang bận/ không muốn bị làm phiền",
	"2" => "Khách hàng đã thử trước đây và khôn thích. ",
	"3" => "Khách hàng không quen hút thuốc lạ",
	"4" => "Khách hàng đang bỏ thuốc",
	"5" => "Khác",
);
echo "<table>
	<tr>
		<th>No</th>
		<th>Reason<th>
		<th>Other Reason</th>
	</tr>
		";
$stt = 1;
foreach ($survey as $s){
	echo "<tr>
			<th>".$stt++."</th>
			<th>".$ykien[$s['reason']]."<th>
			<th>".$s['reason_string']."</th>
		</tr>";
}
echo "</table>";
?>