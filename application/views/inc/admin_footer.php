



    <!--
    ======================================================================================
                        ALL SCRIPTS HERE 
    ======================================================================================
    -->

    <!-- jQuery 3 -->
    <script src="<?=base_url()?>asset/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?=base_url()?>asset/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?=base_url()?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="<?=base_url()?>asset/bower_components/select2/dist/js/select2.full.min.js"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?=base_url()?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>


    <!-- AdminLTE App -->
    <script src="<?=base_url()?>asset/dist/js/adminlte.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?=base_url()?>asset/dist/js/demo.js"></script>


    <script>
        
              //Initialize Select2 Elements
            $('.select2').select2()
              


        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("contentheid");
        var sticky = navbar.offsetTop;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }    

    </script>


</body>
</html>
