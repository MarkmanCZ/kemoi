<?php

namespace App\Controllers;


use App\Models\Model;
use App\Models\Page;

class KolaController extends BaseController
{
  public function showIndex(){
    $model = new Model();
        $data['data'] = $model->getTym();
        echo view('index', $data);
  }

  public function showTym($tym){
    $model = new Model();
    $data['tym'] = $tym;
    $data['data'] = $model->getZavodnikById($tym);
    echo view('zavodnik', $data);
  }

  public function getForm(){
    $model = new Model();
        $data['data'] = $model->getZavod();
        echo view('form', $data);
  }

  public function getAddForm(){
    echo view('addform');
  }

  public function getPagination(){
      $pager = \Config\Services::pager();
        $model = new Page();
        $data['data'] = $model->paginate(15);
        $data['pager'] = $model->pager;
        $data['title'] = "Pagination";
        echo view('misto', $data);
  }

  public function addItem(){
      $data = [ 'nazev' => $this->request->getVar('nazev') ];
      $db = \Config\Database::connect();
      $builder = $db->table('zavod');
      $builder->insert($data);
  }

  public function getNiceGUI(){
      echo view('success');
  }
}
