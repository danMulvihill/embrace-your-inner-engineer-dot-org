//heading graphics (now in the about page only)
$(document).ready(function(){
  //$('#s').effect('slide');
  $('#p').fadeOut(1000).fadeIn(5000);
//$('#y').effect('bounce',{times:3},500);
  $('#r').fadeOut(10000).fadeIn(2000).fadeOut(3000).fadeIn(4000);
//$('#o').effect('bounce',{times:7},2000);
//$('#y2').effect('bounce',{times:3},500);
//$('#a').effect('bounce',{times:20},1000);
  $('#k').fadeOut(10).fadeIn(2000).fadeOut(5000).fadeIn(10000);
  $( "#y2,#a,#k" ).click(function() { $( this ).fadeOut(); });
  $( "#k" ).click(function() { $( "#s,#p,#y,#r,#o" ).fadeIn(5000); });
  $( "#y" ).click(function() { $( this ).effect('bounce',{times:20},5000); });
  $( "#s" ).click(function() { $('#k').fadeIn(500); });
//$( "#p,#a" ).mouseover(function() { $( this ).effect('bounce',{times:3},1000); });
  $( "#y" ).click(function() { $('#y2').fadeIn(5000); });
  $("#o").click(function(){ $("#a").fadeIn(1000); });
  $( "#r" ).click(function() { $("#s,#p,#y,#o").fadeToggle(3000,"swing"); });
  $( "#p" ).click(function() { $("#r").fadeOut(); });  
  });


//unicode scripts:

function hex2Decimal( hex ){
    return parseInt("0x"+hex);
}

function decimal2Hex( num ){
    return num.toString(16);
}

function displayChars(ord,start,end){
	"use strict"
    document.getElementById("buttons").style.display="none";
    document.getElementById("aboutUnicode").style.display="none";
    var out = "<br><h3 style='margin:0'> "+document.getElementsByTagName('button')[ord+1].textContent+" </h3>";
    //print subheading with ranges:
    out+="(Unicode characters <span class=hexIndex>"+decimal2Hex(start)+"</span>";
    out+="<span class=charIndex>["+start+"]</span> to <span class=hexIndex>"+decimal2Hex(end)+"</span>";
    out+="<span class=charIndex>["+end+"]</span>)<br>";
    //return button:
    out+="<button class='btn btn-info' style=\"float:right;\">Return to Menu</button><br>"
    //top guide:
    out+="<div><span class='hexIndex'>Hex </span><span class='charIndex'>[Dec] </span><span class='chars'>Char</span><br></div>";
    out+="<p>";
	for (var i=start, j=1;i<=end;i++,j++){
        if (j==17){
			j=1;
			out+="</p><p >";
        }
		out+="<span class=hexIndex>"+decimal2Hex(i)+"</span>";
        out+=" <span class=charIndex>["+i+"]</span>";
        out+=" <span class=\"chars\">&#"+i+";</span>"+"<br>";
	}
	out +="</p>";
	var output=document.getElementById("unicodeOutput");
	output.innerHTML=out;
}

function closeIt(){ 
    document.getElementById("unicodeOutput").innerHTML="";
    document.getElementById("buttons").style.display="block";
    document.getElementById("aboutUnicode").style.display="block";
}

function openSec(sec){
	document.getElementById('west').style.display='none';
	document.getElementById('east').style.display='none';
    document.getElementById('abjabs').style.display='none';
	document.getElementById('brahmi').style.display='none';
    
	document.getElementById('other').style.display='none';
	document.getElementById('dingbats').style.display='none';
	document.getElementById('cjk').style.display='none';
	document.getElementById('cjk2').style.display='none';
    document.getElementById('all').style.display='none';
	document.getElementById(sec).style.display='block';
    //document.getElementById('unicodeOutput').style.display="none";
}



//time zone scripts:

