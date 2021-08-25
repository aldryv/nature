<?php get_header(); ?>
<div id="carrossel-nature" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner">
	  <div class="carousel-item active">
		<img src="https://komodostudio.com.br/wp/wp-content/uploads/2021/08/banner-animais-nature.jpg" class="d-block w-100" alt="Animais">
		<div class="carousel-caption d-md-block">
        <h5>ANIMAIS</h5>
      	</div>
	  </div>
	  <div class="carousel-item">
		<img src="https://komodostudio.com.br/wp/wp-content/uploads/2021/08/banner-florestas-nature.jpg" class="d-block w-100" alt="Florestas">
		<div class="carousel-caption d-md-block">
        <h5>FLORESTAS</h5>
      	</div>
	  </div>
	  <div class="carousel-item">
		<img src="https://komodostudio.com.br/wp/wp-content/uploads/2021/08/banner-montanhas-nature.jpg" class="d-block w-100" alt="Montanhas">
		<div class="carousel-caption d-md-block">
        <h5>MONTANHAS</h5>
      	</div>
	  </div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carrossel-nature" data-bs-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carrossel-nature" data-bs-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Next</span>
	</button>
</div>

<!-- Usabilidade navs & tabs Bootstrap: #pills-{target} onde {target} é o identificador que deseja utilizar para controlar o conteúdo através dos pills-->
<!-- doc em https://getbootstrap.com/docs/5.1/components/navs-tabs/#javascript-behavior -->
<section id="animais">
<h2 class="titulo-section">Animais Espirituais</h2>

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
	<li class="nav-item" role="presentation">
	  <button class="nav-link active" id="pills-fox-tab" data-bs-toggle="pill" data-bs-target="#pills-fox" type="button" role="tab" aria-controls="pills-fox" aria-selected="true">FOX</button>
	</li>
	<li class="nav-item" role="presentation">
	  <button class="nav-link" id="pills-firefox-tab" data-bs-toggle="pill" data-bs-target="#pills-firefox" type="button" role="tab" aria-controls="pills-firefox" aria-selected="false">FIREFOX</button>
	</li>
	<li class="nav-item" role="presentation">
	  <button class="nav-link" id="pills-wolf-tab" data-bs-toggle="pill" data-bs-target="#pills-wolf" type="button" role="tab" aria-controls="pills-wolf" aria-selected="false">WOLF</button>
	</li>
</ul>
<div class="tab-content" id="pills-tabContent">
	<div class="tab-pane fade show active" id="pills-fox" role="tabpanel" aria-labelledby="pills-fox-tab">
		<div id="animais-descricao">
			<div class="ad-foto">
				<img src="https://komodostudio.com.br/wp/wp-content/uploads/2021/08/fox.jpg" alt="Raposa">
				<h2>FOX</h2>
			</div>
			<div class="ad-texto">
				<h3>Características</h3>
				<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
				<h3>Habitat</h3>
				<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="pills-firefox" role="tabpanel" aria-labelledby="pills-firefox-tab">
		<div id="animais-descricao">
			<div class="ad-foto">
				<img src="https://komodostudio.com.br/wp/wp-content/uploads/2021/08/firefox.jpg" alt="Raposa de fogo">
				<h2>FIREFOX</h2>
			</div>
			<div class="ad-texto">
				<h3>Características</h3>
				<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
				<h3>Habitat</h3>
				<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="pills-wolf" role="tabpanel" aria-labelledby="pills-wolf-tab">
		<div id="animais-descricao">
			<div class="ad-foto">
				<img src="https://komodostudio.com.br/wp/wp-content/uploads/2021/08/wolf.jpg" alt="Lobo">
				<h2>WOLF</h2>
			</div>
			<div class="ad-texto">
				<h3>Características</h3>
				<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
				<h3>Habitat</h3>
				<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
			</div>
		</div>
	</div>
</div>
</section>

