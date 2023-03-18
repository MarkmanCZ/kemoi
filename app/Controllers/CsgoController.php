<?php 

namespace App\Controllers;


use App\Models\Model;
use App\Models\Page;

class CsgoController extends BaseController
{
    public function showIndex(){
      $model = new Model();
      $data['data'] = $model->getPlayer();
      return view('index', $data);
    }


      public function showZapasy($zapas){
        $model = new Model();
        $data['zapas'] = $zapas;
        $data['data'] = $model->getZapasyById(intval($zapas));
        
        return view('zapasy', $data);
      }

      public function showMapDetail($id) {
        $model = new Model();

        $data['mapa'] = $model->getMapById($id);

        return view('mapDetail', $data);
      }
}
