<?php
    $textoParaReemplazar = "<b>Orden de Reparación: </b>" . $ordenDeReparacion->id . "</br>" .
        "<b>Fecha de Ingreso: </b>" . $ordenDeReparacion->fechaIngreso->format('d/m/Y') . "</br>" .
        "<b>Aparato: </b>" . $ordenDeReparacion->aparato . "</br>" .
        "<b>Marca: </b>" . $ordenDeReparacion->marca . "</br>" .
        "<b>Modelo: </b>" . $ordenDeReparacion->modelo . "</br>" .
        "<b>Accesorios: </b>" . $ordenDeReparacion->accesorios . "</br>" .
        "<b>Titular: </b>" . $cliente->apellido . ' ' . $cliente->nombre ;
?>

<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
    <style type="text/css">
        @page {
            margin: 0 !important;
            padding: 0 !important;
        }
        * {
            font-family: "Arial", "Helvetica", sans-serif !important;
            padding: 1pt 1pt 1pt 1pt !important;
        }
        .doc-content {
            padding: 0pt 0pt 0pt 25pt !important;
        }
        ol {
            margin: 0;
            padding: 0;
        }
        table td,
        table th {
            padding: 0;
        }
        .c35 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 270.8pt;
            border-top-color: #000000;
            border-bottom-style: solid;
        }
        .c26 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 525.8pt;
            border-top-color: #000000;
            border-bottom-style: solid;
        }
        .c18 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 69pt;
            border-top-color: #000000;
            border-bottom-style: solid;
        }
        .c0 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 255pt;
            border-top-color: #000000;
            border-bottom-style: solid;
        }
        .c17 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 201.8pt;
            border-top-color: #000000;
            border-bottom-style: solid;
        }
        .c28 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 324pt;
            border-top-color: #000000;
            border-bottom-style: solid;
        }
        .c13 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 55.5pt;
            border-top-color: #000000;
            border-bottom-style: solid;
        }
        .c19 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 90pt;
            border-top-color: #000000;
            border-bottom-style: solid;
        }
        .c2 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 109.5pt;
            border-top-color: #000000;
            border-bottom-style: solid;
        }
        .c1 {
            -webkit-text-decoration-skip: none;
            color: #000000;
            font-weight: 400;
            text-decoration: underline;
            vertical-align: baseline;
            text-decoration-skip-ink: none;
            font-size: 11pt;
            font-family: "Arial";
            font-style: italic;
        }
        .c27 {
            -webkit-text-decoration-skip: none;
            color: #000000;
            text-decoration: underline;
            vertical-align: baseline;
            text-decoration-skip-ink: none;
            font-size: 12pt;
            font-family: "Arial";
            font-style: italic;
        }
        .c23 {
            -webkit-text-decoration-skip: none;
            color: #000000;
            text-decoration: underline;
            vertical-align: baseline;
            text-decoration-skip-ink: none;
            font-size: 18pt;
            font-family: "Arial";
            font-style: italic;
        }
        .c14 {
            -webkit-text-decoration-skip: none;
            color: #000000;
            text-decoration: underline;
            vertical-align: baseline;
            text-decoration-skip-ink: none;
            font-size: 11pt;
            font-family: "Arial";
            font-style: italic;
        }
        .c38 {
            -webkit-text-decoration-skip: none;
            color: #000000;
            text-decoration: underline;
            vertical-align: baseline;
            text-decoration-skip-ink: none;
            font-size: 20pt;
            font-family: "Arial";
            font-style: italic;
        }
        .c12 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 11pt;
            font-family: "Arial";
            font-style: normal;
        }
        .c3 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 10pt;
            font-family: "Arial";
            font-style: italic;
        }
        .c33 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: center;
            height: 11pt;
        }
        .c21 {
            -webkit-text-decoration-skip: none;
            color: #000000;
            font-weight: 400;
            text-decoration: underline;
            vertical-align: baseline;
            text-decoration-skip-ink: none;
            font-family: "Arial";
        }
        .c45 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: center;
        }
        .c15 {
            color: #000000;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 18pt;
            font-family: "Arial";
            font-style: italic;
        }
        .c20 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1;
            text-align: right;
            height: 11pt;
        }
        .c8 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1;
            text-align: left;
            height: 11pt;
        }
        .c11 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1;
            text-align: left;
        }
        .c25 {
            color: #000000;
            text-decoration: none;
            vertical-align: baseline;
            font-family: "Arial";
        }
        .c16 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1;
            text-align: center;
        }
        .c24 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.5;
            text-align: right;
        }
        .c6 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            text-align: left;
        }
        .c34 {
            orphans: 2;
            widows: 2;
            margin-right: 14.1pt;
            height: 11pt;
        }
        .c5 {
            border-spacing: 0;
            border-collapse: collapse;
            margin-right: auto;
        }
        .c30 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.5;
            text-align: left;
        }
        .c41 {
            font-weight: 400;
            font-size: 17pt;
            font-style: italic;
        }
        .c43 {
            font-weight: 400;
            font-size: 8pt;
            font-style: normal;
        }
        .c44 {
            orphans: 2;
            widows: 2;
            height: 11pt;
        }
        .c32 {
            font-weight: 400;
            font-size: 6pt;
            font-style: normal;
        }
        .c29 {
            background-color: #ffffff;
            font-family: "Roboto";
            font-style: italic;
        }
        .c39 {
            background-color: #ffffff;
            max-width: 538.6pt;
            padding: 28.3pt 28.3pt 28.3pt 28.3pt;
        }
        .c31 {
            font-weight: 400;
            font-size: 10pt;
            font-style: normal;
        }
        .c7 {
            font-size: 10pt;
            font-style: italic;
        }
        .c37 {
            font-size: 12pt;
            font-style: italic;
        }
        .c36 {
            background-color: #ffffff;
            font-style: italic;
        }
        .c10 {
            font-weight: 700;
        }
        .c22 {
            height: 21pt;
        }
        .c42 {
            height: 28pt;
        }
        .c9 {
            height: 22pt;
        }
        .c4 {
            height: 15.6pt;
        }
        .c40 {
            height: 43.7pt;
        }
        .title {
            padding-top: 0pt;
            color: #000000;
            font-size: 26pt;
            padding-bottom: 3pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left;
        }
        .subtitle {
            padding-top: 0pt;
            color: #666666;
            font-size: 15pt;
            padding-bottom: 16pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left;
        }
        li {
            color: #000000;
            font-size: 11pt;
            font-family: "Arial";
        }
        p {
            margin: 0;
            color: #000000;
            font-size: 11pt;
            font-family: "Arial";
        }
        h1 {
            padding-top: 20pt;
            color: #000000;
            font-size: 20pt;
            padding-bottom: 6pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left;
        }
        h2 {
            padding-top: 18pt;
            color: #000000;
            font-size: 16pt;
            padding-bottom: 6pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left;
        }
        h3 {
            padding-top: 16pt;
            color: #434343;
            font-size: 14pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left;
        }
        h4 {
            padding-top: 14pt;
            color: #666666;
            font-size: 12pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left;
        }
        h5 {
            padding-top: 12pt;
            color: #666666;
            font-size: 11pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left;
        }
        h6 {
            padding-top: 12pt;
            color: #666666;
            font-size: 11pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            font-style: italic;
            orphans: 2;
            widows: 2;
            text-align: left;
        }
    </style>
