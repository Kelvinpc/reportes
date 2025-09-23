<?php


namespace App\Models;
use App\Controllers\BaseController;
use CodeIgniter\Model;

class Alignment extends Model{

  protected $table = "alignment";

  protected $primarykey = "id";

  protected $allowFields = ['alignment'];


    public function getSuperHeroByAlignment($alignment_id){

    return $this->select('SH.id, SH.superhero_name, SH.full_name, RC.race, AL.alignment')
      ->join('race RC', 'RC.id = SH.race_id', 'left')
      ->join('alignment AL', 'AL.id = SH.alignment_id', 'left')
      ->orderBy('SH.superhero_name','ASC')
      ->where('SH.alignment_id', $alignment_id)
      ->findAll();

  }


}