<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Exception;
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use function PHPUnit\Framework\returnArgument;

class ReporteController extends BaseController{

  protected $db;
  public function __construct(){
    $this->db = \Config\Database::connect();

  }

  public function getReport1(){

    $html = view('reportes/reporte1');
    $hmtl2PDF = new Html2Pdf();//Libreria
    $hmtl2PDF->writeHTML($html);//Contenido

    //Definir el tipo de archivo que deberá renderizar la vista(navegador)
    $this->response->setHeader('Content-type','application/pdf');

    $hmtl2PDF->output();//Generacion


  }


  public function getReport2(){
    $data = [
      "area"  =>"Software",
      "autor" =>"Kelvin pipa castilla",
      "productos" =>[
        ["id"=> 1,"descripcion" =>"Monitor", "precio" =>750],
        ["id"=> 2,"descripcion" =>"Impresora", "precio" =>500],
        ["id"=> 3,"descripcion" =>"WebCam", "precio" =>220],

      ],
      "estilos" =>view('reportes/estilos')
    ];

    $html = view('reportes/reporte2',$data);

    try{
      $html2PDF = new Html2Pdf('P','A4','es',true,'UTF-8',[10,10,10,10]);
      $html2PDF->writeHTML($html);

      $this->response->setHeader('Content-type','application/pdf');
      $html2PDF->output('Reporte-Finanzas.pdf');

    }catch(Html2PdfException $e){
      $html2PDF->clean();
      $formatter = new ExceptionFormatter($e);
      echo $formatter->getMessage();
      
    }

  }




  
  public function getReport3(){


    $query="
    SELECT 
      SH.id,
      SH.superhero_name,
      SH.full_name,
      PB.publisher_name,
      AL.alignment 
      FROM superhero SH
      LEFT JOIN publisher PB ON SH.publisher_id =PB.id
      LEFT JOIN alignment AL ON SH.alignment_id = AL.id
      ORDER BY 4
      LIMIT 150;"
    ;

    $rows = $this->db->query($query);
    $data = [
      "rows" => $rows->getResultArray(),
      "estilos" =>view('reportes/estilos')
    ];

    $html = view('reportes/reporte3',$data);

    try{
      $html2PDF = new Html2Pdf('L','A4','es',true,'UTF-8',[10,10,10,10]);
      $html2PDF->writeHTML($html);

      $this->response->setHeader('Content-type','application/pdf');
      $html2PDF->output('Reporte-superhero.pdf');

    }catch(Html2PdfException $e){
      $html2PDF->clean();
      $formatter = new ExceptionFormatter($e);
      echo $formatter->getMessage();
      
    }

  }



  public function filtrar(){

    $query="
    	SELECT 
      id,
      publisher_name
       FROM publisher;"
    ;

    $rows = $this->db->query($query);
    $data = [
      "rows" => $rows->getResultArray(),
      "estilos" =>view('reportes/estilos')
    ];

    return view('reportes/filtrar',$data);

  }


  public function getReport4($id){


    $query="
    SELECT 
      SH.id,
      SH.superhero_name,
      SH.full_name,
      PB.publisher_name,
      AL.alignment 
      FROM superhero SH
      LEFT JOIN publisher PB ON SH.publisher_id =PB.id
      LEFT JOIN alignment AL ON SH.alignment_id = AL.id
      WHERE SH.publisher_id = $id
      ORDER BY 4
      ;"
    ;

    $heroes = $this->db->query($query);
    $data = [
      "heroes" => $heroes->getResultArray(),
      "estilos" =>view('reportes/estilos')
    ];

    $html = view('reportes/reporte4',$data);

    try{
      $html2PDF = new Html2Pdf('L','A4','es',true,'UTF-8',[10,10,10,10]);
      $html2PDF->writeHTML($html);

      $this->response->setHeader('Content-type','application/pdf');
      $html2PDF->output('Reporte-superhero.pdf');

    }catch(Html2PdfException $e){
      $html2PDF->clean();
      $formatter = new ExceptionFormatter($e);
      echo $formatter->getMessage();
      
    }

  }


}