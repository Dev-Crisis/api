<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Response;

class PortfolioController extends Controller
{
    public function index(): Application|Response|ResponseFactory
    {
        return response([], 200);
    }
}
