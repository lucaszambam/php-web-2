<?php
require_once __DIR__ . '/vendor/autoload.php';

// Cria um novo objeto MPDF
$mpdf = new \Mpdf\Mpdf();

// HTML para o conteúdo do PDF
$html = '<h1>Meu Primeiro PDF com MPDF</h1>';
$html .= '<p>Este é um PDF gerado utilizando a biblioteca MPDF.</p>';

// Adiciona o HTML ao PDF
$mpdf->WriteHTML($html);

// Salva o PDF no arquivo
$mpdf->Output('meu_pdf.pdf', 'D');