<?php

use App\Http\Controllers\Admin\Prospects\ProspectsController;




Route::get('/', [ProspectsController::class, 'index'])->name('dashboard');

?>