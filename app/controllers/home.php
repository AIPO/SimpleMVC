<?php
class Home extends Controller{
    public function index($name= '') {
        
        $user = $this->model('User');
        $user->name = $name; 
// pasiprasem user modelio ir per parametra perduodam reiksme is paspausdina.      
        $this->view('home/index',// nurodomas kelias i view
               ['name' => $user->name] // perduodami parametrai i $data array
                );
    }
}

