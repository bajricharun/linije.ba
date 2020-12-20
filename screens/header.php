<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Linije</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/34e3f294d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo $paths['css'] . 'style.css' ?>" />
    <script>
    function fillModal1(id) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var parts = xmlhttp.responseText.split('|');
                document.getElementById("stajalista").innerHTML =
                    "<h3 class='BoldedText' style='text-align:center;'>Stajališta</h3>" + parts[
                        0];
                document.getElementById('rezim').innerHTML =
                    "<h3 class='BoldedText' style='text-align:center;'>Režim</h3>" + parts[1];
                document.getElementById('prijevoznik').innerHTML =
                    "<h3 class='BoldedText' style='text-align:center;'>Prijevoznik</h3>" + parts[2];
            }
        };
        xmlhttp.open("GET", "getContent.php?id=" + id, true);
        xmlhttp.send();
        $('#myModal').modal('show')
    }
    </script>

</head>
<nav class="navbar navbar-expand-lg fixed-top navbar-light">
    <a class="navbar-brand logo" href="/"><img class="logo"
            src="<? echo $paths['img'] ?>Linije Logo transparentni.png" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse BoldedText fontSize22" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item BoldedText">
                <a class="nav-link BoldedText" href="/pretrazi">Pretraži</a>
            </li>
            <li class="BoldedText nav-item">
                <a class="BoldedText nav-link" href="/kontakt">Kontakt</a>
            </li>
            <li class="BoldedText nav-item">
                <a class="nav-link BoldedText" href="/prava">Prava korištenja</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="<? echo $paths['controller'] . 'searchByPlace.php' ?>"
            method="POST">
            <input class="form-control mr-sm-2 inputRound fontRegular noBorder fontSize18 backgroundColLightBlue"
                type="search" placeholder="Pretraga po mjestu" name='place' aria-label="Pretraga po mjestu">
            <button class="btn roundBTN solidBlue fontRegular fontSize18 my-2 my-sm-0" type="submit"
                name='searchByPlace'>Traži</button>
        </form>
    </div>
</nav>