    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
      jQuery(window).scroll(function(){
        var vscroll =jQuery(this).scrollTop();
        jquery('#logotext').css({
          "tranform":"translate(0px, "+vscroll/2+"px)"
        });
        var vscroll =jQuery(this).scrollTop();
        jquery('#back-flower').css({
          "tranform":"translate(0px, - "+vscroll/2+"px)"
        });
        var vscroll =jQuery(this).scrollTop();
        jquery('#fore-flower').css({
          "tranform":"translate(0px, -"+vscroll/2+"px)"
        });

      });
    </script>
</body>
</html>
