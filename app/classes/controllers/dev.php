<?php
class dev extends Controller {


    public function slider() {
        $viewmodel = new devModel();
        $this->ReturnView($viewmodel->slider());
    }

    public function fontSelecter(){
        $viewmodel = new devModel();
        $this->ReturnView($viewmodel->fontSelecter());
    }

}