</head>
<body class="c39 doc-content">
<p class="c6 c44"><span class="c12"></span></p>
<a id="t.09dcd6efbb6b9f69deb59ee63faa42ec3d1642e1"></a><a id="t.0"></a>
<table class="c5">
    <tr class="c42">
        <td class="c0" colspan="3" rowspan="1">
            <p class="c11">
                <span class="c15 c10">RADAR ELECTR&Oacute;NICA</span>
            </p>
        </td>
        <td class="c18" colspan="1" rowspan="1">
            <p class="c16"><span class="c25 c31">Original</span></p>
        </td>
        <td class="c17" colspan="1" rowspan="1">
            <p class="c11">
                <span class="c25 c41">Contrato de Reparaci&oacute;n</span>
            </p>
        </td>
    </tr>
    <tr class="c22">
        <td class="c0" colspan="3" rowspan="1">
            <p class="c24"><span class="c1">de Enri Cravero &nbsp;</span></p>
            <p class="c6">
            <span class="c25 c37 c10"
            >Moreno 286 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Huinca
              Renanc&oacute;</span
            >
            </p>
            <p class="c11">
            <span class="c29 c10">Tel 02336-495797 &nbsp; &nbsp; &nbsp; </span
            ><span class="c10 c36">Wsp 2302521788</span>
            </p>
        </td>
        <td class="c35" colspan="2" rowspan="5">
            <p class="c11"><span class="c12"><?php echo $textoParaReemplazar; ?></span></p>
        </td>
    </tr>
    <tr class="c9">
        <td class="c19" colspan="1" rowspan="4">
            <p class="c11">
            <span class="c3"
            >Importe de se&ntilde;a para diagn&oacute;stico y
              Presupuesto</span
            >
            </p>
        </td>
        <td class="c2" colspan="1" rowspan="1">
            <p class="c11"><span class="c3">Equipos peque&ntilde;os</span></p>
        </td>
        <td class="c13" colspan="1" rowspan="1">
            <p class="c16"><span class="c3">$2.000,00</span></p>
        </td>
    </tr>
    <tr class="c9">
        <td class="c2" colspan="1" rowspan="1">
            <p class="c11"><span class="c3">TV hasta 21&rsquo;</span></p>
        </td>
        <td class="c13" colspan="1" rowspan="1">
            <p class="c16"><span class="c3">$2.000,00</span></p>
        </td>
    </tr>
    <tr class="c9">
        <td class="c2" colspan="1" rowspan="1">
            <p class="c11"><span class="c3">LCD-LED hasta 32&rsquo;</span></p>
        </td>
        <td class="c13" colspan="1" rowspan="1">
            <p class="c16"><span class="c3">$3.000,00</span></p>
        </td>
    </tr>
    <tr class="c9">
        <td class="c2" colspan="1" rowspan="1">
            <p class="c11">
                <span class="c3">LCD-LED m&aacute;s de 32&rsquo;</span>
            </p>
        </td>
        <td class="c13" colspan="1" rowspan="1">
            <p class="c16"><span class="c3">$4.000,00</span></p>
        </td>
    </tr>
    <tr class="c22">
        <td class="c26" colspan="5" rowspan="1">
            <p class="c6"><span class="c10 c14">Condiciones generales:</span></p>
            <p class="c6">
            <span class="c7 c10">1-</span
            ><span class="c3"
                >&nbsp;El titular del aparato abonar&aacute; un importe en pesos
              en concepto de se&ntilde;a para diagn&oacute;stico y / o
              presupuesto. Dicho importe ser&aacute; descontado del precio final
              de la reparaci&oacute;n, por lo que el propietario s&oacute;lo
              abonar&aacute; la diferencia al momento de retirar el bien.</span
                >
            </p>
            <p class="c6">
            <span class="c7"
            >Si la reparaci&oacute;n no se realizara por falta de repuestos o
              decisi&oacute;n del titular el importe se&ntilde;a ser&aacute;
              aplicado al costo por diagn&oacute;stico y presupuesto del
              aparato, </span
            ><span class="c7 c10"
                >no reintegr&aacute;ndose importe alguno al titular</span
                ><span class="c3">.</span>
            </p>
            <p class="c6">
            <span class="c7 c10">2-</span
            ><span class="c7">&nbsp;Reparaciones de TV CRT hasta </span
                ><span class="c7 c10">$8000</span
                ><span class="c7">&nbsp;y LCD-LED hasta </span
                ><span class="c7 c10">$18000</span
                ><span class="c3"
                >&nbsp;se realizar&aacute;n sin presupuesto previo.</span
                >
            </p>
            <p class="c6">
            <span class="c7 c10">3-</span
            ><span class="c7"
                >&nbsp;El aparato deber&aacute; ser retirado dentro de los</span
                ><span class="c7 c10">&nbsp;30 d&iacute;as</span
                ><span class="c3"
                >&nbsp;post reparaci&oacute;n. Pasado dicho plazo se
              actulizar&aacute; el importe de la misma de acuerdo al
              &iacute;ndice de inflaci&oacute;n oficial.</span
                >
            </p>
            <p class="c6">
            <span class="c7 c10">4-</span
            ><span class="c7"
                >&nbsp;Aparatos no retirados en el plazo m&aacute;ximo de</span
                ><span class="c7 c10">&nbsp;90 d&iacute;as</span
                ><span class="c7">&nbsp;se considerar&aacute;n </span
                ><span class="c7 c10">ABANDONO VOLUNTARIO</span
                ><span class="c7">&nbsp;de parte del titular y </span
                ><span class="c7 c10 c25"
                >Radar Electr&oacute;nica dispondr&aacute; del mismo para lo que
              considere necesario.</span
                >
            </p>
            <p class="c6">
            <span class="c7 c10">5- </span
            ><span class="c7"
                >El titular declara ser due&ntilde;o del aparato en
              reparaci&oacute;n y estar de acuerdo con las condiciones
              generales.</span
                >
            </p>
        </td>
    </tr>
    <tr class="c40">
        <td class="c28" colspan="4" rowspan="2">
            <p class="c30">
                <span class="c10 c38">NO PIERDA ESTE DOCUMENTO</span>
            </p>
            <p class="c30">
            <span class="c37"
            >deber&aacute; presentarlo para retirar su aparato reparado.</span
            >
            </p>
        </td>
        <td class="c17" colspan="1" rowspan="1">
            <p class="c8"><span class="c12"></span></p>
        </td>
    </tr>
    <tr class="c4">
        <td class="c17" colspan="1" rowspan="1">
            <p class="c16"><span class="c25 c31">Firma del Titular</span></p>
        </td>
    </tr>
