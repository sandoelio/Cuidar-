<?php 

$title_page = "Exames | ";
include dirname(__FILE__). '/../includes/header.php'; ?>


<main class="main mb-0" data-animate="top" data-delay="3">
	 
<header class="page-header" >
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>
					<span>Exames</span>
				</h1>
			</div>
		</div>
	</div>
</header>

<section class=" mb-4">
	<div class="container">

		<div class="row mb-3">

			<div class="col-md-4 text-center flex-lg-last mb-4" data-animate="left" data-delay="3">
				<img src="assets/img/exames/ecocardiograma.jpg" alt="Ecocardiograma Bidimensional com Doppler Colorido" class="w-100" />
			</div><!-- col-lg-6  -->

			<div class="col-md-8 mb-4">
				<h2 class="topic4">Ecocardiograma Bidimensional com Doppler Colorido</h2>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not 
				</p>
			</div>
 
		</div> <!-- row  -->

		<div class="row mb-3">

			<div class="col-md-4 text-center flex-lg-last mb-4" data-animate="left" data-delay="3">
				<img src="assets/img/exames/eletrocardiograma.jpg" alt="Eletrocardiograma" class="w-100" />
			</div><!-- col-lg-6  -->

			<div class="col-md-8 mb-4">
				<h2 class="topic4">Eletrocardiograma</h2>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not 
				</p>
			</div>

		</div> <!-- row  -->

		<div class="row mb-3">

			<div class="col-md-4 text-center flex-lg-last mb-4" data-animate="left" data-delay="3">
				<img src="assets/img/exames/monitorizacao.jpg" alt="Monitorização Residencial da Pressão Arterial (MRPA)" class="w-100" />
			</div><!-- col-lg-6  -->

			<div class="col-md-8 mb-4">
				<h2 class="topic4">Monitorização Residencial da Pressão Arterial (MRPA)</h2>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not 
				</p>
			</div>

		</div> <!-- row  -->

		<div class="row mb-3">

			<div class="col-md-4 text-center flex-lg-last mb-4" data-animate="left" data-delay="3">
				<img src="assets/img/exames/holter.jpg" alt="Holter 24 horas" class="w-100" />
			</div><!-- col-lg-6  -->

			<div class="col-md-8 mb-4">
				<h2 class="topic4">Holter 24 horas</h2>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not 
				</p>
			</div>

		</div> <!-- row  -->
 

		<div class="row mb-3">

			<div class="col-md-4 text-center flex-lg-last mb-4" data-animate="left" data-delay="3">
				<img src="assets/img/exames/cardiopulmonar.jpg" alt="Teste Cardiopulmonar/ Ergoespirometria" class="w-100" />
			</div><!-- col-lg-6  -->

			<div class="col-md-8 mb-4">
				<h2 class="topic4">Teste Cardiopulmonar/ Ergoespirometria</h2>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not 
				</p>
			</div>

		</div> <!-- row  -->

		<div class="row mb-3">

			<div class="col-md-4 text-center flex-lg-last mb-4" data-animate="left" data-delay="3">
				<img src="assets/img/exames/ergometrico.jpg" alt="Teste Ergométrico" class="w-100" />
			</div><!-- col-lg-6  -->

			<div class="col-md-8 mb-4">
				<h2 class="topic4">Teste Ergométrico</h2>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not 
				</p>
			</div>

		</div> <!-- row  -->

	</div> <!-- container  -->
</section>

<aside>
<?php
	$banner = rand(1,6);
?>
	<a href="<?=$config['whatsapp'];?>" target="_blank">
		<img src="assets/img/banner/0<?=$banner;?>.png" class="d-none d-md-block w-100">
		<img src="assets/img/banner/mobile0<?=$banner;?>.jpg" class="d-block d-md-none w-100">
	</a>
</aside>

</main>


<?php 

include dirname(__FILE__). '/../includes/footer.php';

?>