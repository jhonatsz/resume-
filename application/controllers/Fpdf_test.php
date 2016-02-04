<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Fpdf_test extends CI_Controller {
	/**
	 * Example: FPDF
	 *
	 * Documentation:
	 * http://www.fpdf.org/ > Manual
	 *
	 */
	public function index() {
		$this->load->library('fpdf_gen');

			// Logo
			$this->fpdf->Image('assets/img/profiles/4.jpeg',10,13,40);
			// Arial bold 15
			$this->fpdf->SetFont('Arial','B',15);
			// Move to the right
			$this->fpdf->Cell(80);

			// Title
			// Select Arial bold 15
			$this->fpdf->SetFont('Arial','B',18);
			// Move to the right
			//$this->fpdf->Cell(100);
			// Framed title
			$this->fpdf->SetTextColor(192,57,43);
			$this->fpdf->Cell(30,10,'Software Engineer Job Application',0,0,'C');
			// Line break
			$this->fpdf->Ln(12);

			// Applicant Name
			// Select Arial bold 15
			$this->fpdf->SetTextColor(0,0,0);
			$this->fpdf->SetFont('Arial','B',16);
			// Move to the right
			//$this->fpdf->Cell(100);
			// Framed title
			$this->fpdf->Cell(163,10,'Jhonathan Howard Falcutela',0,0,'C');
			// Line break
			$this->fpdf->Ln(25);

			// Chapter Title
			// Arial 12
			$this->fpdf->SetFont('Arial','',12);
			// Background color
			$this->fpdf->SetFillColor(200,220,255);
			// Title
			$this->fpdf->Cell(0,6,"Applicant Information:",0,1,'L',true);
			// Line break
			$this->fpdf->Ln(4);



			$this->fpdf->SetFont('Times','',12);
			for($i=1;$i<=40;$i++)
			    $this->fpdf->Cell(0,6,'Fullname: Jhonathan '.$i,0,1);

			echo $this->fpdf->Output();
	}
}
