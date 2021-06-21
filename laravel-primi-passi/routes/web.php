<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $data = [
    'name' => 'Simone',
    'lastname' => 'Capozzi',
    'books' => [
      'Il Codice da Vinci, di Dan Brown', 
      'Harry Potter e la Pietra Filosofale, di J. K. Rowling',
      'Lo Hobbit, di J.R.R. Tolkien',
      'L\'alchimista, di Paulo Coelho',
      'Don Chisciotte della Mancha, di Miguel de Cervantes',
      'Il giovane Holden, di J.D. Salinger',
      'Il leone, la strega e l’armadio, di C. S. Lewis'
    ]
  ];
    return view('home', $data);
});

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/pagina', function () {
  $data = [
    'name' => 'Simone',
    'lastname' => 'Capozzi',
    'films' => [
      'Il padrino', 
      'Lo squalo',
      'Quei bravi ragazzi',
      'Pulp Fiction',
      'Taxi Driver',
      'C\'era una volta il West',
      'Il padrino - Parte II'
    ]
  ];
  return view('pagina', $data);
});


