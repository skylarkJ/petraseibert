<!DOCTYPE html>
<?php include('vars.php');?>
<html lang="en" xml:lang="en" xmlns= "http://www.w3.org/1999/xhtml">
    <?php include('head.php'); ?>
    <body>
        <?php include('header.php'); ?>
    <div class="grid">
        <div class="form-intro">
            <p class="parag">I will be happy to help you with your custom idea. Fill out the form bellow to find out more about the process and I will be in touch with you right away.</p>
        </div>
        <div>
            <p class="error-style" id="feedback"><?= $feedback; ?></p>
        </div>
        <form class="form-custom" action="?" method="post">

            <div class="field-wrap"> 
                <label for="name">First and Last Name<span>*</span></label>
                <input class="fields-short" type="text" name="name" id="name" required>
            </div>

            <div class="field-wrap">
                <label for="email">Your Email<span>*</span></label>
                <input class="fields-short" type="email" name="email" id="email" required>
            </div>

            
            <div class="field-wrap">
                <label for="phone">Phone Number<span>*</span></label>
                <input class="fields-short" type="text" name="phone" id="phone" required>
            </div>

            <div class="field-wrap">
                <label for="designedfor">Who is the piece being designed for?<span>*</span></label>
                <input class="fields-small" type="text" name="designedfor" id="designedfor" required>
            </div>

            <div class="field-wrap">
                <label for="describefor">I would love to find out more about the above person. Think looks, lifestyle, hobbies, career, activity level, interest, taste, fashion style, colors, etc.</label>
                <textarea class="fields-big" name="describefor" id="describefor"></textarea>
            </div>

            <div class="field-wrap">
                <label for="describepersonality">List 3 words that describe this person's personality</label>
                <textarea name="describepersonality" id="describepersonality"></textarea>
            </div>

            <div class="field-wrap">
                <label for="inspires">What inspires this person?</label>
                <textarea name="inspires" id="inspires"></textarea>
            </div>

            <div class="field-wrap">
                <label for="typepiece">What type of piece would you like designed?</label>
                <input type="text" name="typepiece" id="typepiece">
            </div>

            <div class="field-wrap">
                <label for="typemetal">Do you have a preference for Yellow, White or Rose gold? Platinum?</label>
                <input type="text" name="typemetal" id="typemetal">
            </div>

            <div class="field-wrap">
                <label for="describetastes">Describe the type of jewelry this person wears, owns, aspires to own, or loves. Please include any specific links if available.</label>
                <textarea name="describetastes" id="describetastes"></textarea>
            </div>

            <div class="field-wrap">
                <label for="ringsize">Rings Size (if applicable)</label>
                <input type="text" name="ringsize" id="ringsize">
            </div>

            <div class="field-wrap">
                <label for="wristsize">Wrist Size (if applicable)</label>
                <input type="text" name="wristsize" id="wristsize">
            </div>

            <div class="field-wrap">
                <label for="necksize">Neck Size (if applicable)</label>
                <input type="text" name="necksize" id="necksize">
            </div>

            <div class="field-wrap">
                <label for="budget">What is your budget? (if applicable)</label>
                <input type="text" name="budget" id="budget">
            </div>

            <div class="field-wrap">
                <label for="tradein">Do you have gold or platinum jewelry that you would like to trade in?</label>
                <input type="text" name="tradein" id="tradein">
            </div>

            <div class="field-wrap">
                <label for="referral">How did you hear about me? Who can I thank for the referral?</label>
                <input type="text" name="referral" id="referral">
            </div>
            
            <!--
            <div class="field-wrap">
                <label for="picture">Upload any inspiration images you'have collected.</label>
                <input class="upload-style" type="file" name="inspiration_image1" id="picture">
                <input class="upload-style" type="file" name="inspiration_image2" id="picture">
                <input class="upload-style" type="file" name="inspiration_image3" id="picture">
                <input class="upload-style" type="file" name="inspiration_image4" id="picture">
                <input class="upload-style" type="file" name="inspiration_image5" id="picture">
            </div>
            -->

            <input id="custom-submit" type="submit" value="SEND">
        </form>

        <div class="msg">Thank you for getting in touch. I will get back to you shortly<span class="heart">&#9829;</span></div>
        
    </div>





    </body>
    <?php include('footer.php'); ?>

    <script>
        // custom JS code
        !function(window, document, $, undefined) {

            var $form = $('.form-custom').on('submit', function(e) {

                e.preventDefault();

                var $request = $.ajax({
                    url: '<?= THEME_ROOT ?>/form-script.php',
                    type: 'POST',
                    data: $form.serialize()
                });

                $request.done(function() {
                    $form.remove();
                    $('.parag').remove();
                    $('.msg').show();
                });

                $request.fail(function() {
                    console.error(arguments);
                });


                return false;
            });

        }(window, document, jQuery);
    </script>
</html>



