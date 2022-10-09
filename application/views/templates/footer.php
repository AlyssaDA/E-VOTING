<footer>
    <p class="text-secondary font-weight-bold text-center"> © COPYRIGHT E-VOTING TEAM 5 STMIK JAYAKARTA 2022</p>
</footer> 
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/'); ?>js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
$('.nav-active').on('click', function() {
  $('.nav-active').removeClass('active');
  $(this).addClass('active');
});
      });
      </script>
  </body>
</html>