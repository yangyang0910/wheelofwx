<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $doctrine = new \Doctrine\Common\Cache\FilesystemCache(ROOT_PATH . "/../data");
    }
}
