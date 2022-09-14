<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller  {

	public function index()
	{
     $this->load->helper("url");

		// $file=	fopen("mytxt.pdf","w");
		$html=file_get_contents("https://guddu-developer.github.io/javascript/files/image2pdf/index.html");
		// fwrite($file,$html);
		// fclose($file);

$this->load->library("Createpdffromhtml");

$this->createpdffromhtml->createPDF($html,"mypdf");



	
//  echo dirname(__FILE__);

    //   $this->load->helper("download");
		// $data = 'Here is some text!';
		// $name = 'index.php';
		// force_download($name, $data);
// $this->load->view('welcome_message');


	}




function fpdf(){
	$this->load->helper("url");
		//   echo "dfffffff";
			$this->load->library("createfpdf");
		  $this->createfpdf->myfunc("hellow god");


		// require_once(dirname(__FILE__) . '/fpdf184/fpdf.php');
		// echo (dirname(__FILE__).'/fpdf184/fpdf.php');

		// $pdf = new FPDF();
		// $pdf->AddPage();
		// $pdf->SetFont('Arial', 'B', 16);
		// $pdf->Cell(40, 10, "hhhhhhhhhhhhh");
		// $pdf->Output();
}

}
