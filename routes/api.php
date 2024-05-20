<?php

use App\Http\Action\Service\CreateServiceAction;
use Illuminate\Support\Facades\Route;

Route::post('/service/create', CreateServiceAction::class);

