<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="/fw_twitter_bbs/webroot/style.css" />
<title>ひとこと掲示板</title>
</head>

<body>
<div id="wrap">
	<div id="head">
		<h1>ひとこと掲示板</h1>
	</div>

  	<?php
      include('./views/' . $this->resource . '/' . $this->action . '.php');
  	?>
	<div id="foot">
		<p><img src="/fw_twitter_bbs/webroot/images/txt_copyright.png" width="136" 	height="15" alt="(C) H2O SPACE, Mynavi" /></p>
	</div>
</div>
</body>
</html>