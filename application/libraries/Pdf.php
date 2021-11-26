<?php defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload';
$html='
<html lang="en">
    <head>
        <meta charset="utf-8" />
        </head>
        <body>
        <h2>BIENVENIDOS A NUESTRO CLUB DONDE AMAMOS LA COMIDA</h2>
                <p>En este lugar puedes traer a tu familia y disfrutar de nuestra sabrosas comidas desde nuestros deliciosos batidos hasta las mejores hamburguesas y salchipapas</p>
        </body>
        </meta>
        
</html>
';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
//$dompdf->set_paper("A4");
$dompdf->load_html($html);
$dompdf->render(); //este comando renderiza el PDF
$dompdf->stream("recibo.pdf", array('Attachment'=>'0'));
