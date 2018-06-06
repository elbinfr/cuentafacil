<?php

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::get('master', function(){
   return view('layouts.master');
});

Route::get('/estado-de-cuenta/{slug}', function ($slug) {
    $transactions = [
        [
            'type' => 'venta',
            'document' => 'Factura',
            'date' => '01/02/2018',
            'description' => 'Venta de Carbon',
            'amount'    => 5000.00,
            'balance'   => 6000.00
        ],
        [
            'type' => 'deposito',
            'document' => 'voucher',
            'date' => '03/02/2018',
            'description' => 'Amortizacion de factura',
            'amount'    => 3000.00,
            'balance'   => 3000.00
        ],
    ];

    return $transactions;
});

Route::get('/pagos', function () {
    $payments = [
        [
            'customer_id' => 1,
            'date'      => '11/04/2018',
            'amount'    => 1000.00
        ],
        [
            'customer_id' => 1,
            'date'      => '12/04/2018',
            'amount'    => 3000.00
        ]
    ];

    return $payments;
});
