<?php
get_header();
?>

<?php 


?>

<script>
alert("asdfsadfsdfsdfsdf") 
</script>




<!--Aqui entra o modelo de texto de atulidades-->

<div class = "all">
<div class="DashBoardMateriaCultura">
<?php
                    $npost = 0;  
                    $args = array(
                        'post_type' => 'post', 
                        'posts_per_page' => 100, 
                    ); 
                    $blogposts = new WP_Query($args); 
                    
                        $blogposts->the_post();
                       
                       the_post();
                       
                    
?>
<!--Titulo-->
<div class = "CategoriaMateria">
    
    <p id = "uppercase">
        <?php 
        foreach((get_the_category()) as $category) { 
        echo $category->cat_name . ' '; 
        } 
        ?>
    </p>

<br></div>  <div class = "SocialMedia"></div>
<div class = "TituloMateria"><?php the_title(); ?></div>
<div class =  "autor_data"><span id = "AutorPost"><?php the_author();?></span><span id= "DataPost"></span><?php the_date();?></div>
<!--Subtitulo-->
<div class = "SubtituloMateria"><?php the_excerpt(); ?></div>

<!--Capa-->
<div class = "CapaCultura" id= "CapaCultura">
<img  id ="FotoCapaCultura" src = "<?php the_post_thumbnail_url()    ?>">
<div class = "LegendaCapa" id= "LegendaCapa">
<?php the_post_thumbnail_caption(); ?>
</div>
</div>    
<!--Texto-->







<div class = "TextoCultura">
<?php the_content();?>
</div>   

<style>

img{
    width:100%;
}


</style>


<!--Aqui Termina -->
</div>





</div>
<?php 
                    

?>

<?php
get_footer();
?>