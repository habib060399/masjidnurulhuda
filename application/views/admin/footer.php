</div>
<!--END PAGE CONTENT -->

<!-- RIGHT STRIP  SECTION -->
<!-- <div id="right">
    <div class="well well-small">
        <ul class="list-unstyled">

            <li>Pengguna &nbsp; : <span></span></li>
        </ul>
    </div>
</div> -->
<!-- END RIGHT STRIP  SECTION -->
</div>

<!--END MAIN WRAPPER -->

<!-- FOOTER -->
<div id="footer">
    <p>&copy; Design and Created By <b class="text-danger">FAD Team</b> &nbsp;<?php echo date('Y'); ?> &nbsp;</p>
</div>
<!--END FOOTER -->

<!-- GLOBAL SCRIPTS -->
<script src="<?php echo base_url(); ?>/assets/plugins/jquery-2.0.3.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<!-- END GLOBAL SCRIPTS -->
<!-- PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>/assets/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $('#TableAuto').dataTable();
    });
</script>
<script src="<?php echo base_url(); ?>/assets/plugins/flot/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/flot/jquery.flot.time.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/for_index.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/js/formsInit.js"></script>
<script>
    $(function() {
        formInit();
    });
</script>
<script src="../assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
<script src="../assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
<script src="../assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
<script src="../assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
<script src="../assets/js/validationInit.js"></script>
<script>
    $(function() {
        formValidation();
    });
</script>
<script language="javascript">
    function hanyaAngka(e, decimal) {
        var key;
        var keychar;
        if (window.event) {
            key = window.event.keyCode;
        } else
        if (e) {
            key = e.which;
        } else return true;

        keychar = String.fromCharCode(key);
        if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27)) {
            return true;
        } else
        if ((("0123456789").indexOf(keychar) > -1)) {
            return true;
        } else
        if (decimal && (keychar == ".")) {
            return true;
        } else return false;
    }
</script>
</body>

</html>