<?php 
/*
Template Name: Styleguide
*/
 ?>

<!doctype html>

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>T0T Style Guide</title>
	<!-- <link rel="stylesheet" href="assets/css/style.css"> -->
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">

	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body class="body">

	<header class="header">

	<div class="brand">

	<a href="#" class="brand__logo"></a>
	<h1 class="h4 brand__description">T0T Style Guide</h1>

</div>
	<div class="banner"></div>

</header>
	
	<main>

	<h2>Wells</h2>
	
	<div class="img--bg-big well well--panoramica">
		<h3>.img--bg-big .well .well--panoramica</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est totam voluptate quisquam deserunt explicabo officiis, expedita deleniti asperiores aperiam cumque non quo alias voluptatum dolorem magnam dignissimos ad pariatur. Perspiciatis!</p>
		<button class="btn btn--image"><a href="">Call to action</a></button>
	</div>
	
	<div class="well">
		<h4>.well</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente fugiat provident rem culpa soluta quo similique omnis vitae, facere labore aliquid tenetur natus voluptatibus blanditiis ipsa quidem eligendi excepturi distinctio?</p>
		<button class="btn">
			<a href="">call to action</a>
		</button>
	</div>

	<div class="well well--large">
		<h4>.well--large</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi exercitationem nostrum aliquid, esse corporis, laboriosam laudantium beatae? Reprehenderit quae amet tempora, tenetur ad rerum laudantium beatae dolorem, iste iure numquam.</p>
		<button class="btn btn--invert">
			<a href="">call to action</a>
		</button>
	</div>

	<div class="well well--small">
		<h4>.well .well--small</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius doloribus deserunt sequi, neque praesentium quibusdam eaque, deleniti commodi quos non ad totam ex officia accusantium. Libero accusantium, recusandae voluptatum ipsum!</p>
		<button class="btn btn--mini">
			<a href="">.btn--mini</a>
		</button>
		<button class="btn btn--small">
			<a href="">.btn--small</a>
		</button>
		<button class="btn btn--large">
			<a href="">.btn--large</a>
		</button>
	</div>


<h2>Alerts</h2>

<div class="alert">
	<p>alert</p>
	<button class="btn"><span class="close">X</span></button>
</div>
<div class="alert alert--info">
	<p>.alert--info</p>
</div>
<div class="alert alert--success">
	<p>.alert--success</p>
</div>
<div class="alert alert--warning"><p>alert--warning</p><button class="btn"><span class="close">X</span></button></div>
<div class="alert alert--error">
	<p>.alert--error</p>
	<button class="btn"><span class="close">X</span></button>
</div>
<div class="alert alert--inverse">
	<p>.alert--inverse</p>
</div>	
	<h2>Shapes & Colors</h2>
	<section class="shapes">
		<div class="color-base shape-square"></div>
		<div class="color-base-dark shape-circle"></div>
		<div class="color-base-light shape-rounded"></div>
		<div class="color-base-invert shape-mask"></div>
		<div class="black shape-custom"></div>
		<div class="white"></div>

	</section>
	
	<h2>Botones</h2>
	<section>

	<a href="#" class="btn active">active</a>
	<a href="#" class="btn btn--disabled">disabled</a>
	<a href="#" class="btn btn--slidemenu">slidemenu</a>
	<a href="#" class="btn btn--info">info</a>
	<a href="#" class="btn btn--slider">slider</a>
	<a href="#" class="btn btn--error">error</a>
	<a href="#" class="btn btn--primary">primary</a>
	<a href="#" class="btn btn--success">success</a>
	<a href="#" class="btn btn--warning">warning</a>
	<a href="#" class="btn btn--mini">mini</a>
	<a href="#" class="btn btn--small">small</a>
	<a href="#" class="btn btn--large">large</a>
	<a href="#" class="btn">.btn</a>

</section>
	<h2>Navegación</h2>
	<nav class="nav-main" role="navigation">

  <input type="checkbox" id="trigger"/>
  <label for="trigger"></label>

   <ul>
     <li><a href="">link</a></li>
     <li><a href="">link más largo</a></li>
     <li><a href="">link</a></li>
     <li><a href="">Contacto</a></li>
   </ul>

</nav>


