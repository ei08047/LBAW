

<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
Copyright 2016 NOW - News On Wire. All rights reserved.
</div>

</div>
<!-- # Footer Ends -->
<a href="#works" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>



<!-- jquery -->
<script src="{$BASE_URL}javascript/jquery.js"></script>

<!-- wow script -->
<script src="{$BASE_URL}javascript/wow.min.js"></script>


<!-- boostrap -->
<script src="{$BASE_URL}javascript/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="{$BASE_URL}javascript/touchSwipe.min.js"></script>
<script src="{$BASE_URL}javascript/respond.js"></script>

<!-- gallery -->
<script src="{$BASE_URL}javascript/jquery.blueimp-gallery.min.js"></script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

    $(function () {

        var links = $('.sidebar-links > div');

        links.on('click', function () {

            links.removeClass('selected');
            $(this).addClass('selected');

        });
    });

</script>

</body>
</html>