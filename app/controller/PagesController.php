<?php
namespace App\Controllers;

class PagesController {

    public function home() {

//        require 'app/views/home.view.php';
        view('home');
}

    public function news() {

        view('news');


}

    public function contact() {

        view('contact');

}

    public function about() {

//        require 'app/views/about.view.php';
        view('about');
}



}