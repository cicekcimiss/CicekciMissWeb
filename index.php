<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

            });
            function sendDatabase() {
                var ad = document.getElementById('ad').value;
                var soyad = document.getElementById('soyad').value;
                var telefon = document.getElementById('telefon').value;

                $.ajax({
                    type: "POST",
                    url: "register.php",
                    data: {ad: ad, soyad:soyad, telefon:telefon},
                    dataType: "json",
                    beforeSend: function () {

                    },
                    success: function (data, textStatus, xhr) {
                        $('.txt_message').val("");
                    },
                    error: function (xhr, textStatus, errorThrown) {

                    }
                });
                return false;
            }</script>
    <body>
        <h1>Merhaba Hoşgeldin</h1>
        <form>
            <br>
            Ad: <input type="text" Id="ad" name="ad"  ><br>
            Soyad: <input type="text" Id="soyad" name="soyad"  ><br>
            Telefon: <input type="text" Id="telefon" name="telefon"  ><br>
            <input  type="submit" onclick="sendDatabase()" >
        </form>


        <?php
        ?>
    </body>




</ul>
</div>
</body>
</html>
