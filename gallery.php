<?php 
    $products = get_posts([
      'posts_per_page' => -1,
      'category_name' => isset($category_name) ? $category_name : ''
    ]); 
?>

<section class="gallery">

    <div class="grid">
     

        <?php foreach ($products as $product) : 

          $imgSrc = wp_get_attachment_url(get_post_thumbnail_id($product->ID))

        ?>
            <a href="<?= get_permalink($product->ID); ?>" target="_blank" class="anchor-blocks product xs-100 sm-33">
            
              <img src="<?= $imgSrc ?>" class="product-image">
              <p class="title"><?= $product->post_title ?></p>
              <div class="product-button"><p class="details">View Details</p></div>
        
            </a>

        <?php endforeach; ?>

    </div>
</section>

