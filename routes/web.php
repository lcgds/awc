<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;

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
    return view('welcome');
});

Route::get('/luiz', function() {
    return view('luiz',
    [
        'possuiExperiencia' => true,

        'experiencias' => 
        [
            [
                'periodo' => '2019 - o momento',
                'cargo' => 'Técnico Administrativo',
                'empresa' => 'Companhia de Entrepostos e Armazéns Gerais de São Paulo'
            ],
            [
                'periodo' => '2016 - 2018',
                'cargo'=> 'Jovem Aprendiz',
                'empresa' => 'Rio Acima Distribuidora'
            ]
        ],

        'formacoes_academicas' =>
        [
            [
                'periodo' => '2020 - o momento',
                'curso' => 'Graduação em Sistemas para Internet',
                'instituicao' => 'Centro Universitário Senac - São Paulo, SP'
            ]
        ],

        'competencias' =>
        [
            [
                'nome' => 'Planejamento estratégico',
                'nivel' => 95
            ],
            [
                'nome' => 'Eficácia organizacional',
                'nivel' => 85
            ],
            [
                'nome' => 'Inglês',
                'nivel' => 75
            ]
        ],

        'certificados' =>
        [
            [
                'periodo' => '2017 - 2018',
                'titulo' => 'Técnico em Informática',
                'instituicao' => 'ETEC São Paulo'
            ],
            [
                'periodo' => '2015 - 2016',
                'titulo' => 'Técnico em Administração',
                'instituicao' => 'ETEC Jaraguá'
            ]
        ]
    ]
    );
});

Route::get('/avisos', function() 
{
    return view('avisos',
    [
        'nome' => 'Luiz',
        'mostrar' => true,
        'avisos' => 
        [
            [
                'id' => 1, 
                'texto' => 'Feriados agora'
            ],
            [
                'id' => 2,
                'texto' => 'Feriados semana que vem'
            ]
        ]
    ]);
});

/*
    Route::get('/clientes', function() {
        return view('clientes.index')->name('clientes.index');
    });
*/

Route::group(['prefix' => 'clientes'], function() {

    Route::get('/', [App\Http\Controllers\ClientsController::class, 'readClients'])
        ->name('clientes.index');

    Route::get('/create', [App\Http\Controllers\ClientsController::class, 'createClients'])
        ->name('clientes.create')
        ->middleware('auth');

    Route::post('/store', [App\Http\Controllers\ClientsController::class, 'storeClients'])
        ->name('clientes.store')
        ->middleware('auth');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
