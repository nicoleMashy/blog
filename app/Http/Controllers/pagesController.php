<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function getGallery(){
        return view("pages.gallery");
    }
}
