<?php

    if (isset($_POST['all'])) {

        require '../include/dbConfig.php'; // connection to database
        require '../assets/fpdf/fpdf.php'; // link to fpdf library

        class PDF extends FPDF
            {
            // Page header
                function Header()
                {
                    // Logo
                    // $this->Image('logo.png',10,6,30);
                    // Arial bold 15
                    $this->SetFont('Arial','B',15);
                    // Move to the right
                    // $this->Cell(80);
                    // Title
                    $this->Cell(0,0,'Registration Record PIPOC 2021',0,0,'C');
                    // Line break
                    $this->Ln(10);
                }
            }

        $pdf = new PDF('L','mm','a4');
        $pdf->SetLeftMargin(18);
        $pdf->AddPage();
        $pdf->SetFont('arial','b','8');
        $pdf->Cell('15','8','No','1','0','C');
        $pdf->Cell('25','8','Bar Code','1','0','C');
        $pdf->Cell('25','8','Reg Date','1','0','C');
        $pdf->Cell('70','8','Full Name','1','0','C');
        $pdf->Cell('30','8','Industry','1','0','C');
        $pdf->Cell('40','8','Country','1','0','C');
        $pdf->Cell('60','8','Email','1','1','C');

        $no=0;

        $sql = "SELECT * FROM visitor21 ORDER BY BarCode ASC";
                $result = mysqli_query($conn, $sql);
                $checkResult = mysqli_num_rows($result);

                if ($checkResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $no++;

                        $pdf->SetFont('arial','b','8');
                        $pdf->Cell('15','8',$no,'1','0','C');
                        $pdf->Cell('25','8',$row['BarCode'],'1','0','C');
                        $pdf->Cell('25','8',$row['RegDate'],'1','0','C');
                        $pdf->Cell('70','8',$row['Fname'],'1','0','L');
                        $pdf->Cell('30','8',$row['InSector'],'1','0','C');
                        $pdf->Cell('40','8',$row['Country'],'1','0','C');
                        $pdf->Cell('60','8',$row['Email'],'1','1','L');
                        
                    }
                }
                else {
                    echo "No Record";
                }

        $pdf->Output('D','Registration Record PIPOC 2021.pdf');
    }
?>