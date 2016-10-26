<?php
 $setmode18 = shell_exec("/usr/local/bin/gpio -g mode 18 out");
 $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
 $setmode23 = shell_exec("/usr/local/bin/gpio -g mode 23 out");
 $setmode22 = shell_exec("/usr/local/bin/gpio -g mode 22 out");
if(isset($_REQUEST["grr"])){
exec("/var/www/html/grr.sh");
}

if(isset($_REQUEST["fart"])){
exec("/var/www/html/fart.sh");
}

if(isset($_REQUEST["red"])){
	shell_exec("/usr/local/bin/gpio -g write 18 1");	
}

if(isset($_REQUEST["redo"])){
	shell_exec("/usr/local/bin/gpio -g write 18 0");	
}

if(isset($_REQUEST["orange"])){
shell_exec("/usr/local/bin/gpio -g write 17 1");
}

if(isset($_REQUEST["orangeo"])){
shell_exec("/usr/local/bin/gpio -g write 17 0");
}

if(isset($_REQUEST["yellow"])){
shell_exec("/usr/local/bin/gpio -g write 23 1");
}

if(isset($_REQUEST["yellowo"])){
shell_exec("/usr/local/bin/gpio -g write 23 0");
}

if(isset($_REQUEST["green"])){
shell_exec("/usr/local/bin/gpio -g write 22 1");
}

if(isset($_REQUEST["greeno"])){
shell_exec("/usr/local/bin/gpio -g write 22 0");
}

if(isset($_REQUEST["off"])){
shell_exec("/usr/local/bin/gpio -g write 18 0");
shell_exec("/usr/local/bin/gpio -g write 17 0");
shell_exec("/usr/local/bin/gpio -g write 23 0");
shell_exec("/usr/local/bin/gpio -g write 22 0");
}

if(isset($_REQUEST["on"])){
shell_exec("/usr/local/bin/gpio -g write 18 1");
shell_exec("/usr/local/bin/gpio -g write 17 1");
shell_exec("/usr/local/bin/gpio -g write 23 1");
shell_exec("/usr/local/bin/gpio -g write 22 1");
}

if(isset($_REQUEST["flash"])){
shell_exec("/usr/local/bin/gpio -g write 18 1");
 sleep (1);
shell_exec("/usr/local/bin/gpio -g write 17 1");
 sleep (1);
shell_exec("/usr/local/bin/gpio -g write 23 1");
 sleep (1);
shell_exec("/usr/local/bin/gpio -g write 22 1");
 sleep (1);
shell_exec("/usr/local/bin/gpio -g write 18 0");
shell_exec("/usr/local/bin/gpio -g write 17 0");
shell_exec("/usr/local/bin/gpio -g write 23 0");
shell_exec("/usr/local/bin/gpio -g write 22 0");
 sleep (0.5);
shell_exec("/usr/local/bin/gpio -g write 18 1");
shell_exec("/usr/local/bin/gpio -g write 17 1");
shell_exec("/usr/local/bin/gpio -g write 23 1");
shell_exec("/usr/local/bin/gpio -g write 22 1");
sleep (0.5);
shell_exec("/usr/local/bin/gpio -g write 18 0");
shell_exec("/usr/local/bin/gpio -g write 17 0");
shell_exec("/usr/local/bin/gpio -g write 23 0");
shell_exec("/usr/local/bin/gpio -g write 22 0");
 sleep (0.5);
shell_exec("/usr/local/bin/gpio -g write 18 1");
shell_exec("/usr/local/bin/gpio -g write 17 1");
shell_exec("/usr/local/bin/gpio -g write 23 1");
shell_exec("/usr/local/bin/gpio -g write 22 1");
sleep (0.5);
shell_exec("/usr/local/bin/gpio -g write 18 0");
shell_exec("/usr/local/bin/gpio -g write 17 0");
shell_exec("/usr/local/bin/gpio -g write 23 0");
shell_exec("/usr/local/bin/gpio -g write 22 0");
 sleep (0.5);
shell_exec("/usr/local/bin/gpio -g write 18 1");
shell_exec("/usr/local/bin/gpio -g write 17 1");
shell_exec("/usr/local/bin/gpio -g write 23 1");
shell_exec("/usr/local/bin/gpio -g write 22 1");
sleep (0.5);
shell_exec("/usr/local/bin/gpio -g write 18 0");
shell_exec("/usr/local/bin/gpio -g write 17 0");
shell_exec("/usr/local/bin/gpio -g write 23 0");
shell_exec("/usr/local/bin/gpio -g write 22 0");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<style>
#container{
	text-align: center;
	}

.button{
	display: inline-block;
	padding: 10px;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<title>Pumkin Controls</title>
</head>
<body>
<div div="header" data-role="header" data-theme="b">
<h1>Pumkin Controls</h1>
</div>
<div id="container">
<div class="button" id="ghost" >
<form action="index.php" method="post">
		<input type="image" src="ghost.png" width="100px" />
			<input type="hidden" name="grr" />
              </form>
              </div>
              <div class="button" id="fart" >
<form action="index.php" method="post">
		<input type="image" src="fart.png" width="100px" />
			<input type="hidden" name="fart" />
              </form>
              </div>
              <div class="button" >
<form action="index.php" method="post">
		<input type="image" src="red.png" width="100px"/>
			<input type="hidden" name="red" />
              </form>
              <form action="index.php" method="post">
		<input type="image" src="redo.png" width="100px"/>
			<input type="hidden" name="redo" />
              </form>
              </div>
                            <div class="button" >
<form action="index.php" method="post">
		<input type="image" src="orange.png" width="100px"/>
			<input type="hidden" name="orange" />
              </form>
              <form action="index.php" method="post">
		<input type="image" src="orangeo.png" width="100px"/>
			<input type="hidden" name="orangeo" />
              </form>
              </div>
                            <div class="button" >
<form action="index.php" method="post">
		<input type="image" src="yellow.png" width="100px"/>
			<input type="hidden" name="yellow" />
              </form>
              <form action="index.php" method="post">
		<input type="image" src="yellowo.png" width="100px"/>
			<input type="hidden" name="yellowo" />
              </form>
              </div>
                            <div class="button" >
<form action="index.php" method="post">
		<input type="image" src="green.png" width="100px"/>
			<input type="hidden" name="green" />
              </form>
              <form action="index.php" method="post">
		<input type="image" src="greeno.png" width="100px"/>
			<input type="hidden" name="greeno" />
              </form>
              </div>
                                          <div class="button" >
<form action="index.php" method="post">
		<input type="image" src="off.png" width="100px"/>
			<input type="hidden" name="off" />
              </form>
              </div>
                                                        <div class="button" >
<form action="index.php" method="post">
		<input type="image" src="on.png" width="100px"/>
			<input type="hidden" name="on" />
              </form>
              </div>
              
                                                        <div class="button" >
<form action="index.php" method="post">
		<input type="image" src="flash.png" width="100px"/>
			<input type="hidden" name="flash" />
              </form>
              </div>
              
			  </div>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</body>
</html>

