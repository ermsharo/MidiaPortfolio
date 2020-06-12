
    <?php
    
    get_header(); 
    ?>

    <div class = "DashBoardHome">


 <script url= "main.js"></script>


 <?php
   $NomeCapa = "Capa";
   $NomeCultura = "Cultura"; 
   $NomeAtualidades = "Atualidades"; 
   
   $NCapa = 0; 
   $NCultura = 0; 
   $NAtualidades = 0 ;  
   $CategoriaSemHtml = 0 ;

   $p = 0; 
   $npost = 0;  
   $args = array(
       'post_type' => 'post', 
       'posts_per_page' => 100, 
   );  

?>



<?php 
 $blogposts = new WP_Query($args); 
 while($blogposts->have_posts()){
     $blogposts->the_post();
     $npost++;



  foreach((get_the_category()) as $category) { 
     $CategoriaSemHtml = $category->cat_name . ' '; 
     } 

if($NCapa == 0){
      
if(strcmp($CategoriaSemHtml,$NomeCapa) == 1){
       $NCapa++;
     
?> 

    <div class = "Cover-container">
    <a href = " <?php  the_permalink();?>" >
    <div class = "Cover">
     <img  id = "coverImage" src = "<?php the_post_thumbnail_url()    ?>">
    </div>
</a>
   
    <div class = "Cover-titulo">
    
   
    <span id = "Categoria"> </span> <span id = "Titulo-capa" >
           
<a href = " <?php  the_permalink();?>" >
            <?php 
            
            the_title();
            ?>
       </a>   
       
       </span> 
            <div class = "Cover-Subtitulo">
           
            <a href = " <?php  the_permalink();?>" >       
            <?php the_excerpt(); ?>
</a>         
       </div>
            </div>
        </div>
        

<?php 
       }

}
   }
   wp_reset_query();
?>


<div class = "EmAlta-container">
        <div class = "EmAlta">
         <img  id = "EmAltaImagem1" src = "https://img.buzzfeed.com/buzzfeed-static/static/enhanced/web04/2012/10/10/15/enhanced-buzz-28948-1349896071-0.jpg?downsize=715:*&output-format=auto&output-quality=auto">
        </div>
        
        <div class = "EmAlta-titulo">
                <span id = "Categoria"> </span> <span id = "Titulo-capa" >Titulo Generico Em Alta</span> 
                <div class = "EmAlta-Subtitulo">
                       subtitulo generico  em alta    
        </div>
                </div>
            </div>
    
      
    
       <div class = "EmAlta-container">
        <div class = "EmAlta">
         <img  id = "EmAltaImagem2" src = "https://img.buzzfeed.com/buzzfeed-static/static/enhanced/web04/2012/10/10/15/enhanced-buzz-28948-1349896071-0.jpg?downsize=715:*&output-format=auto&output-quality=auto">
        </div>
        
        <div class = "EmAlta-titulo">
                <span id = "Categoria"> </span> <span id = "Titulo-capa" >Titulo Generico de Em Alta2</span> 
                <div class = "EmAlta-Subtitulo">
                       subtiulo generico em alta 2     
        </div>
                </div>
            </div>
    
    
 <?php

   $args = array(
       'post_type' => 'post', 
       'posts_per_page' => 100, 
   ); 
  
?>

<?php 
 $blogposts = new WP_Query($args); 
 while($blogposts->have_posts()){
     $blogposts->the_post();
     $npost++;


  foreach((get_the_category()) as $category) { 
     $CategoriaSemHtml = $category->cat_name . ' '; 
     } 


     if($NAtualidades < 2){
if(strcmp($CategoriaSemHtml,$NomeAtualidades) == 1){
          
              $NAtualidades++;                 
?> 
     <div class="Box-atualidades-container">
     <a href = " <?php  the_permalink();?>" >
     <img id = "ImagemArtigo1" src = "<?php the_post_thumbnail_url()    ?>">
       </a>
     <div class = "Titulo-Box-atualidades">
     <a href = " <?php  the_permalink();?>" >     
     <?php the_title();?>
       </a>
     </div>

     <div class = "subtitulo-Box-atualidades">
     <a href = " <?php  the_permalink();?>" >
     <?php the_excerpt(); ?>
       </a>
    </div>          

     </div>
     

<?php 
              }
       }
 }wp_reset_query();
?> 


 <?php
$args = array(
    'post_type' => 'post', 
    'posts_per_page' => 100, 
); 


?>
<?php 
$blogposts = new WP_Query($args); 
while($blogposts->have_posts()){
  $blogposts->the_post();
  $npost++;

foreach((get_the_category()) as $category) { 
  $CategoriaSemHtml = $category->cat_name . ' '; 
  } 
           
if(strcmp($CategoriaSemHtml,$NomeCultura) == 1){
       
    if($NCultura < 2){
           $NCultura++;
                  
?> 
     <div class="Box-Cultura-container">
            <img id = "ImagemArtigo1"  src = "<?php the_post_thumbnail_url()    ?>">
            <div class = "Titulo-Box-Cultura">
                 <?php the_title(); ?>
            </div>
       
            <div class = "subtitulo-Box-Cultura">
                   Subtítulo generico sobre cultura 1
           </div>          
       
    </div>

    <?php 
              }
       }
 }wp_reset_query();
?> 


<?php 
 $blogposts = new WP_Query($args); 
 while($blogposts->have_posts()){
     $blogposts->the_post();
     $npost++;


  foreach((get_the_category()) as $category) { 
     $CategoriaSemHtml = $category->cat_name . ' '; 
     } 
      
if(strcmp($CategoriaSemHtml,$NomeAtualidades) == 2){
          
       if($NAtualidades  < 2){
              $NAtualidades++;
                   

?> 

     <div class="Box-atualidades-container">
     <a href = " <?php  the_permalink();?>" >
     <img id = "ImagemArtigo1" src = "<?php the_post_thumbnail_url()    ?>">
       </a>
     <div class = "Titulo-Box-atualidades">
     <a href = " <?php  the_permalink();?>" >     
     <?php the_title();?>
       </a>
     </div>

     <div class = "subtitulo-Box-atualidades">
     <a href = " <?php  the_permalink();?>" >
     <?php the_excerpt(); ?>
       </a>
    </div>          

     </div>
     

<?php 
              }
       }
 }wp_reset_query();
?> 

<div class = "DashFotter">

<?php get_footer();?> 

</div>



    <!--    fotter  -->
  


<?php
 

?>


