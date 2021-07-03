<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>

    </head>
    <body>

    <header id="cabecalho" class="container">
	
	<div id="btn-menu"></div>
    
	<div class="top-nav">
		
		 <div class="top-nav_right">
		 <div class="menu">

			<div class="cssmenu">
                <?php echo do_shortcode('[menu-categorias]'); ?>
			</div>

			<div class="clear"></div>
		</div>

	
	</div>
			
 	<div class="clear"></div>

    </header>
    
