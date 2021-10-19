<?php

use Illuminate\Support\Facades\Broadcast;

/*
   Crud com Laravel 8
   Autor: Isaias Oliveira
   visaotec.com@gmail.com

*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