<h4>Menu con display: table</h4>
  <nav>

  	<ul class="nav-header">
  		<li class="nav-header__item">:)</li>
        <li class="nav-header__item">:)</li>
        <li class="nav-header__item">:)</li>
        <li class="nav-header__item">:)</li>
    </ul>

  </nav>


<h4>Menu con display: inline-block</h4>
<nav>

    <ul class="nav-footer">
    	<li class="nav-footer__item"><a href="">;P</a></li><li class="nav-footer__item"><a href="">;P</a></li><li class="nav-footer__item"><a href="">;P</a></li><li class="nav-footer__item"><a href="">;P</a></li>
    </ul>

</nav>	


	<h2>Grid</h2>

	<section class="grid">

	  <div class="grid__item"></div>
	  <div class="grid__item img--bg"></div>
	  <div class="grid__item"></div>
	  <div class="grid__item"></div>
	  <div class="grid__item"></div>
	  <div class="grid__item img--bg"></div>
	  <div class="grid__item"></div>
	  <div class="grid__item"></div>

	</section>	<h2>Galería</h2>

<section class="galeria-fotos">

	<figure class="galeria-fotos__figure">
		<a href="#">
		  <img src="assets/img/logoyo.png" alt="" />		  <figcaption class="galeria-fotos__caption">Caption</figcaption>
		</a>
	</figure>
	<figure class="galeria-fotos__figure">
		  <img src="assets/img/logoyo.png" alt="" />		  <figcaption class="galeria-fotos__caption">Caption</figcaption>
	</figure>
	<figure class="galeria-fotos__figure">
		  <img src="assets/img/logoyo.png" alt="" />		  <figcaption class="galeria-fotos__caption">Caption</figcaption>
	</figure>
	<figure class="galeria-fotos__figure">
		  <img src="assets/img/logoyo.png" alt="" />		  <figcaption class="galeria-fotos__caption">Caption</figcaption>
	</figure>
	<figure class="galeria-fotos__figure">
		<a href="#">
		  <img src="assets/img/logoyo.png" alt="" />		  <figcaption class="galeria-fotos__caption">Caption</figcaption>
		</a>
	</figure>
	<figure class="galeria-fotos__figure">
		  <img src="assets/img/logoyo.png" alt="" />		  <figcaption class="galeria-fotos__caption">Caption</figcaption>
	</figure>
	<figure class="galeria-fotos__figure">
		  <img src="assets/img/logoyo.png" alt="" />		  <figcaption class="galeria-fotos__caption">Caption</figcaption>
	</figure>
	<figure class="galeria-fotos__figure">
		  <img src="assets/img/logoyo.png" alt="" />		  <figcaption class="galeria-fotos__caption">Caption</figcaption>
	</figure>

</section>	<section>

	<h2>Posts</h2>
		
	<h2 class="h2">Encabezado h2</h2>	
	<h3>Encabezado h3</h3>
	<article class="article-post">

	<figure class="article-post__figure">
		<a href="#">
		  <img src="assets/img/logoyo.png" alt="" />		  <figcaption>Caption</figcaption>		</a>
	</figure>

	<p class="basefont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis excepturi, sequi consequuntur. Magni, ipsa adipisci ea nam, repellendus illum, possimus minima nulla blanditiis eveniet facere porro dolor reiciendis officia autem.</p>

<p class="altfont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis excepturi, sequi consequuntur. Magni, ipsa adipisci ea nam, repellendus illum, possimus minima nulla blanditiis eveniet facere porro dolor reiciendis officia autem.</p>

<p class="codefont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis excepturi, sequi consequuntur. Magni, ipsa adipisci ea nam, repellendus illum, possimus minima nulla blanditiis eveniet facere porro dolor reiciendis officia autem. <abbr title="HyperText Markup Language">HTML</abbr></p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sed numquam eum perspiciatis, dicta nulla praesentium! This is <a href="#">an inline link</a>. Quaerat itaque quo debitis similique, eaque vitae rem nobis deserunt assumenda eius, in nesciunt?
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, vel porro consequuntur atque itaque delectus quae unde natus ab fugiat, soluta doloribus reprehenderit veritatis, explicabo, libero ipsam. Quaerat, unde repellat.</p>

	<blockquote cite="http://www.worldwildlife.org/who/index.html">
