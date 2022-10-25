<!DOCTYPE html>
<html lang="en">
<head>

	<title>Fragrance Store</title>
	<? include "parts/meta.php"; ?>

</head>
<body>
	<header>
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Fragrance Store</h1>
			</div>
			<div class="flex-stretch"></div>
			<div class="flex-none nav">
				<ul class="container display-flex">
					<li><a href="#article1">Aromatic</a></li>
					<li><a href="#article2">Floral</a></li>
					<li><a href="#article3">Green</a></li>
					<li><a href="#article4">Woody</a></li>
				</ul>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="card soft">
			<h2>Grid</h2>
				

				<!-- <div class="grid"></div> -->
				<div class="grid gap xs-small md-medium text-center">
					<div class="col-xs-6">Column 6</div>
					<div class="col-xs-6">Column 6</div>
					
					<div class="col-xs-4">Column 4</div>
					<div class="col-xs-4">Column 4</div>
					<div class="col-xs-4">Column 4</div>

					<div class="col-xs-3">Column 3</div>
					<div class="col-xs-3">Column 3</div>
					<div class="col-xs-3">Column 3</div>
					<div class="col-xs-3">Column 3</div>

					<div class="col-xs-2">Column 2</div>
					<div class="col-xs-2">Column 2</div>
					<div class="col-xs-2">Column 2</div>
					<div class="col-xs-2">Column 2</div>
					<div class="col-xs-2">Column 2</div>
					<div class="col-xs-2">Column 2</div>					

					<div class="grid ten col-xs-12 gap">
						<div class="col-xs-2">Column 2</div>
						<div class="col-xs-2">Column 2</div>
						<div class="col-xs-2">Column 2</div>
						<div class="col-xs-2">Column 2</div>
						<div class="col-xs-2">Column 2</div>
					</div>
				</div>
				
		</div>
	</div>

	<div class="container">
		<div class="card soft">
			<h2>Responsive Grid</h2>
			<div class="grid gap text-center">
				<div class="col-xs-12 col-md-6">Column 6</div>
				<div class="col-xs-12 col-md-6">Column 6</div>
				<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
				<div class="col-xs-12 col-md-4 col-xl-6">Column 6</div>
				<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>

				<div class="col-xs-12 col-md-3 col-xl-2">Column 2</div>
				<div class="col-xs-12 col-md-3 col-xl-4">Column 4</div>
				<div class="col-xs-12 col-md-3 col-xl-4">Column 4</div>
				<div class="col-xs-12 col-md-3 col-xl-2">Column 2</div>

				<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
				<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
				<div class="col-xs-12 col-md-4 col-xl-6">Column 6</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="grid gap xs-small md-medium">
			<div class="col-xs-6 col-md-3">
				<div class="card soft"><img src="http://via.placeholder.com/500" alt="" class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft"><img src="http://via.placeholder.com/500" alt="" class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft"><img src="http://via.placeholder.com/500" alt="" class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft"><img src="http://via.placeholder.com/500" alt="" class="media-image"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<article id="article1" class="article">
			<h2>Aromatic</h2>
			<div class="article-body">
				<p>Aromatic notes are usually combined of sage, rosemary, cumin, lavender and other plants which possess a very intensive grass-spicy scent.</p>
				<p>They are often combined with citrusy and spicy notes. Aromatic compositions are typical of fragrances for men.</p>
			</div>
		</article>
		<article id="article2" class="article">
			<h2>Floral</h2>
			<div class="article-body">
				<p>Floral scent, or flower scent, is composed of all the volatile organic compounds (VOCs), or aroma compounds, emitted by floral tissue (e.g. flower petals). Other names for floral scent include, aroma, fragrance, floral odour or perfume.</p>
				<p>Flower scent of most flowering plant species encompasses a diversity of VOCs, sometimes up to several hundred different compounds.</p>
				<p class="last-paragraph">Placeat error maiores, dignissimos a voluptatibus, reprehenderit quas nulla voluptas recusandae consequuntur, ducimus cumque illum et cum suscipit dolore, necessitatibus omnis quibusdam hic eius eveniet doloribus. Reprehenderit unde recusandae, ea neque eligendi nemo quos facere quia, officiis harum illo, aperiam.</p>
			</div>
		</article>
	</div>
	<div class="view-window" style="background-image: url(img/background2.jpg);"></div>
	<div class="container">
		<article id="article3" class="article">
			<h2>Green</h2>
			<div class="article-body">
				<p>By the term "green" we refer to notes of snapped leaves and freshly-cut grasses, which exude a piquant quality. In this classification we find some of the classic pungent essences, such as galbanum, which is actually a resin from a tall type of grass with a bracing, piercingly bitter green odor profile. </p>
				<p>This is the decidedly spring-like top note of vintage Vent Vert by Balmain where it was first put to use in a starring role.</p>
			</div>
		</article>
		<article id="article4" class="article">
			<h2>Woody</h2>
			<div class="article-body">
				<p>Woody fragrances are characterized by aromatic or citrus head notes. In the heart you would typically find crisp, dry woody notes and dominant resin or wood are found in the base notes.</p>
				<p>Wood ingredients add richness, warmth, elegance and a depth to a fragrance and are key in perfume making. Fragrances that are dominated by woody scents typically contain Sandalwood, Pine, Patchouli, Vetiver and Cedarwood.</p>
				<p>Sandalwood is creamy and sensual, Patchouli is like a deep woodland, Vetiver is smoky and rich, Cedarwood is dry and linear and Oudh is complex and heavy.</p>
			</div>
		</article>
	</div>
	
</body>
</html>