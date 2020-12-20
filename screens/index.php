<body class="background-image container-fluid">
    <div class="row verticalCenter righted">
        <div class="col-xl-12 col-sm-12 col-md-12">
            <p class="fontSize50 BoldedText">Sve linije na dlanu</p>
        </div>
    </div>
    <br />
    <div class="row verticalCenter10 right10">
        <div class="col-xl-3 col-md-3 col-sm-3">
            <a href='/pretrazi'><button
                    class="btn btn-outline-primary roundBTN colorGradient verticalCenter semiBolded fontSize28">
                    PRETRAŽI
                </button></a>

        </div>
    </div>
    <div class='row bottom'>
        <div class='col-xl-6 col-sm-6 col-md-6'>
            <p><?php echo "<script>console.log('" . $json['geolocation_city'] . "'); </script>"; ?></p>

        </div>
    </div>
</body>

</html>