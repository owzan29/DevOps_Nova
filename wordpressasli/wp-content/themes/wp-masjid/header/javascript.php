        <script type="text/javascript">
	    	jQuery("document").ready(function () {
	    		jQuery('.mobi ul').accordion();
	     	});
        </script>

        <script>
           $(function($){
               $("ul#wees-ticker").liScroll();
           });
        </script>

        <script type="text/javascript">
			jQuery(window).scroll(function() {
				if ($(this).scrollTop() >= 30) {
					$('#return-to-top').fadeIn(200);
					$('body').addClass("fade");
			 	} else {
					$('#return-to-top').fadeOut(200);
					$('.open').css("display","block");
					$('body').removeClass("fade");
			 	}
			});
        </script>

        <script type="text/javascript">
    		$("document").ready(function($){
				$(".logos .fas").click(function(){
		    		$(".wrapper").addClass('show');
					$(".wrapper").removeClass('hiden');
				});
			});
		</script>
		<script type="text/javascript">
    		$("document").ready(function($){
				$(".xclose").click(function(){
		    		$(".wrapper").addClass('hiden');
					$(".wrapper").removeClass('show');
				});
			});
			
			jQuery(document).ready(function($) {
				$(window).on("load", function() {
					preloaderFadeOutTime = 500;
					function hidePreloader() {
						var preloader = $('.spinner-wrapper');
						preloader.fadeOut(preloaderFadeOutTime);
					}
					hidePreloader();
				});
			});
			
        </script>
		
		<script>
$(function(){
  
    $("select.main").on("change", function(){
        $(".models.active").removeClass("active");
        var subList = $(".models."+$(this).val());
        if (subList.length){
            subList.addClass("active");
        }
    });
  
});
</script>
