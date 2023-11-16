<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Service\Profile\ProfileService;

class BaseController extends Controller
{
    public $service;
    public function __construct(ProfileService $service){
        $this->service = $service;
    }

}
