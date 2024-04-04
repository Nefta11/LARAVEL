<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Canales de Transmisión
|--------------------------------------------------------------------------
|
| Aquí puedes registrar todos los canales de transmisión de eventos que tu
| aplicación soporta. Las devoluciones de llamada de autorización de canal dadas son
| utilizadas para verificar si un usuario autenticado puede escuchar el canal.
|
*/


Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
