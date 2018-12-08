<div class="container">
<div id="TimeZoneDescription">
 <h1>Time and Time Zones</h1>
 <p class="lead">Computers tell time by counting seconds (milliseconds, actually). Some time in the 1970s, someone decided that January 1st, 1970 at Midnight (in the Greenwich Time Zone) was a good point to start the clock. So every millisecond after that time can be represented by a unique number. 
 <p>So for example: 
<ul class="list-unstyled well">
<li>Midnight on January 1st, 1970 (GMT) is represented by the number 0.
<li>One second after midnight on that day is represented by the number 1000 (the number of milliseconds in a second).
<li> 12:01 AM January 1st, 1970 (one minute later) is represented by the number: 60,000 (1 minute x 60 seconds x 1000 milliseconds).
<li>1:00 AM January 1st, 1970 is represented by the number: 3,600,000 (60 minutes x 60 x 1000).
<li>Midnight January 2nd, 1970 is represented by the number: 86,400,000 (24 hours x 60 x 60 x 1000).
<li> Midnight January 1st, 1971 is represented by the number:  31,557,600,000.
<!--<li> The time this pages was last loaded (<script>var d=new Date();document.write(d.toLocaleString())</script>) is represented by the number: <script>
var d = new Date();
document.write(d.getTime().toLocaleString());
</script>-->
</ul>
 <p>This allows computers to make complicated calculations without you having to do the math. So if you wanted to find the number of seconds from now until Christmas, 
 you don't have to add up the seconds in each minute and each minutes in a each hour or figure out how many days in each month, the computer can simply convert the dates into it's corresponding millisecond, subtract the two numbers, and recalculates it.
 That may seem like a lot of busy work, but computers are good at that, and they do it very fast.
 <p>Computers are useful for figuring out time zones as well. Below the map is a chart using JavaScript to calculate the current time and date in each time zone.
    
</div>
<div class="image"><img src="img/timezoneMap.jpg"></div>

<div id="TimezoneTable"></div>
<div class=columnLeft>* indicates that the region or country is currently observing daylight savings (summer) time.<br><br>
Image from <a href="http://en.wikipedia.org/wiki/Daylight_saving_time_by_country">wikimedia commons </a>. Blue indicates daylight saving observed in northern hemisphere summer (around April to October). Orange indicates daylight saving observed in southern hemisphere summer (around November to March).</div>
<div class=columnRight><img style="width:100%;" src="img/DST_Countries_Map.png"></div>
</div>