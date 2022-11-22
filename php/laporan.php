<?php 
$fname = $_POST['name'];

//sicepat
$sicepats = $_POST['sicepats'];
$sicepatf = $_POST['sicepatf'];
$sicepatm = $_POST['sicepatm'];


//jnt
$jnts = $_POST['jnts'];
$jntf = $_POST['jntf'];
$jntm = $_POST['jntm'];

//shopee
$shopees = $_POST['shopees'];
$shopeef = $_POST['shopeef'];
$shopeem = $_POST['shopeem'];

//jne
$jnes = $_POST['jnes'];
$jnef = $_POST['jnef'];
$jnem = $_POST['jnem'];


$conn = new mysqli("localhost","root","","test2");
    $stmt = $conn->prepare("INSERT INTO LAP(fname,sicepats,sicepatf) VALUES(?,?,?)");
    if (!$stmt) {
        echo "false";
    }
    else {
        $stmt->bind_param("sii",$fname,$sicepats,$sicepatf);
        $stmt->execute();
        // echo "entry success";
        $stmt->close();
        //writing query
        $sql = "SELECT * FROM lap ORDER BY id DESC LIMIT 1";
        //making query, acq result
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        $datas = array();

        if ($resultCheck > 0){
            $row = mysqli_fetch_assoc($result);
            $datas[] = $row;
            // pre_r ($datas);
           
        }
    }

    function pre_r($datas){
        echo '<pre>';
        print_r($datas);
        echo '<pre>';
    }

?>

<!DOCTYPE html>
<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Fisik</th>
      <th scope="col">Manual</th>
      <th scope="col">Sistem</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Sicepat</th>
      <td><?php echo $sicepatf ?></td>
      <td><?php echo $sicepatm ?></td>
      <td><?php echo $sicepats ?></td>
      <td><?php
      if ($sicepatf + $sicepatm == $sicepats){
        echo "EQUAL";
        $sicepatEq = "%E2%9C%85";
      } else {
        echo "NOT EQUAL";
        $sicepatEq = "%E2%9D%8C";
      }?></td>
    </tr>
    <tr>
      <th scope="row">JNT</th>
      <td><?php echo $jntf ?></td>
      <td><?php echo $jntm ?></td>
      <td><?php echo $jnts ?></td>
      <td><?php
      if ($jntf + $jntm == $jnts){
        echo "EQUAL";
        $jntEq = "%E2%9C%85";
      } else {
        echo "NOT EQUAL";
        $jntEq = "%E2%9D%8C";
      }?></td>
    </tr>
    <tr>
      <th scope="row">Shopee</th>
      <td><?php echo $shopeef ?></td>
      <td><?php echo $shopeem ?></td>
      <td><?php echo $shopees ?></td>
      <td><?php
      if ($shopeef + $shopeem == $shopees){
        echo "EQUAL";
        $shopeeEq = "%E2%9C%85";
      } else {
        echo "NOT EQUAL";
        $shopeeEq = "%E2%9D%8C";
      }?></td>
    </tr>
    <tr>
      <th scope="row">JNE</th>
      <td><?php echo $jnef ?></td>
      <td><?php echo $jnem ?></td>
      <td><?php echo $jnes ?></td>
      <td><?php
      if ($jnef + $jnem == $jnes){
        echo "EQUAL";
        $jneEq = "%E2%9C%85";
      } else {
        echo "NOT EQUAL";
        $jneEq = "%E2%9D%8C";
      }?></td>
    </tr>
  </tbody>
</table>

 <div class="form-check mt-4 mb-4">
    <form method= "POST" action="test.php?">
            <input type="checkbox" class="form-check-input" id="Recheck" required>
            <label class="form-check-label" for="Recheck" required>Sudahkah Anda memeriksa ulang?</label>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Kirim">
    </form>
</body>
</html>

<?php
session_start();
$_SESSION['fname'] = $fname;

$_SESSION['sicepats'] = $sicepats;
$_SESSION['sicepatm'] = $sicepatm;
$_SESSION['sicepatf'] = $sicepatf;
$_SESSION['sicepatEq'] = $sicepatEq;

$_SESSION['jnts'] = $jnts;
$_SESSION['jntm'] = $jntm;
$_SESSION['jntf'] = $jntf;
$_SESSION['jntEq'] = $jntEq;

$_SESSION['jnes'] = $jnes;
$_SESSION['jnem'] = $jnem;
$_SESSION['jnef'] = $jnef;
$_SESSION['jneEq'] = $jneEq;

$_SESSION['shopees'] = $shopees;
$_SESSION['shopeem'] = $shopeem;
$_SESSION['shopeef'] = $shopeef;
$_SESSION['shopeeEq'] = $shopeeEq;

?>




