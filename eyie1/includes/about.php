
<div class="jumbotron">  
   <div class="container">                                           
    <!--<h2 id="title_in_boxes">
       <div id='s'>s</div>
       <div id='p'>p</div>
       <div id='y'>y</div>
       <div id='r'>r</div>
       <div id='o'>o</div>
       <div id='y2'>Y</div>
       <div id='a'>a</div>
       <div id='k'>k</div>
    </h2>-->
    <p>"Nothing is too wonderful to be true, if it be consistent with the laws of nature" - Michael Faraday
</p>
    </div> 
</div> 


<div class="container">
<h3>This site's mission is to make complicated things fun and easier to learn, awaken a sense of wonder in everyone, and encourage others to embrace their inner engineer. </h3>
<p> This Web site contains some interesting and maybe useful articles about web development, Internet issues, computers, robots, and other scientific topics. </p>

<p>The "Life" and "Sky" pages retrieve data from a database via a JSON file using Angular JS. Angular is powerful tool that allows you to use front-end web technology and AJAX to pull data from a database or a file on the server (the "back-end") and put it on a HTML template.</p>
<p>The "Unicode" and "Time" pages retrieve data from your computer's operating system.</p>
<p>For more information about me, see my <a href="http://www.linkedin.com/pub/dan-mulvihill/4/565/4a4">linked-in profile</a>.</p>
<div id="PHP">
	<h4>Some interesting things you probably don't care about:</h4>
	<p>My server is located in 
	<?php $def=date_default_timezone_get();
	echo "$def "; 

	$now=date("g:i:s A");
	echo "where the time is currently $now<br>";
	date_default_timezone_set("UTC");
	$def=date_default_timezone_get();
	$now=date("l, F jS, g:i:s A");
	echo 'Current date/time in Greenwich, England: '.$now.'<br>';

	$timestamp=time();
	echo "Number of seconds since January 1st, 1970:<span style=\"color:green\"> $timestamp</span> <br>";
	echo "Number of seconds until the end of the Unix Epoch: <span style=\"color:red\">";
	echo 2147483648-$timestamp;
	echo "</span>. <br><strong>Don't say you haven't been warned!</strong></p>";
    /*
	echo '<p>For this page, I am using PHP version '.PHP_VERSION;
	echo ' running on '.PHP_OS.'</p>';
    */
	?>
</div>
</div>