<!DOCTYPE html>
<html>
<head>
    <title>Smooth Scrolling</title>
    <link rel="stylesheet" href="css.css">
</head>
 
<body>
 
    <section id="halaman1" class="section">
        <h2>Halaman 1</h2>
        <a href="#halaman2">Klik Disini untuk ke Halaman 2</a>
    </section>
    
    <div class="separator">
        <h3>Another Section Starts Here</h3>
    </div>

    <section id="halaman2" class="section">
        <h2>Halaman 2</h2>
        <a href="#halaman1">Klik Disini untuk ke Halaman 1</a>
    </section>

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