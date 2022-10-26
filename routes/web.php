<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/examples/counter', 'examples.counter')->name('examples.counter');
Route::view('/examples/show-hide', 'examples.showHide')->name('examples.showHide');
Route::view('/examples/data-binding', 'examples.dataBinding')->name('examples.dataBinding');
Route::view('/examples/data-binding-modifier', 'examples.dataBindingModifier')->name('examples.dataBindingModifier');
Route::view('/examples/model-binding', 'examples.modelBinding')->name('examples.modelBinding');
