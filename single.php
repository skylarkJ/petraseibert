<?php
   $id = url_to_postid(get_permalink());
   $post = get_post($id);
   $category = get_the_category($id)[0];
   $category_name = $category->name;
   $img = get_the_post_thumbnail($id, 'full', array('class' => 'framed featured-image'));
   $content = apply_filters('the_content', $post->post_content);
?>

<!DOCTYPE html>
<?php include('vars.php');?>
<html lang="en" xml:lang="en" xmlns= "http://www.w3.org/1999/xhtml">
    <?php include('head.php'); ?>
    <body>
        <?php include('header.php'); ?>


      <section class="single contentSect">
         <div class="grid">
             <h1><?= $post->post_title ?></h1>
             <div class="xs-100 sm-33">
                 <article class="post">
                     <?= $img ?>
                     <div class="content">
                         <?= $content ?>
                     </div>
                 </article>
             </div>
             <div class="xs-100 sm-33">
                 <aside class="additional-posts">

                     <?php
                         $options = array(
                             'numberposts' => 5,
                             'orderby' => 'rand',
                             //'category' => $category->cat_ID,
                             'exclude' => array($id)
                         );
                         $related_posts = get_posts($options, OBJECT);
                         foreach ($related_posts as $related_post) :
                             $img = get_the_post_thumbnail($related_post->ID, 'full', array('class' => 'framed'));
                     ?>
                             <a class="post-tile" href="<?= get_permalink($related_post->ID) ?>">
                                 <p><?= $related_post->post_title ?></p>
                                 <?= $img ?>
                             </a>

                     <?php endforeach; ?>

                 </aside>
             </div>
         </div>

      </section>

    </body>
</html>
