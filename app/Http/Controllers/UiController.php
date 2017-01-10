<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UiController extends Controller{
    
    public function index(){
        $results = \App\Model\EmployementRecord::all();
        var_dump($results);
        
    }
    
            
}