</table>
<p class="c6 c34"><span class="c25 c32"></span></p>
<p class="c45">
      <span class="c12"
      >--------------------------------------------------------------------------------------------------------------------------------</span
      >
</p>
<p class="c33"><span class="c25 c43"></span></p>
<a id="t.017c4d03ed499d5e0cd4cdb033c1cc996a0f8b78"></a><a id="t.1"></a>
<table class="c5">
    <tr class="c42">
        <td class="c0" colspan="3" rowspan="1">
            <p class="c11">
                <span class="c15 c10">RADAR ELECTR&Oacute;NICA</span>
            </p>
        </td>
        <td class="c18" colspan="1" rowspan="1">
            <p class="c16"><span class="c25 c31">Duplicado</span></p>
        </td>
        <td class="c17" colspan="1" rowspan="1">
            <p class="c11">
                <span class="c25 c41">Contrato de Reparaci&oacute;n</span>
            </p>
        </td>
    </tr>
    <tr class="c22">
        <td class="c0" colspan="3" rowspan="1">
            <p class="c24"><span class="c1">de Enri Cravero &nbsp;</span></p>
            <p class="c6">
            <span class="c25 c37 c10"
            >Moreno 286 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Huinca
              Renanc&oacute;</span
            >
            </p>
            <p class="c11">
            <span class="c10 c29">Tel 02336-495797 &nbsp; &nbsp; &nbsp; </span
            ><span class="c36 c10">Wsp 2302521788</span>
            </p>
        </td>
        <td class="c35" colspan="2" rowspan="5">
            <p class="c11"><span class="c12"><?php echo $textoParaReemplazar; ?></span></p>
        </td>
    </tr>
    <tr class="c9">
        <td class="c19" colspan="1" rowspan="4">
            <p class="c11">
            <span class="c3"
            >Importe de se&ntilde;a para diagn&oacute;stico y
              Presupuesto</span
            >
            </p>
        </td>
        <td class="c2" colspan="1" rowspan="1">
            <p class="c11"><span class="c3">Equipos peque&ntilde;os</span></p>
        </td>
        <td class="c13" colspan="1" rowspan="1">
            <p class="c16"><span class="c3">$2.000,00</span></p>
        </td>
    </tr>
    <tr class="c9">
        <td class="c2" colspan="1" rowspan="1">
            <p class="c11"><span class="c3">TV hasta 21&rsquo;</span></p>
        </td>
        <td class="c13" colspan="1" rowspan="1">
            <p class="c16"><span class="c3">$2.000,00</span></p>
        </td>
    </tr>
    <tr class="c9">
        <td class="c2" colspan="1" rowspan="1">
            <p class="c11"><span class="c3">LCD-LED hasta 32&rsquo;</span></p>
        </td>
        <td class="c13" colspan="1" rowspan="1">
            <p class="c16"><span class="c3">$3.000,00</span></p>
        </td>
    </tr>
    <tr class="c9">
        <td class="c2" colspan="1" rowspan="1">
            <p class="c11">
                <span class="c3">LCD-LED m&aacute;s de 32&rsquo;</span>
            </p>
        </td>
        <td class="c13" colspan="1" rowspan="1">
            <p class="c16"><span class="c3">$4.000,00</span></p>
        </td>
    </tr>
    <tr class="c22">
        <td class="c26" colspan="5" rowspan="1">
            <p class="c6"><span class="c14 c10">Condiciones generales:</span></p>
            <p class="c6">
            <span class="c7 c10">1-</span
            ><span class="c3"
                >&nbsp;El titular del aparato abonar&aacute; un importe en pesos
              en concepto de se&ntilde;a para diagn&oacute;stico y / o
              presupuesto. Dicho importe ser&aacute; descontado del precio final
              de la reparaci&oacute;n, por lo que el propietario s&oacute;lo
              abonar&aacute; la diferencia al momento de retirar el bien.</span
                >
            </p>
            <p class="c6">
            <span class="c7"
            >Si la reparaci&oacute;n no se realizara por falta de repuestos o
              decisi&oacute;n del titular el importe se&ntilde;a ser&aacute;
              aplicado al costo por diagn&oacute;stico y presupuesto del
              aparato, </span
            ><span class="c7 c10"
                >no reintegr&aacute;ndose importe alguno al titular</span
                ><span class="c3">.</span>
            </p>
            <p class="c6">
            <span class="c7 c10">2-</span
            ><span class="c7">&nbsp;Reparaciones de TV CRT hasta </span
                ><span class="c7 c10">$8000</span
                ><span class="c7">&nbsp;y LCD-LED hasta </span
                ><span class="c7 c10">$18000</span
                ><span class="c3"
                >&nbsp;se realizar&aacute;n sin presupuesto previo.</span
                >
            </p>
            <p class="c6">
            <span class="c7 c10">3-</span
            ><span class="c7"
                >&nbsp;El aparato deber&aacute; ser retirado dentro de los</span
                ><span class="c7 c10">&nbsp;30 d&iacute;as</span
                ><span class="c3"
                >&nbsp;post reparaci&oacute;n. Pasado dicho plazo se
              actulizar&aacute; el importe de la misma de acuerdo al
              &iacute;ndice de inflaci&oacute;n oficial.</span
                >
            </p>
            <p class="c6">
            <span class="c7 c10">4-</span
            ><span class="c7"
                >&nbsp;Aparatos no retirados en el plazo m&aacute;ximo de</span
                ><span class="c7 c10">&nbsp;90 d&iacute;as</span
                ><span class="c7">&nbsp;se considerar&aacute;n </span
                ><span class="c7 c10">ABANDONO VOLUNTARIO</span
                ><span class="c7">&nbsp;de parte del titular y </span
                ><span class="c25 c7 c10"
                >Radar Electr&oacute;nica dispondr&aacute; del mismo para lo que
              considere necesario.</span
                >
            </p>
            <p class="c6">
            <span class="c7 c10">5- </span
            ><span class="c7"
                >El titular declara ser due&ntilde;o del aparato en
              reparaci&oacute;n y estar de acuerdo con las condiciones
              generales.</span
                >
            </p>
        </td>
    </tr>
    <tr class="c40">
        <td class="c28" colspan="4" rowspan="2">
            <p class="c30">
                <span class="c38 c10">NO PIERDA ESTE DOCUMENTO</span>
            </p>
            <p class="c30">
            <span class="c37"
            >deber&aacute; presentarlo para retirar su aparato reparado.</span
            >
            </p>
        </td>
        <td class="c17" colspan="1" rowspan="1">
            <p class="c8"><span class="c12"></span></p>
        </td>
    </tr>
    <tr class="c4">
        <td class="c17" colspan="1" rowspan="1">
            <p class="c16"><span class="c25 c31">Firma del Titular</span></p>
        </td>
    </tr>
</table>
<p class="c6 c34"><span class="c25 c32"></span></p>
<p class="c33"><span class="c12"></span></p>
</body>
</html>
