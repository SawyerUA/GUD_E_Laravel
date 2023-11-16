<?php

namespace App\Http\Controllers\Profile\Password;

use App\Http\Controllers\Controller;
use App\Service\Profile\ProfilePasswordService;

class BaseController extends Controller
{
    public $service;
    public function __construct(ProfilePasswordService $service){
        $this->service = $service;
    }

}
