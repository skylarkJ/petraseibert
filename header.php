
<header class="clearfix">
    <div class="xs-100 sm-100">
        <div class="header-top">
            <div class="icons">
                <a class="icon-f icon" id="face" href="https://www.facebook.com/PetraSeibertovaJewelry/?notif_t=fbpage_fan_invite&notif_id=1477850108593319"></a>
                <a class="icon-i icon" id="instagram" href="https://www.instagram.com/petraseibertovajewelry/"></a>
                <a class="icon-p icon" id="pinterest" href="https://www.pinterest.com/petragoldsmith/"></a>
                <a class="icon-t icon" id="twitter" href="https://twitter.com/PetraSeibertova/media"></a>
                <a class="icon-y icon" id="tube" href="https://twitter.com/PetraSeibertova/media"></a>
            </div>
            
            <div class="menu">
                <ul>
                    <li>
                        <a id="custom-button" href="<?= SITE_URL ?>/custom">Check Out My Custom Work</a>     
                    </li>
                    
                    <li> 
                        <div class="menu-about">
                            <div class="diamond-about">
                                <div class="one"></div>
                                <div class="two"></div>
                                <div class="three"></div>
                                <div class="four"></div>
                            </div>
                           
                            <a href="<?= SITE_URL ?>/about">ABOUT</a>
                            
                        </div>
                    </li>

                    <li>
                        <div class="menu-contact">
                            <div class="diamond-contact">
                                <div class="one"></div>
                                <div class="two"></div>
                                <div class="three"></div>
                                <div class="four"></div>
                            </div>
                            <a href="<?= SITE_URL ?>/contact">CONTACT</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- header-top -->

        
        
        <div class="title-wrap">
            
            <div class="name-style">
                <a href="http://petraseibertova.com">
                    <img src="<?php echo IMG_DIR ?>/petra_logo.png" alt="Petra Seibertova Logo">
                </a>
            </div><!-- name-style -->
            
            <div>
                <h2 class="profession-title">Jeweller : : Designer : : Goldsmith</h2>
            </div>
            
        </div> <!-- title-wrap -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= THEME_ROOT ?>/js/jquery-3.1.1.min.js"><\/script>')</script> 

        <script>
            $(document).ready(function(){

                $('.menu-about').hover(function(){
                    $('.diamond-about').fadeIn(500);
                },function(){
                    $('.diamond-about').fadeOut(500);
                }),


                $('.menu-contact').hover(function(){
                    $('.diamond-contact').fadeIn(500);
                },function(){
                    $('.diamond-contact').fadeOut(500);
                })
            })
        </script>

</header> 
   




























    </div> 
</header>