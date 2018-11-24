<?php 
include('header.php');

?>

<html>
<head>
<title>Beifall-グローバルビジネス＆テクノロジーコンサルティング</title>
<link rel="image_src" href="BLogo_4.png"/>
<META name=description content="Synagen is a global business providing, international business consulting, IT development, 
and state-of-the-art software and technology solutions to all types of business and industry.
Synagen can assist with software development, web design, business analysis or consulting, cloud computing and much more.">
<META name=keywords content="software,software-development,call-logging-software,Consulting,IT,IT consulting,Website Development,IT-Support,
software-design, cloud-computing, cloud-application, cloud-software, hosting, website-hosting, cloud-hosting, IT-management,
technology-consulting, technology-support, training, translation, international-business, business-consulting, mobile-website,
CRM, CMS, drupal, owncloud, calltaker, LMS, joomla, moodle, prestashop, google-g-suite, microsoft-365">
<META name="robots" content="index,follow">
<META property="og:image" content="http://www.Synagenit.com/Synagen_logo_big.png"/>
<meta property=”og:url” content="http://www.Synagenit.com"/>
<meta property=”og:description” content="Synagen expertise covers a range of IT areas. 
Synagen can assist with software development, web design, business analysis or consulting, cloud computing and much more."/>
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

<div class="container-fluid bg-grey">
<h1>お問合せ:</h1>
<h3>営業:</h3>
<p>スミス　ステイーブン<br>
<a href="mailto:s.smith@beifallglobal.com">s.smith@beifallglobal.com</a><br>
070 3960 0009</p>
<h3>一般:</h3>
<form  name=form method="post" action="contact.php" accept-charset="UTF-8">
   <div class="form-group">
    <label for="first_name">名:</label>
    <input type="text" class="form-control" id="first_name" name="first_name">
  </div>
    <div class="form-group">
    <label for="last_name">姓:</label>
    <input type="text" class="form-control" id="last_name" name="last_name">
  </div>
  <div class="form-group">
    <label for="email">メールアドレッス:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
   <div class="form-group">
  <label for="sel1">件名:</label>
  <select class="form-control" id="sell" name="sel1">
    <option value="Subject">件名</option>
	<option value="General">一般</option>
	<option value="Support">サポート</option>
    <option value="International">国際ビジネス</option>
    <option value="IT">ITソリューション</option>
    <option value="Software">ソフトウェアとアプリケーション</option>
	<option value="cloud">Beifallクラウド</option>
  </select>
</div>
   <div class="form-group">
  <label for="comment">メッセージ:</label>
  <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
</div>
  <button id="submit" type="submit" name="submit" class="btn btn-lg btn-success">送信</button>
</form>
</div>

</body>

</html> 