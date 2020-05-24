<!-- Compulsory -->
<script src="<?= URLROOT; ?>public/common/plugins/jquery/jquery.min.js"></script>
<script src="<?= URLROOT; ?>public/common/plugins/jquery/jquery-migrate.min.js"></script>
<script src="<?= URLROOT; ?>public/common/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Global Javascript -->
<script src="<?= URLROOT; ?>public/common/plugins/smoothScroll.js"></script>
<script src="<?= URLROOT; ?>public/common/plugins/owl-carousel2/owl.carousel.min.js"></script>
<script src="<?= URLROOT; ?>public/common/plugins/owl-carousel2/owl.carousel2.js"></script>
<script src="<?= URLROOT; ?>public/www/js/general_function.js"></script>
<script src="<?= URLROOT; ?>public/common/plugins/splitlayout/js/modernizr.custom.js"></script>
<script src="<?= URLROOT; ?>public/common/plugins/splitlayout/js/classie.js"></script>
<script src="<?= URLROOT; ?>public/common/plugins/splitlayout/js/cbpSplitLayout.js"></script>
<script src="<?= URLROOT; ?>public/common/plugins/back-to-top.js"></script>
<script src="<?= URLROOT; ?>public/common/plugins/wow-animations/js/wow.min.js"></script>
<script src="<?= URLROOT; ?>public/common/plugins/backstretch/jquery.backstretch.min.js"></script>
<script src="<?= URLROOT; ?>public/www/js/init_backstretch.js"></script>

<script src="<?= URLROOT; ?>public/common/plugins/formvalidation/0.7.0/js/formValidation.min.js"></script>
<script src="<?= URLROOT; ?>public/common/plugins/formvalidation/0.7.0/js/framework/bootstrap.min.js"></script>
<!-- 20160930 Hunge: send email then connect api. -->
<script src="<?= URLROOT; ?>public/www/js/contact-form.js"></script>
<script src="<?= URLROOT; ?>public/common/plugins/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

<!-- Goolge Map -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="<?= URLROOT; ?>public/www/js/google_map.js"></script>


<script>

    // Initialize datepicker.
    $('#commencement_date, #delivery_date')
        .datepicker({
            format: 'yyyy-mm-dd'
        });
    // $('#commencement_date, #delivery_date')
    //     .datepicker({
    //         format: 'yyyy-mm-dd'
    //     });
    // .on('changeDate', function(e) {
    //     // Revalidate the start date field
    //     $('#SearchForm').formValidation('revalidateField', 'start_date');
    // });

    $(function() {
        OwlCarousel.initOwlCarousel();
        new WOW().init();
    });

    setTimeout(function(){
        $('#successMsg').slideUp(600, function() {
            $(this).remove();
        });
    }, 2000);

    setTimeout(function(){
        $(".alert-notification").slideUp(600, function() {
            $(this).remove();
        });
    }, 2000);
</script>

</body>

</html>