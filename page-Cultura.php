<?php
    
    get_header(); 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" type="text/css" rel = "styleSheet">
    <title>Cultura</title>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Stylish" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Stylish" rel="stylesheet">
</head>
<body>


 

 <div class = "all">   

              

<div class = "DashBoard2">

<style>
   
</style>
<div class = "InfoPage">
<div class = "categoria">
Cultura:
</div>


<div class = "searchBar">

</div>
</div>


<div class = "Materias">

    <div class = "MateriasCultura" id ="MateriasCultura">

    <?php
   
                    $CategoriaSemHtml; 
                    $p = 0; 
                    $npost = 0;  
                    $args = array(
                        'post_type' => 'post', 
                        'posts_per_page' => 100, 
                    ); 
                    $blogposts = new WP_Query($args); 
                    while($blogposts->have_posts()){
                        $blogposts->the_post();
                        $npost++;

                   

                     foreach((get_the_category()) as $category) { 
                        $CategoriaSemHtml = $category->cat_name . ' '; 
                        } 
                        if(strcmp($CategoriaSemHtml,"Cultura") == 1){
                           
                            
                      
                    

                       
    ?>
                    
           
          

    
        <div class = "CardCultura">
<a href = " <?php  the_permalink();?>" >
<div class = "CulturaImg">
    <img  id = "CulturaCardImagem1" src = "<?php the_post_thumbnail_url()    ?>" >
</div>
</a>

<div class = "CulturaCard-titulo">
 
<a href = " <?php  the_permalink();?>" >
  <?php the_title(); ?></div>
  </a>
<div class = "CulturaCard-Subtitulo">
<a href = " <?php  the_permalink();?>" id = "subt">
    <?php the_author();?>
    </a>   
</div>

</a>
</div>  
    
<?php 
                        }
                    } 
?>
<?php wp_reset_query(); ?>
<!-- 
seletorPagina  -->


 <div class = "CarregarMais" id = "CarregarCultura">
   Carregar mais...
</div>





    </div>

 </div>   




</div>

<!-- fotter -->



</div>

</body>


<style>


</style>
</html>


<?php
    
    get_footer(); 
?>