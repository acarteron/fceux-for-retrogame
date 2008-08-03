<?php
	$title = "Support Files";
	include("header.php");
?>

<div class="mainbox">
<h2 class="boxhead">Support Files</h2>
<div class="boxbody">

<ul>
<li><a href="#fceupal">FCEU-PAL</a></li>
<li><a href="#mines">MiNES</a></li>
<li><a href="#chtconv">NESten&lt;--&gt;FCE Ultra Cheat Converter</a></li>
<li><a href="#netplay">Network Play Server</a></li>
</ul>
</div>
</div>


<div class="mainbox">
<h2 class="boxhead"><a id="fceupal">FCEU-PAL</a></h2>
<div class="boxbody">
<p>
A program written by Mateusz Viste which analyzes the NES ROM
and launches FCE Ultra with the correct "-pal" parameter.
The archive contains executables for DOS and Linux, as well as the
source-code (under the GNU/GPL licence). The program is written in
FreeBASIC.  It would be great if someone could port this to C and
implement the functionality directly in FCE Ultra.
<a href="http://mateusz.viste.free.fr/fceu/fceu-pal.zip">Download</a>
</p>
</div>
</div>

<div class="mainbox">
<h2 class="boxhead"><a id="mines">MiNES</a></h2>
<div class="boxbody">
<p>
An editor for NES ROMs in the iNES format.  It allows you to
change the PAL/NTSC bit of the iNES header.  Written by Mateusz Viste.
<a href="http://mateusz.viste.free.fr/dos/en/download.php?plik=mines">Download</a>
</p>
</div>
</div>


<div class="mainbox">
<h2 class="boxhead"><a id="chtconv">NESten&lt;--&gt;FCE Ultra Cheat Converter</a></h2>
<div class="boxbody">
<p>
This is a simple cheat converter for converting between NESten and FCE Ultra cheat files.
Only RAM-style (as opposed to Game-Genie) cheats are converted.  Thanks go to Death Adder
for writing the simple documentation included.  DOS executable, with sources included.
</p>

<p class="center"><a href="chtconv.zip">Download</a></p>
</div>
</div>

<div class="mainbox">
<h2 class="boxhead"><a id="netplay">Network Play Server</a></h2>

<div class="boxbody">
<p>
This is the network play server to be used with FCE Ultra 0.98.10 and later.  It is imcompatible with with 
FCEUX 2.x, but still works with the older fceu versions.
</p>

<p>
It was developed under Linux, but it
should compile and work on any platform that implements the BSD-sockets API.
</p>

<p>
Use <a href="http://www.cygwin.com/">Cygwin</a> to compile the server under MS Windows.
</p>

<p class="center">
Current Release:<br>
<a href="http://prdownloads.sourceforge.net/fceultra/fceu-server-0.0.5.tar.gz?download">0.0.5 Source Code</a><br><br>
Legacy Releases:<br>
<a href="http://prdownloads.sourceforge.net/fceultra/fceu-server-0.0.4.tar.gz?download">0.0.4 Source Code</a><br>
<a href="http://prdownloads.sourceforge.net/fceultra/fceunetserver-0.0.3.tar.bz2">0.0.3 Source Code</a>
</p>
</div>
</div>


<?php include("footer.php"); ?>
