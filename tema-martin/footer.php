    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url');?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/assets/js/holder.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/slick.min.js"></script>

    <script type="text/javascript">
    $('.solucoes').slick({
      dots: true,
      arrows: false,
      autoplay: false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true
    });

    $(document).ready(function(){
        var url = $("#modal_video").attr('src');
        $("#myModal").on('hide.bs.modal', function(){
            $("#modal_video").attr('src', '');
        });
        $("#myModal").on('show.bs.modal', function(){
            $("#modal_video").attr('src', url);
        });
    });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>