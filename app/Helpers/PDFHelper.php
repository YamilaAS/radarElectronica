<?php

namespace App\Helpers;

use Dompdf\Dompdf;

class PDFHelper
{
    public static function mostrarPDF(string $contenido) {
        $dompdf = new Dompdf();
        $dompdf->loadHtml($contenido);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("archivo.pdf", array("Attachment"=>false));
    }
}