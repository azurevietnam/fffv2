<?
include("./require.php");
$d = $mysql->one_row("SELECT * FROM wz_ba WHERE first_password =''");


if (!empty($d)){
$tenba =$d['ba_name'];
$sodienthoai =$d['phone'];
$matkhau = rand (100000,999999)	;
$email_ba = $d['email'];

$mysql->query("UPDATE wz_ba set first_password='".$matkhau."', `password` = '".md5($matkhau)."' WHERE id=".$d['id']);

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
		$mail->Subject = "Thông tin tài khoản đăng nhập ứng dụng BAT - SYSTEM";
		echo $body = "
		Chào ".$tenba.", <br>
		 
		Thông tin đăng nhập ứng dụng Quản Lý Nhân Viên Bán Hàng: <br>
		Số điện thoại: ".$sodienthoai." <br>
		Mật khẩu: ".$matkhau." <br>
		 
		Vui lòng sử dụng thông tin được cung cấp để đăng nhập vào ứng dụng trên máy điện thoại của bạn. <br>
		 
		<strong>Lưu ý:</strong><br>
		- Không được sử đụng thông tin của bạn để đăng nhập trên máy khác.  <br>
		- Không được chia sẻ thông tin của bạn cho người khác nếu không có sự đồng ý của SUP. <br>
		- Mọi thắc mắc cần hỗ trợ vui lòng gọi: 0167 647 4607 <br>
		<br>
		<br>
		";
		$mail->MsgHTML($body);
		//get email khach hang

		$mail->addAddress($email_ba, $tenba);
		$mail->send();
	}
echo "<meta http-equiv=\"refresh\" content=\"0;URL='email.php'\" /> ";
}else echo "Hoàn tất";
?>