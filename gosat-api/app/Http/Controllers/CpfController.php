<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CpfController extends Controller
{
    public static function formataCpf($cpf){
        return preg_replace('/[^0-9]/', '', $cpf);
    }
}
