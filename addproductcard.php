<?php
error_reporting(0);
$cards = [
    [
        "id" => 1,
        "panel" => "lv_panel",
        "image" => "img/Electro-Control-Panel-PCC.webp",
        "title" => "PCC Panel",
        "description" => "Power Control Center panel mainly used in Heavy Power Distribution Systems, Load Measurement"
    ],
    [   
        "id" => 2,
        "panel" => "lv_panel",
        "image" => "img/MCC-Panel-Main-2.jpg",
        "title" => "MCC Panel",
        "description" => "Motor Control Center panel used for controlling motors and industrial loads"
    ],
    [   
        "id" => 3,
        "panel" => "lv_panel",
        "image" => "img/APFC-Panel-2.jpg",
        "title" => "APFC Panel",
        "description" => "Automatic Power Factor Correction panel for energy efficiency"
    ],
    [   
        "id" => 4,
        "panel" => "lv_panel",
        "image" => "img/APFC-Panel-2.jpg",
        "title" => "APFC Panel",
        "description" => "Automatic Power Factor Correction panel for energy efficiency",
        "data" => "
            <p>PCC – Power Control Center panel is mainly used in Heavy Power Distribution Systems, Load Measurement, AMF Systems, and Power Factor Correction, handling currents from 1000A up to 6300A.</p>

            <p>We follow the IEC 61439 Standard and have a complete in-house facility for manufacturing PCC Panels up to 6300A. PCC panels are made using 14/16 SWG CRCA, duly powder-coated with a 7-tank pre-coating process for a longer lifespan.</p>

            <p>We provide ample space for incoming and outgoing cable termination, and all hardware, including nuts and bolts, is made of stainless steel.</p>

            <p>The design of the PCC Panel is robust and rigidly constructed, compartmentalized to suit a wide range of industries and buildings. The supporting structure/framework is made with a thickness of 3.0/5.0mm. The doors, covers, partitions, and panels are fabricated using a hi-tech CNC fiber laser cutting machine. We provide CPRI type testing reports for IP42 and short circuit test reports up to 5000A-65KA for 2 seconds.</p>

            <p>We have more than 20 years of experience. Our customized solutions and designs will assist our clients in achieving better performance, longevity, productivity, and trouble-free solutions.</p>

            <p>We are always with you because “Engineers are always for you…</p>
        ",
    ],
    [
        "id" => 5,
        "panel" => "mv_panel",
        "image" => "img/APFC-Panel-2.jpg",
        "title" => "APFC Panel",
        "description" => "Automatic Power Factor Correction panel for energy efficiency",

        "data" => "
            <p>PCC – Power Control Center panel is mainly used in Heavy Power Distribution Systems, Load Measurement, AMF Systems, and Power Factor Correction, handling currents from 1000A up to 6300A.</p>

            <p>We follow the IEC 61439 Standard and have a complete in-house facility for manufacturing PCC Panels up to 6300A. PCC panels are made using 14/16 SWG CRCA, duly powder-coated with a 7-tank pre-coating process for a longer lifespan.</p>

            <p>We provide ample space for incoming and outgoing cable termination, and all hardware, including nuts and bolts, is made of stainless steel.</p>

            <p>The design of the PCC Panel is robust and rigidly constructed, compartmentalized to suit a wide range of industries and buildings. The supporting structure/framework is made with a thickness of 3.0/5.0mm. The doors, covers, partitions, and panels are fabricated using a hi-tech CNC fiber laser cutting machine. We provide CPRI type testing reports for IP42 and short circuit test reports up to 5000A-65KA for 2 seconds.</p>

            <p>We have more than 20 years of experience. Our customized solutions and designs will assist our clients in achieving better performance, longevity, productivity, and trouble-free solutions.</p>

            <p>We are always with you because “Engineers are always for you…</p>
        ",
        
        "Specification" => "
            <table class='table table-bordered table-striped'>
                <tbody>
                    <tr>
                        <th>Structure</th>
                        <td>IP 42/45 Indoor Type, Free Floor Standing Front and Rear Openable</td>
                    </tr>
                    <tr>
                        <th>Thickness</th>
                        <td>2.0mm CRCA Sheet</td>
                    </tr>
                    <tr>
                        <th>Cable Entry</th>
                        <td>Top / Bottom Side</td>
                    </tr>
                    <tr>
                        <th>Design</th>
                        <td>Welded / Modular / Draw-out</td>
                    </tr>
                    <tr>
                        <th>Feeder & Compartment</th>
                        <td>Incomer Feeder, Outgoing Feeder, Busbar Compartment, Cable Alley, Metering Compartment</td>
                    </tr>
                    <tr>
                        <th>Incomer</th>
                        <td>MCCB / ACB</td>
                    </tr>
                    <tr>
                        <th>Metering</th>
                        <td>Digital Panel Meters + Indication Lamp</td>
                    </tr>
                    <tr>
                        <th>Outgoing</th>
                        <td>DOL / FASD / ATS / Soft Starters / VFD</td>
                    </tr>
                    <tr>
                        <th>Panel Wire</th>
                        <td>0.75 sq.mm to 255 sq.mm Single Core Copper Flexible Wire (FR/FRLS)</td>
                    </tr>
                    <tr>
                        <th>Busbar</th>
                        <td>EC Grade Copper / Aluminum Flat Bar</td>
                    </tr>
                    <tr>
                        <th>De-rating Factor of Busbar</th>
                        <td>For Copper – 1 sq.mm = 1.6A, For Aluminum – 1 sq.mm = 0.8A</td>
                    </tr>
                    <tr>
                        <th>Panel Accessories & Hardware</th>
                        <td>SS 304 Nut Bolts, PU Gasket, Door Hinges, Lifting Hook</td>
                    </tr>
                    <tr>
                        <th>Paint</th>
                        <td>Duly Powder Coating with 7 Tank Pre-coating Process</td>
                    </tr>
                </tbody>
            </table>
        "
    ]
];

