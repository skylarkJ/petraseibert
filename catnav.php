<?php

$options = [
        'hide_empty' => false,
        'type' => 'post',      
        'orderby' => 'description',
        'order' => 'ASC',
        'exclude' => '1'
        ];

$categories = get_categories($options);


?>

<nav class="cat-nav">

    <div class="grid">
            <?php foreach ($categories as $cat) : ?>
                <?php 
                    $activeClass = isset($category_name) && $cat->name === $category_name ? 'active' : '';
                ?>
                <div class="xs-33 sm-33 sm-16">
                    <a class="<?= $activeClass ?>" href="<?= SITE_URL.'/'.$cat->name ?>"><span><?= $cat->name ?></span></a>
                </div>
            <?php endforeach; ?>


    </div>

</nav>
