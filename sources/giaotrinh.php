
<?php

if (!defined('_source'))
  die("Error");

  $breakcrumb='<li><a href="http://'.$config_url.'">'._trangchu.'</a></li><li class="active"> Giáo trình</li>';
  $d->reset();
  $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo, h3 as link from #_about where type='giang-vien-danh-gia'";
  $d->query($sql);
  $rs_danhgia=$d->result_array();

  $d->reset();
  $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo, h3 as link from #_about where type='bo-sach'";
  $d->query($sql);
  $rs_bosach=$d->result_array();

  $d->reset();
  $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo, h3 as link from #_about where type='tay-nghe'";
  $d->query($sql);
  $rs_taynghe=$d->result_array();

  $d->reset();
  $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota,noidung_$lang as noidung, photo, h3 as link from #_about where type='book'";
  $d->query($sql);
  $rs_book=$d->result_array();

  $d->reset();
  $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo, h3 as link from #_about where type='faq'";
  $d->query($sql);
  $rs_faq=$d->result_array();




  if (!empty($_POST)) {
    if($_SESSION['captcha_code']==$_POST["capt"]){
      include_once _lib . "C_email.php";
      $data['ten'] = $_POST['ten'];
      $data['diachi'] = $_POST['diachi'];
      $data['dienthoai'] = $_POST['dienthoai'];
      $data['email'] = $_POST['email'];
      $data['tieude'] = $_POST['tieude1'];
      $data['noidung'] = $_POST['noidung'];
      $data['ngaytao'] = time();
      $data['view'] = 0;

      $d->reset();
      $d->setTable('contact');
          $d->insert($data);

      $subject = "Thư liên hệ từ " . $row_setting['title'];
      $body = '<table>';
      $body .= '
            <tr>
              <th colspan="2">&nbsp;</th>
            </tr>
            <tr>
              <th colspan="2">Thư liên hệ từ website ' . $row_setting['website'] . '</th>
            </tr>
            <tr>
              <th colspan="2">&nbsp;</th>
            </tr>
            <tr>
              <th>Họ tên :</th><td>' . $_POST['ten'] . '</td>
            </tr>';
            if($_POST['diachi']!=''){
            $body.='<tr>
              <th>Địa chỉ :</th><td>' . $_POST['diachi'] . '</td>
            </tr>';}
            $body.='<tr>
              <th>Điện thoại :</th><td>' . $_POST['dienthoai'] . '</td>
            </tr>
            <tr>
              <th>Email :</th><td>' . $_POST['email'] . '</td>
            </tr>';
            if($_POST['tieude1']!=''){
            $body.='<tr>
              <th>Tiêu đề :</th><td>' . $_POST['tieude1'] . '</td>
            </tr>';
            }
            $body.='<tr>
              <th>Nội dung :</th><td>' . $_POST['noidung'] . '</td>
            </tr>';
      $body .= '</table>';

      include_once "phpmailer/class.phpmailer.php";
      //Khởi tạo đối tượng
      $mail = new PHPMailer();
      
      //Thiet lap thong tin nguoi gui va email nguoi gui
      $mail->IsSMTP(); // Gọi đến class xử lý SMTP
      $mail->SMTPAuth = true;                  // Sử dụng đăng nhập vào account
      $mail->Host = $iphost;     // Thiết lập thông tin của SMPT
      $mail->Username = $userhost; // SMTP account username
      $mail->Password = $passhost;            // SMTP account password
      $mail->SetFrom($userhost, $row_setting['title_vi']);
      //Thiết lập thông tin người nhận
      $mail->AddAddress($userhost, $_POST['hoten']);

      //Thiết lập email nhận email hồi đáp
      //nếu người nhận nhấn nút Reply
      $mail->AddReplyTo($userhost, $row_setting['title_vi']);


      /* =====================================
      * THIET LAP NOI DUNG EMAIL
      * ===================================== */

      //Thiết lập tiêu đề
      $mail->Subject = "Thông tin liên hệ";

      //Thiết lập định dạng font chữ
      $mail->CharSet = "utf-8";

      $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";

      //Thiết lập nội dung chính của email
      $mail->MsgHTML($body);

      if (!$mail->Send()) {
        transfer("Có lỗi xảy ra!", "index.html");
      } else {

        transfer("Gửi liên hệ thành công!<br/>", "index.html");
      }
    }else{
      transfer("Sai mã bảo vệ, vui lòng thử lại lần nữa !", "index.html");
    }
  }

?>