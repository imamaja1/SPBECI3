<style>
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #FFF;
        z-index: 99999;
    }

    #status {
        width: 200px;
        height: 200px;
        position: absolute;
        left: 40%;
        right: auto;
        top: 30%;
        background-image: url("<?= base_url() ?>uploads/preloading/Curve-Loading.gif");
        z-index: 9999;
        background-repeat: repeat;
        background-position: center;
    }
</style>
<div id="preloader">
    <div id="status">
    </div>
</div>

<script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
<script>
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(600).fadeOut(300); // will fade out the white DIV that covers the website.
</script>