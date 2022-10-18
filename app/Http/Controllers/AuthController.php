<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
public function me(){
    return[
        'NIS' => 3103120160,
        'Nama' => 'naufal yanuardhi',
        'phone' => '0859148460441',
        'Kelas' => 'XII RPL 5'
        
    ];
}

};
