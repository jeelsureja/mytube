<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<script src="<?php echo e(URL::asset('../js/jquery-1.11.1.min.js')); ?>"></script>
<script src="https://use.fontawesome.com/fe459689b4.js"></script>
<script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
<script src="https://cdn.plyr.io/3.5.10/plyr.js"></script>
<script type="text/javascript">
            document.addEventListener('DOMContentLoaded', () => {
            // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
            const player = new Plyr('#player');

            // Expose
            window.player = player;

            // Bind event listener
            function on(selector, type, callback) {
            document.querySelector(selector).addEventListener(type, callback, false);
            }

            // Play
            on('.js-play', 'click', () => {
            player.play();
            });

            // Pause
            on('.js-pause', 'click', () => {
            player.pause();
            });

            // Stop
            on('.js-stop', 'click', () => {
            player.stop();
            });

            // Rewind
            on('.js-rewind', 'click', () => {
            player.rewind();
            });

           	// Forward
			on('.js-forward', 'click', () => {
			player.forward();
			});
			});
            $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
            </script><?php /**PATH /var/www/html/laravel/mytube/resources/views/assets/script.blade.php ENDPATH**/ ?>