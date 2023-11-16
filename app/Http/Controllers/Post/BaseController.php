<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Service\Post\PostService;

class BaseController extends Controller
{
   public $service;

   public function __construct(PostService $service){
        $this->service = $service;
   }
}

