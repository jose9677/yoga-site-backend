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

Route::get('/test-certificado2', function () {
    return view('certificado.plantillaCertificado2', [
        'studentName' => 'María Alejandra Pérez',
        'studentId' => 'YI-2026-042',
        'certificateCode' => 'CERT-2026-998',
        'instructorName' => 'Pedro Luis'
    ]);
});

Route::get('/test-certificado3', function () {
    return view('certificado.plantillaCertificado3', [
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

Route::get('/test-certificado1-A', function () {
    return view('certificado.plantillaCertificado1-A', [
        'studentName' => 'María Alejandra Pérez',
        'studentId' => 'YI-2026-042',
        'certificateCode' => 'CERT-2026-998',
        'instructorName' => 'Pedro Luis'
    ]);
});

Route::get('/test-certificado1-B', function () {
    return view('certificado.plantillaCertificado1-B', [
        'studentName' => 'María Alejandra Pérez',
        'studentId' => 'YI-2026-042',
        'certificateCode' => 'CERT-2026-998',
        'instructorName' => 'Pedro Luis'
    ]);
});

Route::get('/test-certificado1-C', function () {
    return view('certificado.plantillaCertificado1-C', [
        'studentName' => 'María Alejandra Pérez',
        'studentId' => 'YI-2026-042',
        'certificateCode' => 'CERT-2026-998',
        'instructorName' => 'Pedro Luis'
    ]);
});

Route::get('/test-certificado1-D', function () {
    return view('certificado.plantillaCertificado1-D', [
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