<?php
namespace App\Models;
use App\Controllers\BaseController;
use CodeIgniter\Model;

class Races extends Model{

  protected $table = "race";

  protected $primarykey = "id";

  protected $allowFields = ['race'];

    public function getSuperHeroByRace($race_id){

    return $this->select('SH.id, SH.superhero_name, SH.full_name, RC.race, AL.alignment')
      ->join('race RC', 'RC.id = SH.race_id', 'left')
      ->join('alignment AL', 'AL.id = SH.alignment_id', 'left')
      ->orderBy('SH.superhero_name','ASC')
      ->where('SH.race_id', $race_id)
      ->findAll();

  }

}