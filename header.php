<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste publicação</title>
    

    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Stylish" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Stylish" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Special+Elite" rel="stylesheet">
</head>
<body>
    
    
    
<?php wp_head();
?>

<!--   headder ------ -->
    <div class = "all">
    <div class = headder-container>
    <div class = "header-titulo">
    <?php echo get_bloginfo( 'name' ); ?>
    
    <div class = "header-subtitulo">
    <?php echo get_bloginfo( "description" ); ?>
    </div>    
    </div>
    <div class = "header-Menu">
            <nav id="menu-header">
                    <ul>
                        <li><a href="<?php echo site_url(''); ?> ">Home</a></li>
                        <li><a href="<?php echo site_url('/Cultura'); ?> ">Cultura</a></li>
                        <li><a href="<?php echo site_url('/Atualidades'); ?> ">Atualidades </a></li>
                        <li><a href="<?php echo site_url('/EV'); ?> ">Estilo de vida</a></li>
                        <li><a href="<?php echo site_url('/Contato'); ?> ">Contato</a></li>
                    </ul>
                </nav>
    </div>
    </div>