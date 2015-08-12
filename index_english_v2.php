<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>PolSoc</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso 8859-2" />
<link rel="stylesheet" href="style/Husaria.css" type="text/css" />
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30546541-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="nav">
  <ul>
     <li><a href="index.php" >Wersja Polska</a></li>
    <li id="current"><a href="index_english.php">English Version</a></li>

  </ul>
</div>
<div id="header">
  <h1 id="logo-text"><a>PolSoc</a></h1>
  <p id="slogan">Amor Patriae nostra Lex</p>
</div>
<div id="content-wrap">
  <div id="content">
    <div id="sidebar" >
      <h3>Search</h3>
      <form action="http://www.google.com/search" method="get">
          <input type="text" name="q" id="q" />
          <input name="search" class="button" value="Search" type="submit" />
       

      </form>
      <h3>Menu</h3>
      <ul class="sidemenu">
        <li><a href="index_english.php?viev=1">Events</a></li>
        <li><a href="index_english.php?viev=2">Calendar</li>
        <li><a href="index_english.php?viev=3">About us</a></li>
        <li><a href="index_english.php?viev=4">Membership</a></li>
        <li><a href="index_english.php?viev=5">Partners</a></li>
	<li><a href="index_english.php?viev=6">Sponsors</a></li>
	<li><a href="index_english.php?viev=7">Gallery</a></li>
	<li><a href="index_english.php?viev=8">Contact</a></li>
	<li><a href="http://www.facebook.com/home.php#!/groups/44399736694/?fref=ts">Facebook</a></li>
      </ul>
    
    </div>
