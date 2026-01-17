<?php
require_once __DIR__ . '/vendor/autoload.php';
include "addproductcard.php";

$product = null;
if (isset($_GET['id'])) {
    foreach ($fuses as $fusecard) {
        if ($fusecard['id'] == $_GET['id']) {
            $product = $fusecard;
            break;
        }
    }
}
if (!$product) {
    die("Product not found");
}

$imageSrc = '';
if (!empty($product['image']) && file_exists($product['image'])) {
    $type = pathinfo($product['image'], PATHINFO_EXTENSION);
    $data = base64_encode(file_get_contents($product['image']));
    $imageSrc = "data:image/$type;base64,$data";
}

$mpdf = new \Mpdf\Mpdf([
    'format' => 'A4',
    'margin_top' => 12,
    'margin_bottom' => 12,
    'margin_left' => 12,
    'margin_right' => 12
]);

$html = '
<style>
    .header {
        background-color: #2FA3DA;
        color: #fff;
        padding: 18px;
        margin-top: 10px;
    }

    .header h1 {
        margin: 0;
        font-size: 22px;
    }

    .product-img {
        text-align: center;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .card {
        border: 1px solid #ddd;
        padding: 12px;
        margin-top: 15px;
    }

    .card table {
        width: 100%;
        border-collapse: collapse;
    }

    .card ul {
        padding-left: 18px;
        margin: 0;
    }

    .card li {
        margin-bottom: 6px;
    }

    .footer {
        text-align: center;
        font-size: 10px;
        color: #777;
        margin-top: 10px;
    }
</style>

<div class="header">
    <h1>'.$product['title'].'</h1>
</div>

<div class="product-img">
    <img src="'.$imageSrc.'">
</div>

<div class="card">'.$product['data'].'</div>

<div class="card">'.$product['description'].'</div>

<div class="header d-flex align-items-center gap-4">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="30%" align="left">
                &nbsp;&nbsp;&nbsp;&nbsp; 
                <img src="img/Jyoti_logo.png" height="20" alt="Logo">
            </td>

            <td width="70%" align="right">
                <span>+91 95125 05020</span>
                &nbsp;&nbsp;&nbsp;&nbsp; 
                <span>info@electrogroups.org</span>
            </td>
        </tr>
    </table>
</div>

<div class="footer">
    © '.date("Y").' JYOTI | All Rights Reserved
</div>
';

$mpdf->WriteHTML($html);
$mpdf->Output($product['title'].'_'.$product['id'].'.pdf', 'D');
exit;
