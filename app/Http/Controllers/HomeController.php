<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

        public function contact(){
            return view("contact");
        }

        public function blues(){
            return view("blues");
        }

        public function index(){
            return view("index");
        }

        public function gospel(){
            return view("gospel");
        }

        public function hiphop(){
            return view("hip-hop");
        }

        public function jazz(){
            return view("jazz");
        }

        public function regge(){
            return view("regge");
        }

        public function tracks(){
            return view("tracks");
        }



}
