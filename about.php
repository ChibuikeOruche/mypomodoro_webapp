<!doctype html>
<html manifest='offline.appcache'>
 <head> 
  <title> myPomodoro</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
  <meta name='keywords' content='pomodoro, time management, effectiveness, focus, discipline'>
	<meta name='theme-color' content='orange'/>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name='apple-mobile-web-app-status-bar-style' content='black'/>
	<meta name='apple-mobile-web-app-title' content='myPomodoro'/>
	<meta name='mobile-web-app-capable' content='yes' />
	
	
<link rel='manifest' href='pomodoro.json'/> <!-- manifest file location -->
<link rel="apple-touch-icon" sizes='57*57' type="image/png" href="./images/pomodoro_icon.png" /> 
<link rel="apple-touch-icon" sizes='114*114' type="image/png" href="./img/pomodoro_icon.png" /> 
<link rel="apple-touch-icon" sizes='80*80' type="image/png" href="./img/pomodoro_icon.png" />
<link rel="apple-touch-icon" sizes='72*72' type="image/png" href="./img/pomodoro_icon.png" />
<link rel="apple-touch-icon-precomposed" sizes='android-only' type="image/png" href="./img/pomodoro_icon.png" />

	
<link rel="stylesheet" href="jquery.mobile-1.4.5.min.css">
<script src="jquery.min.js"></script>
<script src="style.js"></script>
<script src='indexed.js'></script>
<script src="jquery.mobile-1.4.5.min.js"></script>

<style> 
#about_wrap{
	margin:auto;
	border:2px solid orange;
	padding:5px;
	border-radius:20px;
	margin-top:19px;
}

#about_wrap em{
	padding-left:8px;
	font-family:Helvetica;
}

#back{
	border-radius:20px;
	padding:2px;
	margin-top:6px;
}

a{
text-decoration:none;
}

</style>

</head>

<body>
	
<div data-role='page'>

<div data-role='header' data-position='fixed'>
		<a id='back' href='index.html'>Home</a>
		<h1> myPomodoro <img style='transform: rotate(45deg); border-radius:100%; margin-top:0; ' width='15' height='10' src='./img/pomodoro.jpg'></h1>
</div>

<div data-role='content'>

<div id='about_wrap'>
	<h3 align='center'> myPomodoro</h3>
	<p> 
	<em> Based on the pomodoro technique, this app is meant to assist in increasing efficiency, time management and effectiveness.
			You have a time limit of 25 minutes for any task you choose. If task is not completed you can reset timer and continue. Each 25 minutes is one pomodoro. Be more effective. Try buzzing with pomodoro.</em>
	</p>

<p> For feedbacks: <a href='mailto:oruchegoodluck@gmail.com'> reach the developer </a> </p>
	</div>


</div>
 </body>
</html>
