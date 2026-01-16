<?php
require_once __DIR__ . '/vendor/autoload.php';
include "addproductcard.php";

$product = null;
if (isset($_GET['id'])) {
    foreach ($cards as $card) {
        if ($card['id'] == $_GET['id']) {
            $product = $card;
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

/* mPDF Init */
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'margin_top' => 15,
    'margin_bottom' => 15,
    'margin_left' => 15,
    'margin_right' => 15
]);

$html = '
<style>
    .header {
        background-color: #2FA3DA;
        color: #fff;
        padding: 18px;
        margin-bottom: 25px;
    }

    .header h1 {
        font-size: 22px;
        margin: 0;
    }

    .product-img {
        text-align: center;
        margin-bottom: 25px;
    }

    .section {
        margin-bottom: 25px;
    }

    .section-title {
        font-size: 15px;
        font-weight: bold;
        border-bottom: 1px solid #ccc;
        padding-bottom: 5px;
        color: #2FA3DA;
        margin-bottom: 10px;
    }

    .spec-table td {
        border: 1px solid #ddd;
        padding: 8px;
        font-size: 11px;
    }

    .application {
        font-size: 11.5px;
        line-height: 1.6;
    }

    .footer {
        text-align: center;
        font-size: 10px;
        color: #777;
        margin-top: 40px;
    }
</style>

<div class="header">
    <h1>'.$product['title'].'</h1>
</div>

<div class="product-img">
    <img src="'.$imageSrc.'">
</div>

<div class="section">
    <div class="section-title">SPECIFICATION</div>
    <div class="spec-table">
        '.$product['Specification'].'
    </div>
</div>

<div class="section">
    <div class="section-title">APPLICATION</div>
    <div class="application">
        '.$product['data'].'
    </div>
</div>

<div class="footer">
    © '.date("Y").' JYOTI | All Rights Reserved
</div>
';

$mpdf->WriteHTML($html);
$filename = $product['title'].'_'.$product['id'].'.pdf';
$mpdf->Output($filename, 'D');
exit;
