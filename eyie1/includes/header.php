<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Embrace Your Inner Engineer: web development and other things</title>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">  
    <link href="eyie/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
 
<!--Bootstrap CSS-->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="styles/bootstrap.min.css">-->
<!--Custom CSS-->
    <link rel="stylesheet" href="eyie/styles/main.css"> 
<!--jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write("<script src='scripts/jquery-1.11.3.min.js'><\/script>")</script>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
<!-- Angular factory-->
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>

    <script>window.angular || document.write("<script src='scripts/angular.min.js'><\/script>")</script>

    <script src="https://code.angularjs.org/1.5.0/angular-route.min.js"></script>
 
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9212371505546321",
    enable_page_level_ads: true
  });
</script>
 
<!--More JS files in the footer-->

</head>
<body>
    <header>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" id="navTitle" href="/">Embrace Your Inner Engineer</a>
                
                    <button class='navbar-toggle' data-toggle="collapse" data-target=".navbar-collapse">
                        <span class='sr-only'>Nav list</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                
                <?php $topics = [ 
				   //array('title' => 'About', 'include' => 'about.php'),
				   array('title' => 'Computers', 'include' => 'languages.php'),
				   array('title' => 'Waves','include' => 'waves.php'),
				   array('title' => 'Unicode','include' => 'unicode.php'),
				   array('title' => 'Time','include' => 'time.php'),
				   array('title' => 'Space', 'include' => 'solar.html'),
				   array('title' => 'History','include' => 'timeline.html'),
				   
				   ];

   for($i = 0; $i < count($topics); $i++) {
      echo"<li><a href=\"index.php?inc={$topics[$i]['include']}\">{$topics[$i]['title']}</a></li>";
      }   
?>                
           </ul>
          </div>
         </div>
        </nav>
    </header>