For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.
</blockquote>
	
	<h3>Estilos de texto:</h3>

		<p>
			<strong>Strong:</strong> de utiliza para dar importancia.

			<em>Énfasis:</em> es para resaltar palabras o frases.

			<b>B:</b> se utiliza para resaltar visualmente texto, sin importancia semántica.

			<i>I:</i> Usado para destacar del texto normal.

			<u>U:</u> Subrayado renderizado sin importancia textual.

			<del>Texto eliminado</del> y <ins>texto insertado.</ins>

			Superíndice<sup>©</sup> y subíndice H<sub>2</sub>O.

			<s>Texto tachado.</s>

			Abreviación: <abbr title="Cascade Style Sheet">CSS</abbr>.

			Citas: <q cite="http://www.imdb.com/title/tt0468569/quotes?item=qt0484227">Some men just want to watch the world burn</q>

			Mark indica <mark>un elemento resaltado</mark>

			Fechas: <time datetime="25-03-1977T14:30+00:00">Mi cumpleaños</time>
		</p>
		
		<hr>

		<small>Small, para la "letra pequeña": Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur neque voluptatibus dolores fugiat, nemo doloribus enim quaerat ex sed perferendis facilis aperiam perspiciatis rem, minus quibusdam dicta veritatis dolorem doloremque.</small>

	</article>

</section>	<h2>Modulo Lists</h2>

<section class="modulo-list">

	<ol class="modulo-list__ordered">
	    <li class="modulo-list__item">Bread</li>
	    <li class="modulo-list__item">Milk</li>
	    <li class="modulo-list__item">Eggs</li>
	    <li class="modulo-list__item">Butter</li>
	</ol>

	<ul class="modulo-list__unordered">
		<li class="modulo-list__item">Elemento lista</li>
		<li class="modulo-list__item">Elemento lista</li>
		<li class="modulo-list__item">Elemento lista xx</li>
		<li class="modulo-list__item">Elemento lista</li>
		<li class="modulo-list__item">Elemento</li>
	</ul>

	<dl class="modulo-list__definition">
		<dt>Titulo</dt>
		<dd>item lista de definición</dd>
		<dd>item lista</dd>
		<dt>Titulo</dt>
		<dd>item</dd>
		<dd>item</dd>
	</dl>	

</section>

<section class="modulo-list modulo-list--horizontal">

	<ol class="modulo-list__ordered">
	    <li class="modulo-list__item">Bread</li>
	    <li class="modulo-list__item">Milk</li>
	    <li class="modulo-list__item">Eggs</li>
	    <li class="modulo-list__item">Butter</li>
	</ol>

	<ul class="modulo-list__unordered">
		<li class="modulo-list__item">Elemento lista</li>
		<li class="modulo-list__item">Elemento lista</li>
		<li class="modulo-list__item">Elemento lista xx</li>
		<li class="modulo-list__item">Elemento lista</li>
		<li class="modulo-list__item">Elemento</li>
	</ul>

	<dl class="modulo-list__definition">
		<dt>Titulo</dt>
		<dd>item lista de definición</dd>
		<dd>item lista</dd>
		<dt>Titulo</dt>
		<dd>item</dd>
		<dd>item</dd>
	</dl>	

