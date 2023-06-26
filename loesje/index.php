<!doctype html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<title>Werkkracht - Loesje.nl</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="../loesje/dist/reveal.css">
		<link rel="stylesheet" href="../loesje/dist/theme/simple.css" id="theme">
        
       
	</head>
	<body>
        
<?php

require __DIR__ . '/vendor/autoload.php';

// Prep
$web = new \Spekulatius\PHPScraper\PHPScraper;
$web->go('https://www.loesje.nl/posters');

?>



		<div class="reveal">

			<div class="slides">
				<section data-transition="fade-in slide-out" data-background-color="#ffe182">
					
                    <?php echo '<img src="'.$web->images[1].'" class="stretch" />';
                    
                    ?>
				</section>
                <section data-transition="fade-in slide-out" data-background-color="#bfdaa2">
					
                    <?php echo '<img src="'.$web->images[2].'" class="stretch" />';
                    
                    ?>
				</section>
                <section data-transition="fade-in slide-out" data-background-color="#F6B1A1">
					
                    <?php echo '<img src="'.$web->images[3].'" class="stretch" />';
                    
                    ?>
				</section>
                <section data-transition="fade-in slide-out" data-background-color="#ffe182">
					
                    <?php echo '<img src="'.$web->images[4].'" class="stretch" />';
                    
                    ?>
				</section>
                <section data-transition="fade-in slide-out" data-background-color="#bfdaa2">
					
                    <?php echo '<img src="'.$web->images[5].'" class="stretch" />';
                    
                    ?>
				</section>
                <section data-transition="fade-in slide-out" data-background-color="#F6B1A1">
					
                    <?php echo '<img src="'.$web->images[6].'" class="stretch" />';
                    
                    ?>
				</section>
			</div>

		</div>

		<script src="../loesje/dist/reveal.js"></script>
		<script src="../loesje/plugin/highlight/highlight.js"></script>
		<script>
			Reveal.initialize({
				center: true,
                autoSlide: 5000,
                loop: true,
				hash: false,
                controls: false,
				// plugins: [ RevealHighlight ]
			});
          Reveal.shuffle();
		</script>

	</body>
</html>