<section id="florestas">
	<h2 class="titulo-section">Florestas Termais</h2>
	
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		<li class="nav-item" role="presentation">
		  <button class="nav-link active" id="pills-estrada-tab" data-bs-toggle="pill" data-bs-target="#pills-estrada" type="button" role="tab" aria-controls="pills-estrada" aria-selected="true">ESTRADA</button>
		</li>
		<li class="nav-item" role="presentation">
		  <button class="nav-link" id="pills-sol-tab" data-bs-toggle="pill" data-bs-target="#pills-sol" type="button" role="tab" aria-controls="pills-sol" aria-selected="false">SOL</button>
		</li>
		<li class="nav-item" role="presentation">
		  <button class="nav-link" id="pills-verde-tab" data-bs-toggle="pill" data-bs-target="#pills-verde" type="button" role="tab" aria-controls="pills-verde" aria-selected="false">VERDE</button>
		</li>
	</ul>
	<div class="tab-content" id="pills-tabContent">
		<div class="tab-pane fade show active" id="pills-estrada" role="tabpanel" aria-labelledby="pills-estrada-tab">
			<div id="florestas-descricao">
				<div class="fd-foto">
					<img src="https://komodostudio.com.br/wp/wp-content/uploads/2021/08/estrada.jpg" alt="Estrada">
					<div class="titulo-imagem-florestas">ESTRADA</div>
				</div>
				<div class="fd-texto">
					<div>
						<h3>Características</h3>
						<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
					</div>
					<div>
						<h3>Habitat</h3>
						<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="pills-sol" role="tabpanel" aria-labelledby="pills-sol-tab">
			<div id="florestas-descricao">
				<div class="fd-foto">
					<img src="https://komodostudio.com.br/wp/wp-content/uploads/2021/08/sol.jpg" alt="Sol">
					<div class="titulo-imagem-florestas">SOL</div>
				</div>
				<div class="fd-texto">
					<div>
						<h3>Características</h3>
						<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
					</div>
					<div>
						<h3>Habitat</h3>
						<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="pills-verde" role="tabpanel" aria-labelledby="pills-verde-tab">
			<div id="florestas-descricao">
				<div class="fd-foto">
					<img src="https://komodostudio.com.br/wp/wp-content/uploads/2021/08/verde.jpg" alt="Verde">
					<div class="titulo-imagem-florestas">VERDE</div>
				</div>
				<div class="fd-texto">
					<div>
						<h3>Características</h3>
						<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
					</div>
					<div>
						<h3>Habitat</h3>
						<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="montanhas">
	<h2 class="titulo-section">Lorem Ipsum</h2>
	
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		<li class="nav-item" role="presentation">
		  <button class="nav-link active" id="pills-pico-tab" data-bs-toggle="pill" data-bs-target="#pills-pico" type="button" role="tab" aria-controls="pills-pico" aria-selected="true">PICO</button>
		</li>
		<li class="nav-item" role="presentation">
		  <button class="nav-link" id="pills-montanha-tab" data-bs-toggle="pill" data-bs-target="#pills-montanha" type="button" role="tab" aria-controls="pills-montanha" aria-selected="false">MONTANHA</button>
		</li>
		<li class="nav-item" role="presentation">
		  <button class="nav-link" id="pills-monte-tab" data-bs-toggle="pill" data-bs-target="#pills-monte" type="button" role="tab" aria-controls="pills-monte" aria-selected="false">MONTE</button>
		</li>
	</ul>
	<div class="tab-content" id="pills-tabContent">
		<div class="tab-pane fade show active" id="pills-pico" role="tabpanel" aria-labelledby="pills-pico-tab">
			<div id="animais-descricao"> <!-- reutilizando os mesmos estilos da seção de animais pois o formato de navegação é o mesmo -->
				<div class="ad-foto">
					<img src="https://komodostudio.com.br/wp/wp-content/uploads/2021/08/pico.jpg" alt="Pico">
					<h2>PICO</h2>
				</div>
				<div class="ad-texto">
					<h3>Características</h3>
					<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
					<h3>Habitat</h3>
					<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="pills-montanha" role="tabpanel" aria-labelledby="pills-montanha-tab">
			<div id="animais-descricao">
				<div class="ad-foto">
					<img src="https://komodostudio.com.br/wp/wp-content/uploads/2021/08/montanha.jpg" alt="Montanha">
					<h2>MONTANHA</h2>
				</div>
				<div class="ad-texto">
					<h3>Características</h3>
					<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
					<h3>Habitat</h3>
					<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="pills-monte" role="tabpanel" aria-labelledby="pills-monte-tab">
			<div id="animais-descricao">
				<div class="ad-foto">
					<img src="https://komodostudio.com.br/wp/wp-content/uploads/2021/08/monte.jpg" alt="Monte">
					<h2>MONTE</h2>
				</div>
				<div class="ad-texto">
					<h3>Características</h3>
					<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
					<h3>Habitat</h3>
					<p>Todavia, a valorização de fatores subjetivos oferece uma interessante oportunidade para verificação das formas de ação.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>