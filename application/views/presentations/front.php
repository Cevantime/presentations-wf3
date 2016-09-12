<a class="bt-home" href="<?php echo base_url(); ?>" title="Retour à l'accueil">Retour à l'accueil</a>
<aside id="presentable-icon" class="revealjs">
	<a title="Table of Contents" href="#toc">
		<img alt="Table des maitères" src="<?php echo base_url('assets/vendor/css/presentable/icons/revealjs.png'); ?>"/>
	</a>
</aside>
<div class="slides">
	<section>
		<section>
			<h1>Le dévelopement Frontend dans le Web</h1>
			<!-- Depending  on your version of reveal.js you may also
			have a script tag in this section -->
		</section>
		<section id="toc">
			<h2>Table des matières</h2>
			<nav id="presentable-toc" class="revealjs"></nav>
		</section>
	</section>
	<section>
		<h2>
			Qu'est-ce que le développement Frontend ?
		</h2>
		<ul>
			<li class="fragment">
				Le développement Frontend est l'art d'organiser et de mettre en 
				forme des données pour l'utilisateur
			</li>
			<li class="fragment">
				Frontend &ne; Backend
			</li>
			<li class="fragment">
				Technologies utilisées : HTML/CSS et Javacsript
			</li>
		</ul>
	</section>
	<section>
		<h3>
			Le Frontend &ne; Backend
		</h3>
		<ul>
			<li>
				Backend :
				<ul>
					<li>Gestion des requêtes/entrées utilisateur, aiguillage (ou routing)</li>
					<li>Dialogue avec la base de données</li>
					<li>Envoi des données nécessaires à l'affichages des différentes pages</li>
				</ul>
			</li>
			<li>
				Frontend :
				<ul>
					<li>Réception des données de la page</li>
					<li>Mise en page</li>
					<li>Mise en forme</li>
				</ul>
			</li>
		</ul>
	</section>

	<section>
		<h3>
			Qu'est-ce que mettre en forme les données ?
		</h3>
		<ul>
			<li class="fragment">
				Organiser l'information au sein d'une même page ou sur
				différentes pages
			</li>
			<li class="fragment">
				Rendre l'information compréhensible, lisible, attractive... et dynamique !
			</li>
		</ul>
	</section>
	<section>
		<h3>
			Les technologies Frontend
		</h3>
		<ul>
			<li>
				HTML <a href="#/HTML"><i class="fa fa-arraow-right"></i></a>
			</li>
			<li>
				CSS <a href="#/CSS"><i class="fa fa-arraow-right"></i></a>
			</li>
			<li>
				Javascript <a href="#/Javascript"><i class="fa fa-arraow-right"></i></a>
			</li>
		</ul>
	</section>
	<section id="HTML">
		<section>
			<h2>Au commencement était le HTML...</h2>
			<p>
				<img src="<?php echo base_url('assets/local/images/front/www.png'); ?>" alt="Contenu non disponible"/>
			</p>

		</section>
		<section>
			<pre><code class="html hljs">
					<?php echo htmlentities('<HEADER>
<TITLE>The World Wide Web project</TITLE>
<NEXTID N="55">
</HEADER>
<BODY>
<H1>World Wide Web</H1>The WorldWideWeb (W3) is a wide-area<A
NAME=0 HREF="WhatIs.html">
hypermedia</A> information retrieval
initiative aiming to give universal
access to a large universe of documents.<P>
Everything there is online about
W3 is linked directly or indirectly
to this document, including an <A
NAME=24 HREF="Summary.html">executive
summary</A> of the project, <A
NAME=29 HREF="Administration/Mailing/Overview.html">Mailing lists</A>
, <A
NAME=30 HREF="Policy.html">Policy</A> , November\'s  <A
NAME=34 HREF="News/9211.html">W3  news</A> ,
<A
NAME=41 HREF="FAQ/List.html">Frequently Asked Questions</A> .
<DL>
<DT><A
NAME=44 HREF="../DataSources/Top.html">What\'s out there?</A>
<DD> Pointers to the
world\'s online information,<A
NAME=45 HREF="../DataSources/bySubject/Overview.html"> subjects</A>
, <A
NAME=z54 HREF="../DataSources/WWW/Servers.html">W3 servers</A>, etc.
<DT><A
NAME=46 HREF="Help.html">Help</A>
<DD> on the browser you are using
<DT><A
NAME=13 HREF="Status.html">Software Products</A>
<DD> A list of W3 project
components and their current state.
(e.g. <A
NAME=27 HREF="LineMode/Browser.html">Line Mode</A> ,X11 <A
NAME=35 HREF="Status.html#35">Viola</A> ,  <A
NAME=26 HREF="NeXT/WorldWideWeb.html">NeXTStep</A>
, <A
NAME=25 HREF="Daemon/Overview.html">Servers</A> , <A
NAME=51 HREF="Tools/Overview.html">Tools</A> ,<A
NAME=53 HREF="MailRobot/Overview.html"> Mail robot</A> ,<A
NAME=52 HREF="Status.html#57">
Library</A> )
<DT><A
NAME=47 HREF="Technical.html">Technical</A>
<DD> Details of protocols, formats,
program internals etc
<DT><A
NAME=40 HREF="Bibliography.html">Bibliography</A>
<DD> Paper documentation
on  W3 and references.
<DT><A
NAME=14 HREF="People.html">People</A>
<DD> A list of some people involved
in the project.
<DT><A
NAME=15 HREF="History.html">History</A>
<DD> A summary of the history
of the project.
<DT><A
NAME=37 HREF="Helping.html">How can I help</A> ?
<DD> If you would like
to support the web..
<DT><A
NAME=48 HREF="../README.html">Getting code</A>
<DD> Getting the code by<A
NAME=49 HREF="LineMode/Defaults/Distribution.html">
anonymous FTP</A> , etc.</A>
</DL>
</BODY>'); ?>
</code></pre>
		</section>
	</section>
	<section id="what-is-html">
		<h3>
			Qu'est-ce que le HTML ?
		</h3>
		<ul>
			<li>
				<label><strong>HTML :</strong></label> 
				<strong>H</strong>yper 
				<strong>T</strong>ext 
				<strong>M</strong>arkup 
				<strong>L</strong>anguage

			</li>
			<li>
				Un langage de mise en page
			</li>
			<li>
				La mise en page des éléments (textes, images, formulaires etc.) 
				est faite grâce à des <strong>balises</strong> (ou <em>tags</em> en anglais)
			</li>
		</ul>
	</section>
	<section id="html-look">
		<h3>À quoi ressemble une page HTML ?</h3>
		<pre style="font-size: 0.4em"><code><?php
				echo htmlentities(""
						. "<html>\n"
						. "	<body>\n"
						. "		<p>Je suis un paragraphe !</p>\n"
						. "		<p> Je suis <strong>une notion forte!</strong> \n"
						. "		dans un paragraphe</p>\n"
						. "		<img src=\"monimage.jpg\" alt=\"Je suis une image!\"/>\n"
						. "		<button>Je suis un bouton !</button>\n"
						. "	</body>\n"
						. "</html>");
				?></code></pre>
		<div style="font-size: 1.5em"><i class="fa fa-arrow-down"></i></div>
		<div>
			<img src="<?php echo base_url('assets/local/images/front/capture-html.png'); ?>" />
		</div>
	</section>
	<section id="html-inline-styling">
		<h3>La mise en forme en HTML</h3>
		<pre class="html hljs" style="font-size: 0.5em"><code><?php
				echo htmlentities(""
						. "<p style='color: lightblue'>\n "
						. "	Je suis \n"
						. "	<strong style='color: lightgray; font-weight: bold; font-size: 2em'>\n"
						. "		une notion forte!\n"
						. "	</strong> \n"
						. "	dans un paragraphe\n"
						. "</p>\n");
				?></code></pre>
		<div style="font-size: 1.5em"><i class="fa fa-arrow-down"></i></div>
		<div>
			<img src="<?php echo base_url('assets/local/images/front/capture-inline-styled-html.png'); ?>" />
		</div>
	</section>
	<section id="html-limit">
		<h3>Les limites du HTML</h3>
		<ul>
			<li>
				Peu adapté pour faire de la mise en forme
			</li>
			<li>
				Le HTML est un langage statique. Il ne permet pas de faire des 
				programmes à proprement parler.
			</li>
			<li>
				Un code HTML ne peut donc pas se modifier lui-même.
			</li>
		</ul>
	</section>
	<section id="css">
		<h2>Les CSS</h2>
		<ul>
			<li>
				<label><strong>CSS :</strong></label> 
				<strong>C</strong>ascading 
				<strong>S</strong>tyle
				<strong>S</strong>heet 
			</li>
			<li>
				Supplément et non remplacement des fichiers HTML
			</li>
			<li>
				Séparation des tâches entre la mise en <em>page</em> et la mise en <em>forme</em>.
			</li>
			<li>
				Spécialisé dans la mise en forme (stylisation ou styling) des pages HTML.
			</li>
		</ul>
	</section>
	<section id="css-principe">
		<h3>Principes du CSS</h3>
		<ul>
			<li>
				Écrits la plupart du temps dans un fichier à part appelé <em>fichier de style</em>
			</li>
			<li>
				Affectation des styles aux éléments HTML grâce à leur nom, 
				attributs et positions au sein de la page
			</li>
			<li>
				Utilisation de propriétés et de valeurs (ma-propriété : ma-valeur)
			</li>
		</ul>
	</section>
	<section id="css-look">
		<section>
			<h3>Et ça ressemble à quoi ?</h3>
			<pre style="font-size: 0.4em"><code class="css hljs">html {
	background: url(background.jpg);
	padding: 0 20%;
	
}

body {
	background: white;
	margin: 0;
	height: 100%;
}
body * {
	font-family: arial, sans-serif;
	font-size: 13px;
	text-align: center;
}
p {
	padding: 25px;
	margin: 0;
}

p:first-letter {
	font-size: 3em;
}

img {
	margin: 0 auto;
	display: block;
	border: 1px gray solid;
	box-shadow: 0 0 10px gray;
	width: 400px;
	margin-bottom: 25px;
}

button {
	border: 2px lightgray  solid ;
	border-radius: 10px;
	background: linear-gradient(to bottom, #9ee0ff 0%,#ffffff 50%,#d3edff 100%); 
	display: block;
	width: 200px;
	padding: 15px;
	margin: 0 auto;
	box-sizing: border-box;
}</code></pre>
			<div style="font-size: 1.5em"><i class="fa fa-arrow-down"></i></div>
		</section>
		<section>
			<img src="<?php echo base_url('assets/local/images/front/capture-html-css.png'); ?>">
		</section>
	</section>
	<section id="javascripts">
		<h2>Les Javascripts</h2>
		<ul>
			<li>Plusieurs langages de progammation : 
				<ul>
					<li>
						Ecmascript
					</li>
					<li>
						Dart
					</li>
					<li>
						TrueScript
					</li>
				</ul>
			<li><strong>Le plus commun est le Ecmascript, plus communément appelé Javascript !</strong></li>
			<li>Ils ne servent pas qu'à faire du web !</li>
			<li>Ils viennent s'ajouter aux technologies HTML et CSS et non les remplacer.</li>
			<li>Ils permettent de manipuler le HTML, le CSS, bref de faire ce qu'on veut avec notre page web !</li>
		</ul>
	</section>
	<section id="js-principes">
		<h3>Comment s'en servir ?</h3>
		<ul>
			<li>Comme pour les CSS, ils sont inclus dans la page HTML ou bien chargés depuis un fichier externe</li>
			<li>La plupart des javascripts sont des langages à part entière et doivent donc être appris !</li>
			<li>Certaines librairies sont tout de même là pour nous simplifier la vie (<a href="https://jquery.com/">Jquery</a>, <a href="https://angularjs.org/">AngularJS</a>).</li>
		</ul>
	</section>
	<section id="js-look">
		<h3>Exemples de codes</h3>
		<section>
			<p>
				Javascript :
			</p>
			<pre><code class="hljs html"><?php echo htmlentities("<html>
	<body>
		<p>Je suis un paragraphe !</p>
		<p>
			Je suis <strong>une notion forte!</strong> dans un paragraphe
		</p>
		<img src= \"villa.jpg\" alt=\"Je suis une image!\"/>
		<button>Je suis un bouton !</button>
		<script type=\"text/javascript\">
			document.body.innerHTML = 
			\"J'ai remplacé tout le contenu de ma page \"+
			\"en une seule ligne!\";
		</script>
	</body>
</html>"); ?>
</code></pre>
			<div style="font-size: 1.5em"><i class="fa fa-arrow-down"></i></div>
		</section>
		<section>
			<p class="presentable-title">Rendu</p>
			<img src="<?php echo base_url('assets/local/images/front/capture-html-javascript.png'); ?>"/>
		</section>
	</section>
	<section id="integrateur">
		<h2>Intégrateur frontend : un métier à part entière</h2>
		<ul>
			<li class="fragment">Plusieurs langages à maîtriser (et ce n'est pas prêt de s'arrêter !)</li>
			<li class="fragment">Des outils et librairies en constantes évolution</li>
			<li class="fragment">La curiosité et l'adaptabilité sont souvent récompensés !</li>
			<li class="fragment"><pre style="display: inline; font-size: 1.2em;"><code style="display: inline" class="hljs javascript">frontend < backend == false ;</code></pre></li>
		</ul>
	</section>
	<section>
		<p style="font-size: 2em;" class="presentable-title">
			Bon courage à tous !
		</p>
	</section>
</div>

