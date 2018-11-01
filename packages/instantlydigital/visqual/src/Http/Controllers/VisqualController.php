<?php

namespace InstantlyDigital\Visqual\Controllers;

use App\Http\Controllers\Controller;

class VisqualController extends Controller
{

    private function getModels($path = false){
        $path = $path ?: app_path() . env('VISQUAL_MODEL_DIR', "/Models");
        $out = [];
        $results = scandir($path);
        foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;
            $filename = $path . '/' . $result;
            if (is_dir($filename)) {
                $out = array_merge($out, $this->getModels($filename));
            }else{
                $out[] = substr($filename,0,-4);
            }
        }
        return $out;
    }

    public function index() {
        $models = $this->getModels();
        return view('visqual::index', compact('models'));
    }
}