function calcTime(offset){
	var d=new Date();
	var hereday=d.getDate();
	var utc=d.getTime()+(d.getTimezoneOffset()*60000);
	var nd=new Date(utc+(3600000*offset));
	var newday=nd.getDate();
	var thehour=nd.getHours();
	var theday;
	
	//prints the current date for the timezone the user is located in, otherwise calculates today, tomorrow or yesterday for other time zones
	if (d.getHours()==thehour&&d.getMinutes()==nd.getMinutes()) theday="<span style='color:green'>"+(nd.getMonth()+1)+"/"+nd.getDate()+"/"+nd.getFullYear()+"</span>";
	else if(newday==hereday) theday="Today";
	else if (hereday>newday) theday="Yesterday";
	else theday="Tomorrow"
	
	var ap;
	if (nd.getHours()>=12) ap="PM";
	else ap="AM";
	if(thehour>12) thehour=thehour-12; 
	if(thehour==0) thehour=12; 
	
	var thisdate=theday+" "+nd.getHours()+":";
	if (nd.getMinutes()<10) thisdate+="0";
	thisdate+=nd.getMinutes()+" or "+thehour+":";
	if (nd.getMinutes()<10) thisdate+=0;
	thisdate+=nd.getMinutes()+"&nbsp;"+ap;
	return thisdate;
}


window.addEventListener("load", makeTimeznTable)

