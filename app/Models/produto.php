<?php
/* Crud com Laravel 8
   Autor: Isaias Oliveira
   visaotec.com@gmail.com
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    public $timestamps = false;
    use HasFactory;
}
