<div class="row verticalMobile10">
    <div class="col-xl-8 newInfo col-sm-8 col-md-8 offset-md-2 alignCenter offset-sm-2 offset-xl-2">
        <div class="row flexRow">
            <div class="md-6 mx-auto">
                <p class="fontSize18 fontRegular">POLAZAK VRIJEME</p>
                <p class="fontSize40 BoldedText"><?php echo $row['departure_time'] ?></p>
            </div>

            <div class="md-6 mx-auto">
                <p class="fontSize18 fontRegular">POLAZAK MJESTO</p>
                <p class="fontSize40 BoldedText"><?php echo $row['departure'] ?></p>
            </div>
        </div>
        <div class="row flexRow">
            <div class="md-6 mx-auto">
                <p class="fontSize18 fontRegular">DOLAZAK VRIJEME</p>
                <p class="fontSize40 BoldedText"><?php echo $row['arrival_time'] ?></p>
            </div>

            <div class="md-6 mx-auto">
                <p class="fontSize18 fontRegular">DOLAZAK MJESTO</p>
                <p class="fontSize40 BoldedText"><?php echo $row['arrival'] ?></p>
            </div>
        </div>
        <button class="solidBlue roundBTN width100 btn alignCenter semiBolded fontSize20"
            onclick="fillModal1(<?php echo $row['id'] ?>)">
            VIŠE</button><br /><br />
    </div>
</div>