<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="Description" content="Polish Society at Universty of Cambridge" />
<meta name="Keywords" content="polsoc, polish society, university of cambridge, events, news, membership, student societies, CUSU"/>
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
    <li id="current"><a href="index.php" >Wersja Polska</a></li>
    <li><a href="./index_english.php">English Version</a></li>
  </ul>
</div>
<div id="header">
  <h1 id="logo-text"><a>PolSoc</a></h1>
  <p id="slogan">Amor Patriae nostra Lex</p>
</div>
<div id="content-wrap">
  <div id="content">
    <div id="sidebar" >
      <h3>Szukaj</h3>
      <form action="http://www.google.com/search" method="get">
          <input type="text" name="q" id="q" />
          <input name="search" class="button" value="Szukaj" type="submit" />
       

      </form>
      <h3>Menu</h3>
      <ul class="sidemenu">
        <li><a href="index.php?viev=1">Wydarzenia</a></li>
        <li><a href="index.php?viev=2">Kalendarz</a></li>
        <li><a href="index.php?viev=3">O nas</a></li>
        <li><a href="index.php?viev=4">Członkostwo</a></li>
        <li><a href="index.php?viev=5">Partnerzy</a></li>
	<li><a href="index.php?viev=6">Sponsorzy</a></li>
	<li><a href="index.php?viev=7">Galeria</a></li>
	<li><a href="index.php?viev=8">Kontakt</a></li>
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
<h2>Wydarzenia</h2>

<p align="justify"> Informacje o bieżących wydarzeniach znajdują się na anglojęzycznej wersji tej strony. <a href="./index_english.php">Events</a>  </p>
     
    </div>
<?php 
}

else if($_GET['viev']==2)
{ 
?>
<div id="main"> <a name="msg"></a>
<h2>Kalendarz</h2>


	  <iframe src="gcalendar-wrapper.php?showNav=0&amp;showPrint=0&amp;showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;height=500&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=cupolsoc%40gmail.com&amp;color=%23000000&amp;color=%23875509&amp;ctz=Europe/London" width="575" height="500" frameborder="0" scrolling="no"></iframe>
    </div>
<?php 
}
else if($_GET['viev']==3)
{ 
?>
<div id="main"> <a name="msg"></a>
<h2>O nas</h2>
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
<h2>Członkostwo</h2>
      <p align="justify">Jako student lub pracownik naukowy, możesz każdej chwili możesz zostać członkiem Cambridge University Polish Society! Koszt członkostwa to £10 na życie lub £5 rocznie.</p>
      <p align="justify">Można zapisać się na kilka sposobów:</p>
	  <ul>
	  <li align="justify">Zapisz się na listę mailingową: <br><a href="https://lists.cam.ac.uk/mailman/listinfo/soc-polsoc-members">https://lists.cam.ac.uk/mailman/listinfo/soc-polsoc-members</a>  </li>
	  <li align="justify">Znajdź nas na CUSU Societies’ Fair organizowanym co roku na początku Października. Więcej info na: <br> <a href="http://www.cusu.cam.ac.uk/societies/fair">http://www.cusu.cam.ac.uk/societies/fair</a></li>
	  <li align="justify">Wyślij e-mail na adres: cupolsoc@gmail.com</li>
	  </ul>
	  <p align="justify">Za członkostwo można zapłacić na każdym evencie PolSocu lub na Societies’ Fair. Jako potwierdzenie zapłaty, każdy członek otrzymuje oficjalną kartę członkowską.</p>
	   <p align="justify">Co daje członkostwo?</p>
	  <ul>
	  <li align="justify">Zniżki na niektóre eventy PolSocu</li>
	  <li align="justify">Pierwszeństwo zapisu na formale i inne spotkania z ograniczoną ilością miejsc</li>
	  <li align="justify">Możliwość działania w komitecie stowarzyszenia</li>
	  <li align="justify">Inne atrakcyjne oferty o których na bieżąco będziemy informować</li>
	  </ul>
    </div>
<?php 
}
else if($_GET['viev']==5)
{ 
?>
<div id="main"> <a name="msg"></a>
<h2>Partnerzy</h2>
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
<h2>Sponsorzy</h2>
<br>
      <p> Ivy Poland foundation <a href="http://www.ivypoland.pl/">http://www.ivypoland.pl/</a> </p>
<p> Szukamy sponsorów - zainteresowanych prosimy o kontakt.</p>
</div>
<?php 
}
else if($_GET['viev']==7)
{ 
?>
<div id="main"> <a name="msg"></a>
<h2>Galeria</h2>
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
<h2>Kontakt</h2>
      <p>Znajdź nas na Facebooku! <a href="http://www.facebook.com/home.php#!/groups/44399736694/?fref=ts"</p>strona PolSocu</a></p>
      <p align="justify">Polub nasza strone, badź na czasie ze wszystkimi wydarzeniami i włączaj się w dyskusje. Jest to świetna metoda na komunikacje z innymi członkami PolSocu.</p>
      <p align="justify">Masz pytanie? W każdej chwili możesz napisać do nas na adres cupolsoc@gmail.com albo wyślij wiadomość przed Facebook.</p>
	  <p align="justify">Ogólne pytania na temat stowarzyszeń studenckich w Cambridge można też kierować do CUSU: <a href="http://www.cusu.cam.ac.uk/contacts/"> http://www.cusu.cam.ac.uk/contacts/</a></p>
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
header('Location: index.php?viev=1');
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
