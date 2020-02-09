<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<h1 class="text">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    </h1>

    <div class="backTop">Back to Top</div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    var $backToTop = $(".backTop");
    $backToTop.hide();
    $(window).on('scroll', function() {
      if ($(this).scrollTop() > 100) {
        $backToTop.fadeIn();
      } else {
        $backToTop.fadeOut();
      }
    });

    $backToTop.on('click', function(e) {
      $("html, body").animate({scrollTop: 0}, 500);
    });
</script>
</body>
</html>