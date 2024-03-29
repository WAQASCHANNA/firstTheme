<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>

<?php get_header(); ?>

<section>
  <nav>
    <ul>
      <li><a href="#">London</a></li>
      <li><a href="#">Paris</a></li>
      <li><a href="#">Tokyo</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>London</h1>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article>
</section>

<hr> 

<?php  
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <h1> <a href= "<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h1>
        <p> <?php the_content(); ?> </p>
        <hr>
        <?php 
    endwhile;
endif;

?>


<?php get_footer(); ?>


</body>
</html>

