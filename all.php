<?php
@$login = $_POST["login"];
@$senha = $_POST["senha"];

if($senha != ""){
	$senhaa = md5($senha);
	$senhab = sha1($senha);
	$senhac = base64_encode($senha);
	$senhad = base64_decode($senha);
	
	echo "Sua senha &eacute;: $senha, MD5: $senhaa SHA1: $senhab BASE64: $senhac BASE64-DECODIFICADO: $senhad";
}
?>

<!doctype html public "-/w3v//dtd xhtml 1.0 Transitional//en" "http://www.w3.org/TR/xhtml1/">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Hash no PHP::</title>
</head>

<body>
	<form action="" method="post">
		<input type="text" name="login" />
		<input type="password" name="senha" />
		<input type="submit" />
	</form:
</body>
</html>
