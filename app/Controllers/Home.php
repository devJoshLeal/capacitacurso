<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $apifetched = [];
    public function __construct(){
        helper('apifetch');
        $this->apifetched = courseFetch();
    }
    public function index(): string
    {
        return view('main_view',$this->apifetched);
    }
    public function allcontent(){
        return $this->response->setJSON($this->apifetched);
    }
    public function getresource($resourceId){
        $requesting=$this->request->getGet();
        $level= isset($requesting['level']) ? $requesting['level']-1 : null ;
        $lection= isset($requesting["lection"]) ? $requesting["lection"]-1 : null ;
        if(isset($level)&&isset($lection)){
            $resourceList=$this->apifetched["levels"][$level]["lections"][$lection]["resources"];
            foreach($resourceList as $resource){
                if($resource["id"]==$resourceId){
                    return $this->response->setJSON($resource);
                }
            }
        }
        
    }
}
