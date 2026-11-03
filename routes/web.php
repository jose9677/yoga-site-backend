<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-certificado1', function () {
    return view('certificado.plantillaCertificado1', [
        'studentName' => 'María Alejandra Pérez',
        'studentId' => 'YI-2026-042',
        'certificateCode' => 'CERT-2026-998',
        'instructorName' => 'Pedro Luis'
    ]);
});

Route::get('/test-certificado1-new', function () {
    return view('certificado.plantillaCertificado1New', [
        'studentName' => 'María Alejandra Pérez',
        'studentId' => 'YI-2026-042',
        'certificateCode' => 'CERT-2026-998',
        'instructorName' => 'Pedro Luis'
    ]);
});

Route::get('/test-certificado1-E', function () {
    return view('certificado.plantillaCertificado1-E', [
        'studentName' => 'María Alejandra Pérez',
        'studentId' => 'YI-2026-042',
        'certificateCode' => 'CERT-2026-998',
        'instructorName' => 'Pedro Luis'
    ]);
});