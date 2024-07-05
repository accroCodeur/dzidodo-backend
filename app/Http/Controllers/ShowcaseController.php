<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ShowcaseController extends Controller
{

    public function getJsonDatas($data){
        $jsonDatas = File::get(database_path('datas/'.$data.'.json'));
        return json_decode($jsonDatas);
    }

    private function getElementById($datas, $id){
        $elements = array_filter($datas, function($element)use($id){
            return $element->id == $id;
        });

        return count($elements) ? $elements[0] : null;
    }

    public function index(){
        return view('showcase.pages.home');
    }

    //get project by id and show view
    public function showProject($id){

        $projects = $this->getJsonDatas('projects');
        $project = $this->getElementById($projects, $id);
        

        if($project){
            return view('showcase.pages.project-detail', compact('project'));
        }

        return abort(404);
    }
}
