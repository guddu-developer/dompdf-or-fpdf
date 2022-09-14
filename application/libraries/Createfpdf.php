<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__) . '/fpdf184/fpdf.php');
class Createfpdf
{
    // protected $ci;

    // public function __construct()
    // {
        //  $this->ci =& get_instance();
    // }

    // public function myfunc(){

    //    
    //     echo "hiiiiii";
    // }

    function myfunc($txt)
    {
        // echo(dirname(__FILE__). '/fpdf184/fpdf.php');
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(40, 10, $txt);
        // Logo
        // $pdf->Image('logo.png', 10, 6, 30);
        $pdf->Output();
    }


}
