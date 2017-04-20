<?php /* Template Name: custom */ ?>
<?php $page = 'custom'; ?>

<!DOCTYPE html>
<?php include('vars.php');?>
<html lang="en" xml:lang="en" xmlns= "http://www.w3.org/1999/xhtml">
    <?php include('head.php'); ?>
    <body>
        <?php include('header.php'); ?>
        <div class="grid">
            <div class="xs-100">

                <div class="slides">
                    <img src="<?php echo IMG_DIR ?>/slider1.png" alt="">
                    <img src="<?php echo IMG_DIR ?>/slider3.png" alt=""> 
                    <img src="<?php echo IMG_DIR ?>/slider2.png" alt="">
                    <img src="<?php echo IMG_DIR ?>/slider5.png" alt="">
                    <img src="<?php echo IMG_DIR ?>/slider6.png" alt="">
                    <img src="<?php echo IMG_DIR ?>/slider7.png" alt="">
                    <img src="<?php echo IMG_DIR ?>/slider8.png" alt="">
                </div>

            </div>

        </div>

        <div class="grid">

            <div class="information-style">
                <p class="connection">Hey, Connect with me!</p>
            </div>
           
            <div class="container-buttons">
                <a id="button-form" href="<?= SITE_URL ?>/form">Form</a>
                <a  class="contact-style" id="button-phone" href="tel:617-840-0577">(617) 840-0577</a>
                <a id="button-email" href="mailto:petra.seibertova@gmail.com">Email</a>
            </div>
            

        </div>
       
        <?php include('footer.php'); ?>

        <script src="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
        <script>$.fn.slick || document.write('<script src="<?= THEME_ROOT ?>/slick/slick.min.js""><\/script>')</script>


        <script>
            $('.slides').slick({
                autoplay: true,
                arrows: false
            });
             
        </script>

        
    </body>

</html>