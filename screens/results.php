<body class="container-fluid background-image-mobile">
    <h1 class="heading fontSize32 BoldedText alignCenter">Rezultati za
        <?php echo $departure ?> -
        <?php echo $arrival ?>
    </h1>
    <?php
    if ($usableData->num_rows > 0) {
        while ($row = $usableData->fetch_assoc()) {
            include($paths['screens'] . 'oneRowRes.php');
        }
    } else {
        include($paths['screens'] . 'noResults.php');
    }
    ?>

    </html>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header BoldedText fontSize20 flexedH" style="width:100%">
                    <div class='left'>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class='right'>
                        <h4 class="modal-title" id="myModalLabel">Informacije</h4>
                    </div>
                </div>
                <div class="modal-body">
                    <div role="tabpanel fontRegular fontSize18">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active tab">
                                <a href="#stajalista" class="tab" aria-controls="stajalista" role="tab"
                                    data-toggle="tab">STAJALIŠTA</a>
                            </li>
                            <li role="presentation" class="tab">
                                <a class="tab" href="#rezim" aria-controls="rezim" role="tab"
                                    data-toggle="tab">REŽIM</a>
                            </li>
                            <li role="presentation" class="tab">
                                <a href="#prijevoznik" class="tab" aria-controls="prijevoznik" role="tab"
                                    data-toggle="tab">PRIJEVOZNIK</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active fontRegular fontSize20" id="stajalista">
                            </div>
                            <div role="tabpanel" class="tab-pane fontRegular fontSize20" id="rezim"></div>
                            <div role="tabpanel" class="tab-pane fontRegular fontSize20" id="prijevoznik"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn solidBlue roundBTN" data-dismiss="modal">
                        Zatvori
                    </button>
                </div>
            </div>
        </div>
    </div>