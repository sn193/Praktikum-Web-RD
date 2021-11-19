<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="edit.css">
    <title>Pertemuan 6</title>
</head>
<body>
    <form method="POST" onsubmit="tampil()">
        <div>
            <label for="">Mangga:</label>
            <label for="">Rp.15000(/kg)</label>
            <input type="number" name="mangga" id="mangga" required>
        </div>
            <label for="">Jambu:    </label>
            <label for="">Rp.13000(/kg)</label>
            <input type="number" name="jambu" id="jambu" required>
        <div>
            <label for="">Salak:    </label>
            <label for="">Rp.10000(/kg)</label>
            <input type="number" name="salak" id="salak" required>
        </div>

        <input type="submit" name="submit" value="Total">
    </form>
    <br><br>
    <div id="hasil">

    </div>

    <script type="text/javascript">
        <?php
            class mangga{
                private $harga;
                public function __construct($jumlah){
                    $this->jumlah = $jumlah;
                    $this->harga = 15000;
                }
                public function jumlahMangga(){
                    return $this->jumlah;
                }
                public function hargaMangga(){
                    return $this->harga;
                }
            }
            class jambu{
                private $harga;
                public function __construct($jumlah){
                    $this->jumlah = $jumlah;
                    $this->harga = 13000;
                }
                public function jumlahJambu(){
                    return $this->jumlah;
                }
                public function hargaJambu(){
                    return $this->harga;
                }
            }
            class salak{
                private $harga;
                public function __construct($jumlah){
                    $this->jumlah = $jumlah;
                    $this->harga = 10000;
                }
                public function jumlahSalak(){
                    return $this->jumlah;
                }
                public function hargaSalak(){
                    return $this->harga;
                }
            }           
        ?>
        function tampil(){
            event.preventDefault()
            var nMangga = document.getElementById('mangga').value;
            var nJambu = document.getElementById('jambu').value;
            var nSalak = document.getElementById('salak').value;
            var hargaMangga = 15000;
            var hargaJambu = 13000;
            var hargaSalak = 10000;
            var total = nMangga*hargaMangga + nJambu*hargaJambu + nSalak*hargaSalak;

            output = document.getElementById('hasil');
            output.style.border = "black 1px";
            output.style.background = "388688";
            // output.innerHTML = "tes";
            output.innerHTML = "Mangga("+nMangga+"kg)= Rp."+nMangga*hargaMangga +"<br>"+"Jambu("+nJambu+"kg)= Rp."+nJambu*hargaJambu+"<br>"+"Salak("+nSalak+"kg)= Rp."+ nSalak*hargaSalak+"<br>"+"<br><b>Total Harga: Rp.</b>" + "<b>"+total+"</b>";
        }    
    </script>
</body>
</html>