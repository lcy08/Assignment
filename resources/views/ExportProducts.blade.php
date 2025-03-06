<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require '../vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Style\Border;
    use PhpOffice\PhpSpreadsheet\Style\Alignment;

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setTitle('Sheet 1'); // This is where you set the title
        $sheet->setCellValue('A1', 'No'); // This is where you set the column header
        $sheet->setCellValue('B1', 'Nama Produk');// This is where you set the column header
        $sheet->setCellValue('C1', 'Kategori');// This is where you set the column header
        $sheet->setCellValue('D1', 'Harga Beli');// This is where you set the column header
        $sheet->setCellValue('E1', 'Harga Jual');// This is where you set
        $sheet->setCellValue('F1', 'Stok');// This is where you set the column header
        $row = 2;// Initialize row counter

        // This is the loop to populate data
        foreach ($products as $i => $product) {
            $sheet->setCellValue('A' . $row, $i+1);
            $sheet->setCellValue('B' . $row, $product->name);
            $sheet->setCellValue('C' . $row, $product->category);
            $sheet->setCellValue('D' . $row, $product->buy_price);
            $sheet->setCellValue('E' . $row, $product->sell_price);
            $sheet->setCellValue('F' . $row, $product->stock);
            $row++;
        }
        $writer = new Xlsx($spreadsheet);
        $fileName = "Products.xlsx";
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment;filename=\"$fileName\"");
        $writer->save("php://output");
        exit();
    ?>
