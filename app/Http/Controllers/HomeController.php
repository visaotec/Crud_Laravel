<?php
/* Crud com Laravel 8
   Autor: Isaias Oliveira
   visaotec.com@gmail.com
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return view('home');
    }
}
