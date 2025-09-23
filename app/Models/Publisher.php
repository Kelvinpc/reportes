<?php


namespace App\Models;
use App\Controllers\BaseController;
use CodeIgniter\Model;

class Publisher extends Model{

  protected $table = "publisher";

  protected $primarykey = "id";

  protected $allowFields = ['publisher_name'];
  

}