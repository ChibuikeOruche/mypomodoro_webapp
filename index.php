<!doctype html>
<html manifest='offline.appcache'>
 <head> 
  <title> myPomodoro</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
  <meta name='keywords' content=' pomodoro, time management, effectiveness, focus, discipline '>
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


<!-- customised style here -->

<style> 
#timer_container{
	border:4px solid orange;
	margin:auto;
	margin-top:10px;
	border-radius:12px;	
	width:250px;
	height:150px;
}

#timer_title{
	font-weight:bold;
  border-radius:12px; 
	padding:3px; 
	margin:auto; 
	background:#f1f1f1;
	margin-top:12px;

}

#details{
	border-radius:12px; 
	margin:auto; 
	background:#f1f1f1;
	margin-top:25px;
	width:250px;
	height:50px;
	overflow:scroll;
}

#details p{
padding:5px;
font-style:italic;
font-weight:bold;
padding-left:10px;
font-family:Helvetica, Arial,sans-serif,serif;	
}

#time{
	font-size:80px;
	color:blue;
	padding: 28px 28px 0 28px;
	margin:auto;
}

#status{
	margin:auto auto auto 38%;	
	padding:3px;
	border-radius:12px;
	background:#fff;
	box-shadow:1px 1px 2px #000;
}

	</style>

</head>
 
<body> 

<div id='main' data-role='page'>
	<div data-role='header' data-position='fixed'>
		<h1> <a id='see_about' href='about.php'>myPomodoro </a> <img style='transform: rotate(45deg); border-radius:100%; margin-top:0; ' width='15' height='10' src='./img/pomodoro.jpg'></h1>
	</div>
	
	<div data-role='content'> 
	
		<div data-role='navbar'> 
		<ul>
		<li> <a href='#add_act' > Add New Activity </a></li>
		</ul>
		</div>
		
		<audio id='aud' src='./sounds/Buzz.ogg'></audio>
		
		<h4 id='timer_title' > TIMER </h4>
		<div id='timer_container'> 
			<p id='time'> 25:00 </p>
			<b id='status'> Waiting</b>
		</div> <!-- Timer Container Closed -->
		
		<div id='details'> 
			<p> Get things done more effectively by using the pomodoro technique.
					Set a Task. Finish the task. Become effective.
					<b> Pomodoro®</b>
			 </p>
			</div>
		
		<div style='margin:auto; margin-top:19px; ' align='center'> 
		<img id='pomo_img' src='./img/pomodoro_view.jpg' height='70' width='70'/>
		</div>
	</div>	<!-- Content Tag Closed -->

	<div data-role='footer' data-position='fixed' >
		<div data-role='navbar'>
	<ul>
	<li> <a href='#' id='start_t' onclick='start();' > Start </a></li>
	<li> <a href='#' onclick='reset()'> Reset </a> </li>
	</ul>
		
		</div>
	</div>
	
	</div> <!-- close page--> 
	
<div id='add_act' data-role='page'> 
	
	<div data-role='header' data-position='fixed'>
	 <a href='#main'>Home</a>
		<h1> POMODORO <img style='transform: rotate(45deg); border-radius:100%; margin-top:0; ' width='15' height='10' src='./img/pomodoro.jpg'></h1>
		
	</div>
	
	<div data-role='content'> 
		
		<label> <b>Your Pomodoro Activity. Make as concise as possble </b></label>
					<textarea autofocus id='act_box' placeholder='One activity for the next 25 minutes'> </textarea>
					<button id='add_act_btn'> Add Activity </button>
			</div>
		
	</div>	<!-- Content Tag Closed -->
			
	</div> <!--Page details closed-->
 </body>
</html>
