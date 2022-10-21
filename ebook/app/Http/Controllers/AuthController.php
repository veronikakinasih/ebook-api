<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120226,
            'Name' => 'Veronika Arisetyo Kinasih',
            'Phone' => '0895385082005',
            'Class' => 'XII RPL 7'
        ];
    }
}