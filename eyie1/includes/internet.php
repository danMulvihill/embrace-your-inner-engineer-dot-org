<style>

</style>
<div id="internet" class="container">
  <h1>A Little Internet History to Explain the Tools of Web Development</h1>
	<h3>Communication</h3>
		<div class="row">
			<div class="col-sm-2">Remote Login</div>
			<div class="col-sm-10">
			  <p>There are many different events that led to the development of the Internet, but the one incident often regarded as
		it's birth was when a graduate student at UCLA logged in to a remote computer at UC-Berkeley on October 29, 1969.  <!--The equipment
		he used was not a screen or a cathode ray tube, but a teletype machine, a device that works similar to a typewriter that produces
        output in the form of inked pads that strike a piece paper and advance lines of text on command. At around the same, teletype machines
		were being replace with screens. It took some time for people to figure out that they were no longer limited by physics to create graphical 
		user interfaces widespread today (or didn't see any compelling reason to change), 
		so for awhile at least, aplications looked and felt like they did before screens. Simple letters, numbers, and a few characters limited
		by the amount of keys that can fit on a keyboard and the lines of text on the screen advanced on command.--> 
		
		<p>Telnet or TELNET was the application used by that UCLA grad student. It is older than the "communcation" protocol (TCP/IP) that underlies
		the Internet today, older than e-mail, and is still around today, only to be supplemented by an encryptic version known as Secure Shell (SSH). 
		Even today,
		"serious" programmers and IT folks use SSH to log on to servers and other computers.  Technical, you don't have to use a text-based
		application to log on to remote computer, but there a great deal of power and control that gets buried and clogged with GUIs.
		<p>Telnet and it's des  cendents, however, is an application. The underlying technnology is known as a Command Line Interface (cli),
		as oppose to a graphical user interface (like Windows, MicroSoft Word, or WordPress). You can use a cli to talk to the operating system of your own computer, poke around the directories
		and files, change settings, open up applications (both in cli and gui mode) to update and create new files.  On a Windows machine, it is known as the Command Prompt (or C Prompt),
		the Terminal on Apple computers, and if you are logging in to a remote Web server, you will most likely be using a UNIX shell.
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">File Transfer</div>
			<div class="col-sm-10">
			 <p> Another enhancement that came around a few years after the ability to log on to remote computers is the ability
			 to transfer files, and groups of files, from one computer to another. The original application, known as File Trasfer Protocol,
			 was first developed by Abhay Bhushan while he was a student at MIT in the early 1970s. Like Telnet, is was supplemented by 
			 versions supporting encryption, but the basic technology fundementally enshired itself into the backbone of the Internet,
			  and even the Web. 
			 Although you use a different protocol (see next section) to view Web pages, FTP (or more accurately, a secure version of FTP) remains the main
		     underlying channel for uploading and updating files that make the Web possible. Even Web sites that allow you to download
			 files from servers, use FTP in the background.
                 
             <p>From the 1970s to the 1990s, the Internet existed in the form of directories and files of various types on servers.  
			  You could use tools like Telnet and FTP to view and download those files, but you were also limited by the operating system and applications 
			  on your own computer. If you put a spreadsheet created in Qutro Pro on a MacIntosh Computer on a server, you may have trouble viewing
			 and modifying it on your Windows computers. Another problem was finding the files. People came up with various means to catalog, search
			 and make order out of the choas.  Some of the means came in the form of human-made "directories" that grouped files of similair topics together, 
			 and other programs existed that used spiders to automatically search for files. The first search engines pre-date the Web.
			</div>
        </div>
        <div class="row">
			<div class="col-sm-2">Hypertext</div>
			<div class="col-sm-10"> 
			  
			 
			 <p>In the early 1990s, Tim Berners-Lee, an engineer at the European Council for Nuclear Research, 
			 developed the Hypertext Transfer Protocol (HTTP) for transfering files and another protocol for labeling or "marking up" those files (HTML).
             <p></p>
			</div>
        </div>
	<h3>Data</h3>
		<div class="row">
			<div class="col-sm-2">SQL</div>
			<div class="col-sm-10">Database History</div>
		</div>
		<div class="row">
			<div class="col-sm-2">XML</div>
			<div class="col-sm-10">XML History
				<p>XHTML2 was suppose to be web markup based on XML syntax
			
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">JSON</div>
			<div class="col-sm-10">Json History</div>
		</div>
	<h3>Control</h3>
		<div class="row">
			<div class="col-sm-2">Perl</div>
			<div class="col-sm-10">Perl History</div>
		</div>
		<div class="row">
			<div class="col-sm-2">PHP</div>
			<div class="col-sm-10">PHP History</div>
		</div>
		<div class="row">
			<div class="col-sm-2">Ruby</div>
			<div class="col-sm-10">History of other server side languages</div>
		</div>
		

	<h3>View</h3>
        <div class="row">
			<div class="col-sm-2">JS</div>
			<div class="col-sm-10">JavaScript History</div>
		</div>
		<div class="row">
			<div class="col-sm-2">CSS</div>
			<div class="col-sm-10">
                <p>CSS is the newest of the client-side services.</p>
                <table class="table">
                <tr><th></th><th>structure</th><th>presentation</th><th>behavior</th></tr>
                <tr><td>HTML</td><td>Primary Responsibility</td><td>depreciated attrs like font=""</td><td>hyperlinking</td></tr>
                <tr><td>CSS</td><td></td><td>Primary Responsibility</td><td>Animations and Transistions</td></tr>
                <tr><td>JS</td><td></td><td></td><td>Primary Responsibility</td></tr>
            </table>
            </div>
		</div>
		<div class="row">
			<div class="col-sm-2">HTML</div>
			<div class="col-sm-10">HTML History
				HTML-from document container to platform for application development
				<ul>Presentation
					<li>canvas element- drawing API to replace Flash
					<li>WebGL API - a JS API for creating 3D graphics using the canvas element
					<li>SVG - an alternative to canvas; an XML language to create vector graphics using markup
					that can be styled with CSS and interacted with JS via the DOM
					<li>audio & video element
				</ul><ul>Client control
					<li>forms
					<li>contenteditable attribute- can be set on an element to make it editable
					<li>designMode attribute - set on html element to make entire document editable 
					<li>dragable attribute -
				</ul><ul>Communication
					<li>Server-side events - communication from server to client
					<li>WebSockets - networking between client and server, 
					for sending small amounts of data quickly
					<li>cache manifest file - defines how applications' files should be cached for offline use
				</ul><ul>storage
					<li>Cookies - limited to 4 kB
					<li>sessionStorage & localStorage - Web Storage API; stores 5 MB
					<li>IndexedDB API - stores complex data structures in client-side database
					<li>SQLite
			</div>
		</div>
        
</div>