<?
include("./require.php");
$d = $mysql->one_row("SELECT * FROM wz_ba_sup WHERE first_password =''");


if (!empty($d)){
$tenba =$d['ba_name'];
$sodienthoai =$d['phone'];
$matkhau = rand (100000,999999)	;
$email_ba = $d['email'];

$mysql->query("UPDATE wz_ba_sup set first_password='".$matkhau."', `password` = '".md5($matkhau)."' WHERE id=".$d['id']);


	if (!empty($email_ba)){
		require_once('./smtp/class.phpmailer.php');
		require_once('./smtp/class.smtp.php');
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = "in-v3.mailjet.com";
		$mail->Port = 587;
		$mail->Username = "6d733c3d4223e7bb5967378b7bc07f6c";
		$mail->Password = "c0d05f3bc798e9ed0051d30a88216bc4";
		$mail->CharSet = 'UTF-8';
		$mail->SetFrom('bat@fff.com.vn', 'BAT SYSTEM');
		$mail->Subject = "Thông tin đăng nhập để xem report & quản lý OT + Event của hệ thống BAT - SYSTEM";
		echo $body = "
		Chào ".$tenba.", <br>
		 
		Dưới đây là thông tin đăng nhập vào hệ thống online report & quản lý OT + Event  của BAT - SYSTEM của bạn.<br>
		Truy cập đường link tại: http://125.212.217.61 <br>
		Tài khoản: ".$email_ba." <br>
		Mật khẩu: ".$matkhau." <br>
	
		<strong>Lưu ý</strong><br>
		- Vui lòng không chia sẻ thông tin đăng nhập này cho người khác <br>
		- Mọi thắc mắc cần hỗ trợ vui lòng gọi: <strong>0167 647 4607</strong> <br>
		
		";
		$mail->MsgHTML($body);
		//get email khach hang

		$mail->addAddress($email_ba, $tenba);
		$mail->send();
	}
echo "<meta http-equiv=\"refresh\" content=\"0;URL='sup.php'\" /> ";
}else echo "Hoàn tất";
?>