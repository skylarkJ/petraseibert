<?php /* Template Name: contact */ ?>

<?php

?>
<!DOCTYPE html>

<?php include('vars.php');?>
<html lang="en" xml:lang="en" xmlns= "http://www.w3.org/1999/xhtml">
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
    <?php include('head.php'); ?>
    <body>
        <?php include('header.php'); ?>
        <div class="grid">
            <!--    
            <form for="email" id="form-register" action="?" method="post" class="newsletter">
                <input id="contact-email" name="email" id="email" type="email" value="" placeholder="Register your email to our newsletter" />
                <input id="contact-submit" type="submit" value="register" />
            </form> -->

            <!-- Begin MailChimp Signup Form -->

            <div id="mc_embed_signup">
            <form id="form-register" action="//petraseibertova.us14.list-manage.com/subscribe/post?u=9f5cce55650c1e4f1abb76206&amp;id=cf5b43b772" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" class="newsletter" novalidate>
                <div id="mc_embed_signup_scroll">
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Register your email to our newsletter" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9f5cce55650c1e4f1abb76206_cf5b43b772" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="register" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
            </form>
            </div>

            <!--End mc_embed_signup-->

            <div class="contact xs-100 sm-50">
                <h3>Contact</h3>
                <a class="mail" href="mailto:petra.seibertova@gmail.com">Email</a><br>
                <a class="phone" href="tel:617-840-0577">Phone</a>
                
                <div class="location">Mashpee, MA</div> 
            </div>

       </div> 

       <?php include('footer.php'); ?>

       <script>
            // custom JS code for email subscription
            ;( function( $, window, document, undefined ) {

                'use strict';
             
                var form        = '.newsletter',
                    className   = 'newsletter--active',
                    email       = 'input[type="email"]';
             
                $( form ).each( function()
                {
                    var $form   = $( this ),
                        $email  = $form.find( email ),
                        val     = '';
             
                    $email.on( 'keyup.addClassWhenEmail', function()
                    {
                        val = $email.val();
                        $form.toggleClass( className, val != '' && /^([\w-\.]+@([\w-]+\.)+[\w-]{2,12})?$/.test( val ) );
                    });
                });
            })( jQuery, window, document );

        </script>
    </body>

</html>