function makeTimeznTable(){
	//window.setTimeout(function(){ document.location.reload(true); }, 60000);
	var locations=[
		[["Christmas Islands"],"+14"],
		[[],"+13.75"],
		[["Tonga"],"+13"],
		[["Chatham Islands"],"12.75"],
		[["New Zealand", "Fiji", "Magadan, Russia"],"+12"],
		[["Norfolk Island"],"+11.5"],
		[["Vanuatu", "Solomon Islands", "Vladivostok"],"+11"],
		[["Lord Howe Island"],"+10.5"],
		[["Sydney, Australia", "Papua New Guinea"],"+10"],
		[["Darwin, Australia", "Adelaide, Australia"],"+9.5"],
		[["Japan", "Korea", "Palau"], "+9"],
		[["Lake Baikal","China","Malaysia", "Perth, Australia"], "+8"],
		[["Jakarta, Indonesia", "Thailand", "Cambodia","Vietnam"],"+7"],
		[["Burma", "Cocos Islands"],"+6.5"],
		[["Bangladesh", "Bhutan", "Astana, Kazakhstan"],"+6"],
		[["Nepal"],"+5.75"],
		[["India"],"+5.5"],
		[["Maldives", "Pakistan", "Uzbekistan", "Turkmenistan"], "+5"],
		[["Afghanistan"], "+4.5"],
		[["Moscow","Georgia", "Armenia", "Mauritius", "Oman"], "+4"],
		[["Iran"],"+3.5"],
		[["Belarus","Iraq","Ethiopia","Madagascar"],"+3"],
		[["Finland","Ukraine","Israel","South Africa"],"+2"],
		[["France","Germany","Poland", "Namibia","Nigeria","Algeria"],"+1"],
		[["U.K.","Portugal","Iceland","Mali","Ghana", "Liberia"], 0],
		[["Cape Verde", "Azores", "Scoresbysund, Greenland"], -1],
		[["South Georgia & South Sandwich Islands"],-2],
		[[],-2.5],
		[["Argentina","Uruguay","S&atilde;o Paulo, Brazil","Suriname"],-3],
		[["Newfoundland"],-3.5],
		[["Chile","Bolivia","Puerto Rico","New Brunswick"], -4],
		[["Venezuela"], "-4.5"],
		[["eastern North America","Cuba","Haiti","Peru","Colombia","Panama"],"-5"],
		[["Central North America", "most of Mexico","Central America","Saskatchewan"], "-6"],
		[["mountains of North America", "Arizona"], "-7"],
		[["west coast of North America","Pitcairn Islands"], "-8"],
		[["most of Alaska"],"-9"],
		[["Marquesas Islands"], "-9.5"],
		[["Hawaii","French Polynesia","Aleutian Islands"], -10],
		[["American Samoa", "Midway Atoll"], -11],
		[["Baker Islands","Howland Islands"], -12]
		]
	//change locations to account for Daylight Savings:
	var dc=new Date();
	if((dc.getMonth()>3||(dc.getMonth==3&&dc.getDate()>=22))&&(dc.getMonth()<9||(dc.getMonth==9&&dc.getDate()<=22))){
		 locations[18][0].unshift("Iran*");locations[20][0].splice(0,1);
                }
        if(dc.getMonth()>3&&(dc.getMonth()<9||(dc.getMonth()==9&&dc.getDate()<=25))){
		 locations[21][0].unshift("Finland*","Ukraine*","Israel*");locations[22][0].splice(0,3)
		 locations[22][0].unshift("France*","Germany*","Poland*");locations[23][0].splice(0,3);
		 locations[23][0].unshift("U.K.*","Portugal*");locations[24][0].splice(0,2);
                 
		 locations[24][0].unshift("Azores*","Scoresbysund, Greenland*");locations[25][0].splice(1,2);
                }
       if((dc.getMonth()>=2||(dc.getMonth()==3&&dc.getDate()>=8))&&(dc.getMonth()<10||(dc.getMonth==10&&dc.getDate()<=1))){
		 locations[27][0].unshift("Newfoundland*");locations[29][0].splice(0,1);
		 locations[28][0].unshift("New Brunswick*");locations[30][0].splice(3,1);
		 locations[30][0].unshift("eastern North America*","Cuba*","Haiti*");locations[32][0].splice(0,3);
		 locations[32][0].unshift("central North America*","most of Mexico*");locations[33][0].splice(0,2);
		 locations[33][0].unshift("North American mountains*");locations[34][0].splice(0,1);
		 locations[34][0].unshift("west coast of North America*");locations[35][0].splice(0,1);
		 locations[35][0].unshift("most of Alaska*");locations[36][0].splice(0,1);
		 locations[36][0].unshift("Aleutian Islands*");locations[38][0].splice(2,1);
		}
	if(dc.getMonth()<=3||dc.getMonth()>=8){
		 locations[1][0].unshift("Chatham Islands*");locations[3][0].splice(0,1)
		 locations[2][0].unshift("New Zealand*");locations[4][0].splice(0,1)
                 locations[5][0].unshift("Lord Howe Island*");locations[7][0].splice(0,1)
		 locations[6][0].unshift("Sydney, Australia*");locations[8][0].splice(0,1)
		 locations[7][0].unshift("Adelaide, Australia*");locations[5][0].splice(1,1)
		 locations[22][0].unshift("Namibia*");locations[23][0].splice(3,1)
                 }
        if(dc.getMonth()<=2||dc.getMonth()>=8){
		 locations[26][0].unshift("Uruguay*","S&atilde;o Paulo, Brazil*");locations[28][0].splice(1,2);
		 locations[28][0].unshift("Chile*");locations[30][0].splice(3,1);
		 
		}

	var timezones=["+14","+13","+12.75","+12","+11.5","+11","+10.5","+10"],
		table="<table><tr><th style='text-align:right'>Time<br>Zone</th><th style='text-align:center'>Current Day and Time</th><th>Some Locations in Time&nbsp;Zone</th></tr>";
	
	for (var i=0,loclen=locations.length-1;i<=loclen;i++){
		if (locations[i][0].length==0) continue;
		table+="<tr><td style='text-align:right'>";
		table+=locations[i][1];
		table+="</td><td style='text-align:center'>";
		table+=calcTime(locations[i][1]);
		table+="</td><td>";
		var j=0;
		while(j<=locations[i][0].length-1){
			//if(locations[i][0][j]==undefined){break;}
			if (j!=0) table+=" / ";
			table+=locations[i][0][j];
			j++;
			}
			//if(locations[i][0][j]) table+=" / <a href='#'> more</a>";
		
		table+="</td></tr>";
		

		//if (nd.getMonth()=>3&&nd.getMonth()=<9){
			//locations[i][0].push("Saskatchewan");
			//}
		
	}

	table+="</table>"
	var tt = document.getElementById("TimezoneTable");
	if (tt) tt.innerHTML=table;
	
}