<?php
    $date = date('d/m');
    $phoneNo = "6285717940793";

    //SESSION
    session_start();
    $fname1 = $_SESSION['fname'];
    
    $sicepats1 = $_SESSION['sicepats'] + $_SESSION['sicepatm'];
    $sicepatf1 = $_SESSION['sicepatf'];
    $sicepatEq1 = $_SESSION['sicepatEq'];

    $jnts1 = $_SESSION['jnts'] + $_SESSION['jntm'];
    $jntf1 = $_SESSION['jntf'];
    $jntEq1 = $_SESSION['jntEq'];

    $jnes1 = $_SESSION['jnes'] + $_SESSION['jnem'];
    $jnef1 = $_SESSION['jnef'];
    $jneEq1 = $_SESSION['jneEq'];

    $shopees1 = $_SESSION['shopees'] + $_SESSION['shopeem'];
    $shopeef1 = $_SESSION['shopeef'];
    $shopeeEq1 = $_SESSION['shopeeEq'];

    $url = "https://api.whatsapp.com/send?phone=$phoneNo&text=Laporan%20Outbound%20$date%0APIC%20%3A%20$fname1%0ASicepat%20Fisik%20%28$sicepatf1%29%20%3D%20Sistem%20%28$sicepats1%29%20%7C%20$sicepatEq1%0AJNT%20Fisik%20%28$jntf1%29%20%3D%20Sistem%20%28$jnts1%29%20%7C%20$jntEq1%0AShopee%20Fisik%20%28$shopeef1%29%20%3D%20Sistem%20%28$shopees1%29%20%7C%20$shopeeEq1%0AJNE%20Fisik%20%28$jnef1%29%20%3D%20Sistem%20%28$jnes1%29%20%7C%20$jneEq1%0A";
    header("Location: $url");

?>