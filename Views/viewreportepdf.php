<?php
include_once("../Assest/TCPDF/tcpdf.php");
 /*Crea el objeto pdf con TCPDF(PARAMETROS CON VARIABLES DEFINIDAS EN LA LIBRERIA);

 PDF_PAGE_ORIENTATION (P=portrait/vertical, L=landscape/horizontal) por default es P.
 PDF_UNIT [pt=point, mm=millimeter, cm=centimeter, in=inch] por defualt mm.
 PDF_PAGE_FORMAT tamaño página defualt 'A4'
 true =tipo de codificación acii por defaulr
 UTF-8 codificación de caracteres más extendida en la World Wide Web
 false Utiliza cache?
 */

 $objetoPDF=new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
 $objetoPDF->SetCreator('Coloca que tipo de documento PDF_HEADER_LOGOse crea');
$objetoPDF->SetAuthor(' autor');
$objetoPDF->SetTitle(' Titulo');
$objetoPDF->SetSubject(' Subtitulo');

$objetoPDF->SetMargins(20, 20, 20);
$objetoPDF->SetHeaderMargin(PDF_MARGIN_HEADER);
$objetoPDF->SetFooterMargin(PDF_MARGIN_FOOTER);
$objetoPDF->SetFont('times', 'I', 14);
$objetoPDF->AddPage();

$html="<h1 class='text-warning text-center mb-5 mt-5'>
Lista Productos
</h1>
<section>
<table class='table table-hover'>
    <thead>
        <tr>
            <th scope='col'>Id</th>
            <th scope='col'>Descripcion</th>
            <th scope='col'>Cantidad</th>
            <th scope='col'>precio</th>
            <th scope='col'>Imagen</th>
           

        </tr>
    </thead>
    <tbody>";

        while($renglon= $registros->fetch_assoc()){ 
          
        $html=$html."<tr>
            <td>".$renglon['id']."</td>
            <td>". $renglon['descripcion']."</td>
            <td>". $renglon['cantidad']."</td>
            <td>". $renglon['precio']."</td>
            <td>". $renglon['imagen']."</td>
         </tr>";
        } 
        $html=$html."</tbody></table></section>";
$objetoPDF->writeHTML($html);
$objetoPDF->Output('nombre_archivo.pdf','I');
 ?>