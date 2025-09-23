<?php

namespace App\Models;
use CodeIgniter\Model;
use spipuhtml2pdf;

class Superhero extends Model{

  protected $table = 'superhero SH';

  protected $allowedFields =['id','superhero_name', 'full_name', 'race','alignment'];
  
//DEFINIMOS EL MÉTODO DE ACCESO A DATOS EN EL MODELO PARA PDOER REUTILIZARLO
  public function getSuperHeroByPublisher($publisher_id){

    return $this->select('SH.id, SH.superhero_name, SH.full_name, RC.race, AL.alignment')
      ->join('race RC', 'RC.id = SH.race_id', 'left')
      ->join('alignment AL', 'AL.id = SH.alignment_id', 'left')
      ->orderBy('SH.superhero_name','ASC')
      ->where('SH.publisher_id', $publisher_id)
      ->findAll();

  }


  public function getSuperHeroByRaceAlignment($race_id, $alignment_id){

    return $this->select('SH.id, SH.superhero_name, SH.full_name, RC.race, AL.alignment')
      ->join('race RC', 'RC.id = SH.race_id', 'left')
      ->join('alignment AL', 'AL.id = SH.alignment_id', 'left')
      ->orderBy('SH.superhero_name','ASC')
      ->where('SH.race_id', $race_id)
      ->where('SH.alignment_id', $alignment_id)
      ->findAll();

  }
}


// SELECT 
//   SH.id,
//   SH.superhero_name,
//   SH.full_name,
//   RC.race,
//   AL.alignment
//   FROM superhero SH
//   LEFT JOIN  race ON RC.id = SH.race_id
//   LEFT JOIN  alignment AL ON AL.id = SH.alignment_id
//   WHERE SH.publisher_id = 13;