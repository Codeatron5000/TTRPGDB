<?php

use App\Livewire\Game;
use App\Livewire\Search;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class);

Route::get('search', Search::class);

Route::get('game/{gameId}', Game::class);
