	<!-- jQuery -->
    <script src="<?php echo assets_url(); ?>themes/sb/vendor/jquery/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo assets_url(); ?>themes/sb/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo assets_url(); ?>themes/sb/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!--
<script src="<?php echo assets_url(); ?>themes/sb/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo assets_url(); ?>themes/sb/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo assets_url(); ?>themes/sb/data/morris-data.js"></script>
-->

    <!-- Plugins -->
    <script src="<?php echo assets_url(); ?>js/plugins/fancybox/jquery.fancybox.js"></script>
    <script src="<?php echo assets_url(); ?>js/plugins/fancybox/jquery.fancybox.pack.js"></script>
    <script src="<?php echo assets_url(); ?>js/detectmobilebrowser.js"></script>
    <script src="<?php echo assets_url(); ?>js/plugins/int-tel-input/js/intlTelInput.min.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo assets_url(); ?>themes/sb/dist/js/sb-admin-2.js"></script>
    
    <?php if (isset($scripts) && !empty($scripts)) echo $scripts; ?>

</body>

</html>