<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Hello World für die Webseite und Teil der Aufgabe 2:

Route::get('/hello', function () {
    return 'Hello World';
});