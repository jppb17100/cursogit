<?php

Route::view('/', 'index')->name('homepage');

Route::prefix('produtos')->group(function(){
    //Get
    Route::get('/', 'ProdutosController@index')->name('produtos_index');
    Route::get('cadastro', 'ProdutosController@create')->name('produtos_cadastro');

    //Post
    Route::post('/', 'ProdutosController@store')->name('produtos_cadastro_armazenar');
});

Route::prefix('categorias')->group(function(){
    //Get
    Route::get('/', 'CategoriasController@index')->name('categorias_index');
    Route::get('cadastro', 'CategoriasController@create')->name('categorias_cadastro');
    Route::get('{id}/editar', 'CategoriasController@edit')->name('categorias_editar');
    Route::get('{id}', 'CategoriasController@show')->name('categorias_visualizar');

    //Put
    Route::put('/{id}', 'CategoriasController@update')->name('categorias_atualizar');

    //Post
    Route::post('/', 'CategoriasController@store')->name('categorias_cadastro_armazenar');

    //Delete
    Route::delete('{id}', 'CategoriasController@destroy')->name('categorias_excluir');
});
