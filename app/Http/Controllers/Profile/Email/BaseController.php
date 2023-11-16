<?php

namespace App\Http\Controllers\Profile\Email;

use App\Http\Controllers\Controller;
use App\Service\Profile\ProfileEmailService;

class BaseController extends Controller
{
    public $service;
    public function __construct(ProfileEmailService $service){
        $this->service = $service;
    }

}
