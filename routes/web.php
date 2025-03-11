<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::middleware("guest:customer")->group(function() {
    Route::get("login", [LoginController::class, "index"])->name("customer.login");
    Route::post("login", [LoginController::class, "authenticate"])->name("customer.authenticate");
});

Route::middleware("auth:customer")->group(function() {
    Route::get("logout", [LoginController::class, "logout"])->name("customer.logout");
    Route::get("/", [HomepageController::class, "index"])->name("homepage");
});

Route::prefix("admin")->group(function() {

    Route::middleware("guest:admin")->group(function() {
        Route::get("login", [AdminLoginController::class, "index"])->name("admin.login");
        Route::post("login", [AdminLoginController::class, "authenticate"])->name("admin.authenticate");
    });

    Route::middleware("auth:admin")->group(function() {
        Route::get("/", [AdminLoginController::class, "dashboard"])->name("admin.dashboard");
        Route::get("logout", [AdminLoginController::class, "logout"])->name("admin.logout");
    });

});