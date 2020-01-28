<footer>
     <div class="footer-section pt-100">
         <div class="container">
             <div class="row">
                 <div class="col-xl-4 pb-60">
                 <?php  if(is_active_sidebar('footer-1')){
                        dynamic_sidebar( 'footer-1' );
                        }
                ?> 
                 </div>
                 <div class="col-xl-4">
                 <?php  if(is_active_sidebar('footer-2')){
                        dynamic_sidebar( 'footer-2' );
                        }
                 ?> 
                 </div>
                 <div class="col-xl-4">
                 <?php  if(is_active_sidebar('footer-3')){
                        dynamic_sidebar( 'footer-3' );
                        }
                 ?> 
                 </div>
             </div>
         </div>
     </div>
 </footer>
    <?php wp_footer(); ?>
</body>

</html>
