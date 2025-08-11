<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getMethod()
    {
        return 'Hello from TestController!';
    }
    
    public function testApi($name = null)
    {
        if ($name) {
            return "Route API fonctionne ! $name";
        }
        return 'Route API fonctionne !';
    }
}
