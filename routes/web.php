<?php

use Illuminate\Support\Facades\Route;

use Inertia\Inertia; // 1. Import the Inertia facade

Route::get('/', function () {
    return Inertia::render('LayoutDashboard'); // 2. Render your 'Home.vue' component
});