</section>		<h2>Formulario</h2>

	<section>

		<form action="" method="post">

			<fieldset>

				<legend>Form Grid</legend>

				<div class="col-6-6">
				
					<div class="grid-form">
				
						<div class="grid-form__item">
							<label for="name">Nombre</label>
							<input type="text" id="name" name="name">
						</div>
										  	
						<div class="grid-form__item">
							<label>URL</label>
							<input type="url">
						</div>
										  	
						<div class="grid-form__item">
							<label>Number</label>
							<input type="number">
						</div>
										  	
						<div class="grid-form__item">
							<label>Tel</label>
							<input type="tel">
						</div>
									
						<div class="grid-form__item">
							<label>Search</label>
							<input type="search">
						</div>
									
						<div class="grid-form__item">
							<label for="password">Password</label>
							<input type="password" id="password" name="password">
						</div>
										
						<div class="grid-form__item">
					  		<label>Datetime-Local</label>
							<input type="datetime-local">
					  	</div>
				
						<div class="grid-form__item">
							<label for="file">File</label>
							<input type="file" id="file" name="file">
						</div>
				
					  	<div class="grid-form__item">
					  		<label for="favoriteDwarf">Select</label>
							<select id="favoriteDwarf" name="favoriteDwarf">
							
							<option value=""></option>			
							<optgroup label="Disney">
								<option value="">Bashful</option>
								<option value="">Doc</option>
								<option value="">Dopey</option>
							</optgroup>
				
							<optgroup label="Tolkien">
								<option value="">Dwalin</option>
								<option value="">Balin</option>
								<option value="">Kili</option>
								<option value="">Fili</option>
							</optgroup>

							</select>

					  	</div>
				
					  	<div class="grid-form__item">
					  		<input type="radio" id="awesomeYes" name="awesome" class="radio">
							<label for="awesomeYes">Yes</label>
					  	</div>
				
					  	<div class="grid-form__item">
					  		<input type="checkbox" id="interestSnakeCharming" name="interests" class="checkbox">
							<label for="interestSnakeCharming">Snake Charming</label>
					  	</div>
				
					  	<div class="grid-form__item">
					  		<label for="comments">Comments</label>
							<textarea cols="30" rows="5" id="comments" name="comments"></textarea>
					  	</div>
				
						<div class="grid-form__item">
							<input type="reset" value="Reset" class="btn">
							<input type="submit" value="Submit" class="btn">
							<input type="button" value="Button" class="btn">
							<input type="image" src="assets/img/logoyo_icoform.png">
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Submit</button>
							<button type="button" class="btn">Button</button>
						</div>
				
						<div class="grid-form__item">
							<label>Email</label>
							<input type="email" required>
						</div>
							  			  	
						<div class="grid-form__item">
							<label>Month</label>
							<input type="month">
						</div>
							  			  	
						<div class="grid-form__item">
							<label>Date</label>
							<input type="date">
						</div>
							  			  		  	
						<div class="grid-form__item">
							<label>Week</label>
							<input type="week">
						</div>
							  		
						<div class="grid-form__item">
							<label>Time</label>
							<input type="time">
						</div>
							  		
						<div class="grid-form__item">
							<label>Datetime</label>
							<input type="datetime">
						</div>
					</div>
				
					<div class="color-base-invert">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ducimus consequuntur suscipit quasi, dolor harum consectetur nulla nobis animi doloremque, mollitia quo, soluta adipisci omnis repellat consequatur fuga accusantium quam.</p>
					</div>

				</div>

	  		</fieldset>

		</form>

	</section>
</main>

	<section>
		
		<h2>Layout</h2>

		<div class="header">
		  <div>header logo</div>
		  <div>banner</div>
		</div>

		<div class="wrapper">

		  <div class="aside">contenido aside</div>

		  <div class="main">
		    
		    <div>jnd </div>
		    <div>contenido</div>
		    <div>contenido</div>
		    <div>contenido wuihbcwiu</div>
		    
		    <div>contenido</div>
		    <div>contenido uiwqbehiwu ebd wiuedyb</div>
		    <div>contenido</div>
		    <div>contenido</div>
		    
		    <div>contenido</div>
		    <div>contenido wbdiuqbe</div>
		    <div>contenido</div>
		    <div>contenido</div>
		    
		  </div>

		  <div class="sidebar">contenido sidebar</div>

		</div>

		<div class="footer">

		  <div>
		  <h4>contenido footer</h4>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, harum aliquam architecto earum provident quibusdam voluptates fugiat illo ex tenetur, iure labore voluptas. Ea dolores perferendis dolorum odit est, consectetur.</p>
		  </div>
		  <div>
		  <h4>contenido footer</h4>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde corporis quos dolore doloremque tempora ut delectus ex at laudantium distinctio culpa, praesentium est placeat sit neque nihil facilis dolores ullam!</p>
		  </div>
		  <div>
		  <h4>contenido footer</h4>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga pariatur aut beatae dolore, earum sint, praesentium, provident officia corrupti magni dolor tempore sequi officiis illo sunt aperiam. Tempore, ut, doloremque.</p>
		  </div>

		</div>

	</section>

	
	<h2>Enlaces externos</h2>
<footer class="footer">
	<a class="btn" href="http://sergiofores.net" target="_blank"></a>
	<a class="btn" href="http://sergiofores.net"></a>
</footer>
</body>	
</html>