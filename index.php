<?php 
if(!empty($_POST)) {
 $db = new PDO('mysql:host=localhost;dbname=vk;charset=utf8', 'root', '');
 $res = $db->query('insert into users (email, login, pass, date) values ("' . $_POST['email'] . '", "' . $_POST['login'] . '", "' . $_POST['pass'] . '","' . $_POST['date'] . '")');
 $thankYouMessage = $_POST['login'] . ', thank you for registration';
}
?>
<?php echo "hello"
?>
<html>
<head>
<title>����� �����������</title>
 <style> 
   body {
    background: url(Vanessa-Hudgens-Smile-Wallpaper-1200x1920.jpg);
	background-size: 1500px, 1200px;
       } 
  </style>
</head>
<body text="#00BFFF" bgcolor="#ffffff">
<br>
<?php if(isset($thankYouMessage)) { echo '<h2>' . $thankYouMessage . '</h2>'; } ?>
<h1 align="center">�����������<h1>
 <font size="+2">������� ������</font>
 <form method="post">
  <font size="3">���� ���</font>
 <input type="text" name="login"><Br>
<font size="3">���� ���� ��������</font>
 <input type="text" name="date"><Br>
<font size="3">��� e-mail</font>
 <input type="text" name="email"><Br>
<font size="3">������</font>
 <input type="password" name="pass"><Br>
 <input type="submit" value="���������">
    </form>
	</body>
</html>