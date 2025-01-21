<?php

namespace App\Http\Controllers;

use App\Models\HRD;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dashboard()
    {
        $model = new HRD();
        $data['darren2'] = $model->getWhere('setting', ['id_setting' => 1]);
 
        echo view('header', $data);
        echo view('menu', $data);
        echo view('dashboard', $data);
        echo view('footer');
    }
}
