<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get("/", [BookController::class, "Home"]);
Route::get("/create", [BookController::class, "Create"]) -> name("create");
Route::post("/create", [BookController::class, "SaveCreate"]) -> name("save-create");
Route::get("/show/{id}", [BookController::class, "Show"]) -> name("show");
Route::get("/edit/{id}", [BookController::class, "Edit"]) -> name("edit");
Route::put("/update/{id}", [BookController::class, "Update"]) -> name("update");
Route::get("/remove/{id}", [BookController::class, "Remove"]) -> name("remove");