<?php
if (isset($_GET['viev'])) 
{
if($_GET['viev']==1)
{
?>
<div id="main"> <a name="msg"></a>
<h2>Events</h2>

<!-- czasowe rozwiazanie, orginalne znajduje sie w pliku orginalna wersja, trzeba rozwiazac problem formatowania tekstu -->
<!-- ORGINAL 
	<?php
		  $doc = new DOMDocument();
		  $doc->load( 'db/posts.xml' );
		  
		  $posts = $doc->getElementsByTagName( "post" );
		  foreach( $posts as $post )
		  {
		  $nums = $post->getElementsByTagName( "num" );
		  $num = $nums->item(0)->nodeValue;
		  
		  $authors = $post->getElementsByTagName( "author" );
		  $author = $authors->item(0)->nodeValue;
		  
		  $dates = $post->getElementsByTagName( "date" );
		  $date = $dates->item(0)->nodeValue;
		  
		  $titles = $post->getElementsByTagName( "title" );
		  $title = $titles->item(0)->nodeValue;
		  
		  $shorts = $post->getElementsByTagName( "short" );
		  $short = $shorts->item(0)->nodeValue;
		  ?>
		  <h2><?php echo $title?></h2>
			<p class="post-by">Dodany przez:  <?php echo $author?></a></p>
			<?php echo $short?>
			<p class="post-footer align-right"> <a href="index_english.php?viev=30&id=<?php echo $num ?>" class="readmore">Więcej >>> </a> <a href="http://#" class="comments">Komentarze (0)</a> <span class="date"><?php echo $date ?></span> </p>

		  <?php
		  }
		?>
    </div>  -->



  <p align="justify"> We hope that you had great holidays, rested well during the summer and are excited about the new term that is just about to begin. As usual, there will be plenty of events organised by the Polish Society in the incoming academic year, so keep an eye on your email. <br>
The next events are: </p>

<ul>

	<li align="justify">Michaelmas term accomplishments  </li>

	<li align="justify"> Fat Thursday - 27.02.14 - location and time to be confirmed. </li>
 	

 </ul>



<h3> Michaelmas term  </h3>

<p align="justify">


The Michaelmas term has reached its end with many of you already enjoying the well-deserved Christmas break. This had been an exciting time for PolSoc, with us being the main organiser (toghether with OxPolSoc and LSE SU PBS) of Science. Polish Perspectives conference. It was a huge success, with 180 participants and prominent guests, the conference managed to create a friendly and active community of young Polish scientists abroad. Members of Cam PolSoc played significant role in both editions of the SPP conference. As a consequence of this achievement, we managed to secure sponsorship from Ivy Poland Foundation for our society. <br>

 

Apart from serious conference, we also enjoyed many fun events: St. Andrews Day party, Swap with Hungarians, formal dinners and PolSoc football. The society expanded: we have welcomed thirty nine new members, reaching well more than two hundred overall. 

 </p>


     
    </div>
<?php 
}

else if($_GET['viev']==2)
{ 
?>
<div id="main"> <a name="msg"></a>
<h2>Calendar</h2>
	  <iframe src="gcalendar-wrapper.php?showNav=0&amp;showPrint=0&amp;showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;height=500&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=cupolsoc%40gmail.com&amp;color=%23000000&amp;color=%23875509&amp;ctz=Europe/London" width="575" height="500" frameborder="0" scrolling="no"></iframe>
    </div>
<?php 
}
else if($_GET['viev']==3)
{ 
?>
<div id="main"> <a name="msg"></a>
<h2>About us</h2>
      <p align="justify">Cambridge University Polish Society (PolSoc) <br>Stowarzyszenie Polskich Studentów na Uniwersytecie w Cambridge</p>
      <p align="justify">Stowarzyszenie jest relatywnie młode, zostało założone 4 lata temu przez niewielką grupę w celu zintegrowania studentów pochodzących z Polski uczących się na uniwersytecie w Cambridge. Okazało się ono wielkim sukcesem i obecnie składa się z około 100 studentów z wielu różnych kierunków oraz stopni naukowych.</p>
      <p align="justify">Wraz z rozwojem stowarzyszenia, rozwinęły się też jego cele. Oprócz integracji studentów poprzez liczne spotkanie towarzyskie, promujemy kulturę polską na naszej uczelni. Organizujemy różnego rodzaju wydarzenia kulturalne i naukowe, takie jak projekcje polskich filmów czy imprezy z okazji polskich świąt narodowych. W chwili obecnej wraz z Stowarzyszeniem Polskich studentów w Oxfordzie wprowadzamy w życie program zachęcający licealistów do studiowania na  uniwersytecie w Cambridge. Czasem pracujemy też z polakami z poza uniwersytetu, ale mieszkających w okolicy Cambridge.</p>
	  <p align="justify">Nasze stowarzyszenie działa bardzo dynamicznie i wciąż organizuje nowe wydarzenia i spotkania. Stawiamy na różnorodność i wciąż wychodzimy z nowymi propozycjami i zachęcamy jak najwięcej osób do uczestniczenia w tych spotkaniach.</p>
	  <p align="justify">Nasze największe osiągnięcia: </p>
	  <ul>
	  <li align="justify">Organizacja 4 Kongresu Polskich Stowarzyszeń Studenckich w Cambridge, na który przyjechało ponad 150 studentów z całego kraju oraz wielu znakomitych gości (m. in. ministrowie, profesorzy i przedsiębiorcy)</li>
	  <li align="justify">Organizacja licznych wydarzeń promujących polskie święta narodowe oraz polską kulturę jak np. wystawa poświęcona Solidarności, imprezy andrzejkowe i obchody święta niepodległości.</li>
	  <li align="justify">Organizacja spotkania informacyjnego dla przyszłych studentów Cambridge przed ich wyjazdem na studia.</li>
	  </li align="justify">Uaktywnienie uczestnictwa Postgradów w życiu PolSocu poprzez inicjatywę Polish Science Cafe.</li>
	  </ul>
	  <p align="justify">W przyszłości planujemy: </p>
	  <ul>
	  <li align="justify">Próbować zachęcić jeszcze więcej osób do przyłączenia się do naszego stowarzyszenia. Od razu na początku roku zapraszamy nowych studentów na specjalny event przeznaczony na promocję naszego stowarzyszenia.</li>
	  <li align="justify">Zapraszać interesujących i wpływowych mówców do przyjazdu do Cambridge na spotkania I wykłady które byłyby otwarte dla wszystkich studentów. Dzięki temu ludzie z wielu państw będą mogli dowiedzieć się czegoś o Polsce i jej kulturze. </li>
	  <li align="justify">Promować polskę na uniwersytecie poprzez ciekawe wydarzenia jak np. wystawy.</li>
	  </li align="justify">Zwiększyć współpracę z innymi tego typu stowarzyszeniami w Wielkiej Brytanii.</li>
	  </ul>
	  <p align="justify">2012/2013 Committee</p>
	  <p align="justify">President - Artur Reszka, Robinson College, amr69(at)cam.ac.uk<br>
	  Vice-President - Ania Slotala, Clare College, ads71@(at)am.ac.uk<br>
	  Treasurer - Tomek Cymes, Pembroke College, tc360(at)cam.ac.uk<br>
	  Secretary - Kinga Plawik, Churchill College, kap42(at)cam.ac.uk<br>
	  Social Secretary - Aleks Dabrowski, Emmanuel College, ad620(at)cam.ac.uk<br>
	  External Officer - Marta Karbowska, Newnham College, mmk42(at)cam.ac.uk<br>
	  Graduate Officers - Madga Richter, mmr46(at)cam.ac.uk and Antek Wrobel, agw42(at)cam.ac.uk <br>
	
    </div>
<?php 
}
else if($_GET['viev']==4)
{ 
?>
<div id="main"> <a name="msg"></a>
<h2>Membership</h2>
      <p align="justify"> If you are a student or a member of the academic staff you can become a member of the Piolish Society. the membership fee is £10 or £5 annually.</p>
      <p align="justify">There are several ways to join:</p>
	  <ul>
	  <li align="justify">Join the mailing list: <br><a href="https://lists.cam.ac.uk/mailman/listinfo/soc-polsoc-members">https://lists.cam.ac.uk/mailman/listinfo/soc-polsoc-members</a>  </li>
	  <li align="justify">Find us on CUSU Societies’ Fair organised at the beginning of October. More information on: <br> <a href="http://www.cusu.cam.ac.uk/societies/fair">http://www.cusu.cam.ac.uk/societies/fair</a></li>
	  <li align="justify">Send an e-mail to: cupolsoc@gmail.com</li>
	  </ul>
	  <p align="justify">The membership fee can be paid during any of the events. All members recieve a membership card as a confirmation of the payment.</p>
	   <p align="justify">What are the advantages of memebership?</p>
	  <ul>
	  <li align="justify">Discounts for some of Polsoc events.</li>
	  <li align="justify">Priority in registering for events with limited number of places such as formals.</li>
	  <li align="justify">Chance to join the steering committee. </li>
	  <li align="justify">and many others which will be advertised throughout the year.</li>
	  </ul>
    </div>
<?php 
}
else if($_GET['viev']==5)
{ 
?>
<div id="main"> <a name="msg"></a>
<h2>Partners</h2>
      <p>Oxford - <a href="http://www.oxpolsoc.com/">http://www.oxpolsoc.com/</a></p>
	  <p align="center"><img src="images/partners/p1.gif"></p>
      <p>LSE -   <a href="http://www.polish-business.org/en">http://www.polish-business.org/en</a></p>
	  <p align="center"><img src="images/partners/p2.gif"></p>
	</div>
<?php 
}
else if($_GET['viev']==6)
{ 
?>
<div id="main"> <a name="msg"></a>
<h2>Sponsors</h2>
<br>
      <p> Ivy Poland foundation <a href="http://www.ivypoland.pl/">http://www.ivypoland.pl/</a> </p>
<p> We are continuously looking for sponsors. Please contact us. </p>
</div>
<?php 
}
else if($_GET['viev']==7)
{ 
?>
<div id="main"> <a name="msg"></a>
<h2>Gallery</h2>
    <div id="gallery">
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,18,0" width="800" height="690" id="gallery" align="middle">
				<param name="allowScriptAccess" value="sameDomain" />
				<param name="allowFullScreen" value="true" />
				<param name="movie" value="gallery.swf" />
				<param name="quality" value="high" />
				<param name="scale" value="noscale" />
				<param name="bgcolor" value="#12120F" />
				<embed src="gallery.swf" quality="high" allowFullScreen="true"  bgcolor="#12120F" width="575" height="530" name="gallery" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
		</object>
    </div>
</div>
<?php 
}
else if($_GET['viev']==8)
{ 
?>
<div id="main"> <a name="msg"></a>
<h2>Contact</h2>
      <p>Find us on Facebooku! <a href="http://www.facebook.com/home.php#!/groups/44399736694/?fref=ts"</p> PolSoc website</a></p>
      <p align="justify">Like our website and join the discussions.</p>
      <p align="justify">Have a question? E-mail cupolsoc@gmail.com or send a message on Facebook.</p>
	  <p align="justify">General questions about student societies should be directed to CUSU: <a href="http://www.cusu.cam.ac.uk/contacts/"> http://www.cusu.cam.ac.uk/contacts/</a></p>
	  </div>
<?php 
}
else if($_GET['viev']==30)
{ 
?>
<div id="main"> <a name="msg"></a>
<?php
		$doc = new DOMDocument();
		  $doc->load( 'db/posts.xml' );
		  
		  $posts = $doc->getElementsByTagName( "post" );
		  foreach( $posts as $post )
		  {
		  $nums = $post->getElementsByTagName( "num" );
		  $num = $nums->item(0)->nodeValue;
		  
		  $authors = $post->getElementsByTagName( "author" );
		  $author = $authors->item(0)->nodeValue;
		  
		  $dates = $post->getElementsByTagName( "date" );
		  $date = $dates->item(0)->nodeValue;
		  
		  $titles = $post->getElementsByTagName( "title" );
		  $title = $titles->item(0)->nodeValue;
		  
		  $longs = $post->getElementsByTagName( "long" );
		  $long = $longs->item(0)->nodeValue;
		  if($_GET['id']==$num) 
			  { 
			  ?>
				<h2><?php echo $title?></h2>
				<p class="post-by">Dodany przez:  <?php echo $author?></a> : <span class="date"><?php echo $date ?></span></p>
				<?php echo $long;
			  }
		  }
?>
</div>
<?php
}
else
{ 
?>
<div id="main"> <a name="msg"></a>
<h2>Haker mały się znalazł...</h2>
      <p>Nie powinno Cię tu być, info poszło do adminów, na policję, FBI, CIA, NASA, ESA i do Kim Jong Una</p>
      </div>
<?php 
}
}
else
{
header('Location: index_english.php?viev=1');
}
?>
  </div>
</div>
  <div id="footer-bottom">
    <p> &copy; 2012 <strong>PolSoc</strong> | 
      Design by: Szmajdziul using <a href="http://www.styleshout.com/">styleshout</a> |  <a href="http://www.flashgallery.org/" title="Free Flash and XML photo gallery">Flash Gallery</a> | 
      Valid <a target="_blank" href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a target="_blank" href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a></p>
  </div>
</div>
</body>
</html>