function productCard($card)
{
    echo '
    <div class="card">
        <img src="'.$card['image'].'" alt="'.$card['title'].'">
        <h3>'.$card['title'].'</h3>
        <p>'.$card['description'].'</p>
        <div class="btn-group">
            <a href="product_description.php?id='.$card['id'].'" class="btn red-outline">View Products</a>
            <a href="download_catalog.php?id='.$card['id'].'" download class="btn red-outline">Download Catalog</a>
        </div>
    </div>
    ';
}

$fuses = [
    [
        "id" => 1,
        "image" => "img/k_type_fuse.png",
        "title" => "K - TYPE FUSE",
        "data" => '
            <table style="width: 60%;table-layout: fixed;">
                <tbody>
                    <tr style="color:#2FA3DA">
                        <th>AMP</th>
                        <th></th>
                        <th>VOLT</th>
                        <th>TYPE</th>
                        <th>PACKING</th>
                    </tr>
                    <tr>
                        <th>16A</th>
                        <th>X</th>
                        <th>415V</th>
                        <th>HC</th>
                        <th>100PCS</th>
                    </tr>
                    <tr>
                        <th>32A</th>
                        <th>X</th>
                        <th>415V</th>
                        <th>HC</th>
                        <th>60PCS</th>
                    </tr>
                    <tr>
                        <th>63A</th>
                        <th>X</th>
                        <th>415V</th>
                        <th>HC</th>
                        <th>24PCS</th>
                    </tr>
                    <tr>
                        <th>100A</th>
                        <th>X</th>
                        <th>415V</th>
                        <th>HC</th>
                        <th>10PCS</th>
                    </tr>
                </tbody>
            </table>
        ',
        "description" => '
            <ul style="color:#2FA3DA;padding:0px 15px;">
                <li>Brass/Copper/Ss/Ms Top (U)</li>
                <li>Brass Heavy Contact Base</li>
                <li>With Brass/Ss/Ms Screw</li>
                <li>Copper Purity 99.90% Ec Grade</li>
            </ul>
        '
    ],
    [
        "id" => 2,
        "image" => "img/porcelain_connector.png",
        "title" => "PORCELAIN CONNECTOR",
        "data" => '
            <table style="width: 60%;table-layout: fixed;">
                <tbody>
                    <tr style="color:#2FA3DA">
                        <th>AMP</th>
                        <th>WAY</th>
                    </tr>
                    <tr>
                        <th>15A</th>
                        <th>2</th>
                    </tr>
                    <tr>
                        <th>30A</th>
                        <th>2,3,4,5,6</th>
                    </tr>
                    <tr>
                        <th>60A</th>
                        <th>2,3,4,5,6</th>
                    </tr>
                    <tr>
                        <th>100A</th>
                        <th>2,3,4</th>
                    </tr>
                    <tr>
                        <th>200A</th>
                        <th>3,4</th>
                    </tr>
                </tbody>
            </table>
        ',
        "description" => '
            <ul style="color:#2FA3DA;padding:0px 15px;">
                <li>Heavy Square Round Parts</li>
                <li>With Brass/Ss/Ms Screw</li>
            </ul>
        '
    ]
];

function fuseCard($fusecard)
{
    echo '
    <div class="card">
        <img src="'.$fusecard['image'].'" alt="'.$fusecard['title'].'">
        <h3>'.$fusecard['title'].'</h3>
        <div class="btn-group">
            <a href="fuse_product_description.php?id='.$fusecard['id'].'" class="btn red-outline">View Products</a>
            <a href="fuse_download_catalog.php?id='.$fusecard['id'].'" download class="btn red-outline">Download Catalog</a>
        </div>
    </div>
    ';
}

?>

