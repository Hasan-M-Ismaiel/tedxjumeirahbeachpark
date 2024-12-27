<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{

    public function index(){
        return view('podcasts.index',[
            'podcasts'=>Podcast::get(),
        ]);
    }

}
