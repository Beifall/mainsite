<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
</head>

<body>

<?php 

if(isset($_POST['submit'])){
    $to = "support@beifallglobal.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['comment'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['comment'];
	
	$headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From:' . $from . "\r\n";
	
	$headers2 = "MIME-Version: 1.0" . "\r\n";
    $headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers2 .= 'From:' . $to . "\r\n";
	
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<div class="jumbotron-footer text-center">
<div class="container">
 <div class="row">
 <div class="col-sm-4">
 <ul class="list-group">
  <li class="list-group-item"><b>メニュー</b></li>
  <li class="list-group-item"><a href="#top">トップ</a></li>
  <li class="list-group-item"><a href="it.php">ITソリューション</a></li>
  <li class="list-group-item"><a href="intbus.php">国際ビジネス</a></li>
  <li class="list-group-item"><a href="apps.php">ソフトウェアとアプリケーション</a></li>
  <li class="list-group-item"><a href="contact.php">お問合せ</a></li>
  <li class="list-group-item dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-globe" style="font-size:20px"></i>
        言語 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../index.php" style="color:white;"><img src="../img/flag_en.png" width="25"> 英語</a></li>
		  <li><a href="index.php"  style="color:white;"><img src="../img/flag_jp.png" width="25"> 日本語</a></li>
        </ul>
      </li>
</ul>
</div>
  <div class="col-sm-3">
 <ul class="list-group">
  <li class="list-group-item"><b>サイト</b></li>
  <li class="list-group-item"><a href="features.php">プライバシー</a></li>
  <li class="list-group-item"><a href="features.php#security">規約と条件</a></li>
</ul>
</div>
  <div class="col-sm-5">
  <center>
   <ul class="list-group">
  <li class="list-group-item"><b>お問合せ:</b></li>
  </ul>
<form  name=form method="post" action="index.php">
   <div class="form-group">
    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="名">
  </div>
    <div class="form-group">
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="姓">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="email" name="email" placeholder="メールアドレッス">
  </div>
   <div class="form-group">
  <select class="form-control" id="sell" name="sel1">
    <option value="International">件名</option>
	<option value="International">一般</option>
	<option value="International">サポート</option>
    <option value="International">国際ビジネス</option>
    <option value="IT ">ITソリューション</option>
    <option value="Software">ソフトウェアとアプリケーション</option>
	<option value="International">Beifallクラウド</option>
  </select>
</div>
   <div class="form-group">
  <textarea class="form-control" rows="3" id="comment" name="comment" placeholder="メッセージ"></textarea>
</div>
  <button id="submit" type="submit" name="submit" class="btn btn-success">送信</button><br>
</form>
  </center>
 </div>
</div>
<div class="row">
 <div class="col-sm-12">
  <img src="../img/beifall_navbar.png" width="20%">
  <p>Website&#169; 2010 - 2017 Beifall. admin@beifallglobal.com All rights reserved</p><br>
  <i class="fa fa-facebook-official" style="font-size:36px; color:white;"></i>
  <i class="fa fa-google-plus" style="font-size:36px; color:white; padding-left:10px;"></i>
  <i class="fa fa-linkedin" style="font-size:36px; color:white; padding-left:10px;"></i>
  </div>
  </div>
  </div>
</div>

</body>

</html>