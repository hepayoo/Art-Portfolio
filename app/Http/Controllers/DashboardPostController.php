<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Post;

class DashboardPostController extends Controller
{
    //
    public function index()
    {

     return PostResource::collection(
      Post::where('user_id',auth()->user()->id)->latest()->get()
     );

    }
}
