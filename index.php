<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">

    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="my-gallery" class="editable-gallery">
    <a href="img/1.jpg">
        <img src="img/1.jpg" alt="Your Description">
    </a>
    ...
</div>
<div id="my-gallery" class="editable-gallery">
    <a href="img/0.jpg" data-fancybox-group="gallery-1">
        <img src="img/0.jpg" alt="Description here">
    </a>
    ...
</div>

    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.6/js/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).ready( function() {
    // Don't execute if we're in the Live Editor
    if( !window.isCMS ) {
        // Group images by gallery using `data-fancybox-group` attributes
        var galleryId = 1;
        $('.editable-gallery').each( function() {
            $(this).find('a').attr('data-fancybox-group', 'gallery-' + galleryId++);
        });
        // Initialize Fancybox
        $('.editable-gallery a').fancybox({
            // Use the `alt` attribute for captions per http://fancyapps.com/fancybox/#useful
            beforeShow: function() {
                var alt = this.element.find('img').attr('alt');
                this.inner.find('img').attr('alt', alt);
                this.title = alt;
            }
        });
    }
    });

    </script>
  </body>
</html>
