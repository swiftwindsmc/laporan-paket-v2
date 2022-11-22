<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class = "container">
        <div class = "flex justify-content-center">
            <h4>LAPORAN OUTBOUND - <?php
                //return current system date
                $date = date('d/m');
                echo $date;
            ?></h4>

        <form method="POST" action="php/laporan.php">
            <div class="form-group mt-4 mb-4">
                <label for="PIC" style= "font-weight:bold">Nama PIC</label>
                <input type="text" class="form-control" 
                name= "name" placeholder="Ketik nama Anda"  required>
            </div>

            <div class="row">
                <div class="col">
                    <label for="Fisik" style="font-weight:bold">FISIK</label>

                    <input type="number" class="form-control" id="Fisik" 
                    name= "sicepatf" placeholder="SICEPAT FISIK"  required>

                    <input type="number" class="form-control" id="Fisik"
                    name= "jntf" placeholder="JNT FISIK" required>

                    <input type="number" class="form-control" id="Fisik"
                    name= "shopeef" placeholder="SHOPEE FISIK" required>

                    <input type="number" class="form-control" id="Fisik"
                    name= "jnef" placeholder="JNE FISIK" required>
                </div>

                <div class="col">
                    <label for="Manual" style="font-weight:bold">MANUAL</label>

                    <input type="number" class="form-control" id="Manual" 
                    name= "sicepatm" placeholder="SICEPAT MANUAL" required>

                    <input type="number" class="form-control" id="Manual" 
                    name= "jntm" placeholder="JNT MANUAL" required>

                    <input type="number" class="form-control" id="Manual" 
                    name= "shopeem" placeholder="SHOPEE MANUAL" required>

                    <input type="number" class="form-control" id="Manual" 
                    name= "jnem" placeholder="JNE MANUAL" required>
                </div>

                <div class="col">
                    <label for="Sistem" style="font-weight:bold">SISTEM</label>

                    <input type="number" class="form-control" id="Sistem" 
                    name= "sicepats" placeholder="SICEPAT SISTEM" required>

                    <input type="number" class="form-control" id="Sistem" 
                    name= "jnts" placeholder="JNT SISTEM" required>

                    <input type="number" class="form-control" id="Sistem" 
                    name= "shopees" placeholder="SHOPEE SISTEM" required>

                    <input type="number" class="form-control" id="Sistem" 
                    name= "jnes" placeholder="JNE SISTEM" required>
                </div>
            </div>
            <!-- <div class="form-check mt-4 mb-4">
                <input type="checkbox" class="form-check-input" id="Recheck" required>
                <label class="form-check-label" for="Recheck">Sudahkah Anda memeriksa ulang?</label>
            </div> -->
            <!-- <button type="submit" class="btn btn-primary">Kirim laporan</button> -->
                <input type="submit" class="btn btn-primary" value="Buat Laporan">
         </form>
    </div>
        </div>
</body>
</html>


