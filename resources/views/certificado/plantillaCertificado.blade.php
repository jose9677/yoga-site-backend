<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Certificado de Yoga Integral</title>
    <style>
        /* Configuración de página para impresión/PDF horizontal (Landscape) */
        @page {
            size: A4 landscape;
            margin: 0;
        }
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #EBE1D7; /* Arena / Crema Suave */
            color: #000000;
            margin: 0;
            padding: 0;
            -webkit-print-color-adjust: exact;
        }
        .certificate-container {
            width: 1122px;
            height: 793px;
            background-color: #FFFFFF; /* Blanco Puro */
            margin: 0 auto;
            position: relative;
            box-sizing: border-box;
            border: 12px solid #0C2B67; /* Azul Noche Profundo */
            padding: 40px 60px;
            overflow: hidden;
        }
        /* Marco interior decorativo */
        .inner-border {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            border: 2px solid #A0C1FF; /* Azul Cielo Claro */
            pointer-events: none;
        }
        
        /* Cabecera */
        .header {
            display: table;
            width: 100%;
            margin-bottom: 20px;
        }
        .header-left {
            display: table-cell;
            width: 40%;
            font-size: 10px;
            color: #0C2B67;
            line-height: 1.4;
            font-weight: bold;
        }
        .header-center {
            display: table-cell;
            width: 20%;
            text-align: center;
            font-size: 22px;
            color: #0C2B67;
            letter-spacing: 2px;
        }
        .header-right {
            display: table-cell;
            width: 40%;
            text-align: right;
            vertical-align: top;
        }
        .logo-container {
            display: inline-block;
            background-color: #0C2B67;
            color: #FFFFFF;
            padding: 8px 15px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 14px;
            letter-spacing: 1px;
        }

        /* Cuerpo Central */
        .main-content {
            text-align: center;
            margin-top: 30px;
        }
        .school-title {
            font-size: 18px;
            color: #0C2B67;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .certifies-text {
            font-size: 15px;
            color: #000000;
            margin-bottom: 10px;
        }
        .diploma-title {
            font-size: 32px;
            color: #0C2B67;
            font-weight: bold;
            letter-spacing: 6px;
            margin: 10px 0;
            text-transform: uppercase;
        }
        .to-text {
            font-size: 14px;
            font-style: italic;
            color: #666666;
            margin-bottom: 5px;
        }
        .student-name {
            font-size: 38px;
            color: #0C2B67;
            font-family: 'Georgia', serif;
            font-weight: bold;
            margin: 10px 0 20px 0;
            border-bottom: 2px solid #A0C1FF;
            display: inline-block;
            padding: 0 40px 5px 40px;
        }
        .description-text {
            font-size: 13px;
            color: #333333;
            max-width: 800px;
            margin: 0 auto 15px auto;
            line-height: 1.6;
        }
        .course-highlight {
            font-size: 22px;
            color: #0C2B67;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin: 15px 0;
        }

        /* Pie de página / Firmas y Sellos */
        .footer {
            display: table;
            width: 100%;
            margin-top: 40px;
            position: absolute;
            bottom: 40px;
            left: 60px;
            right: 60px;
            box-sizing: border-box;
        }
        .footer-col {
            display: table-cell;
            width: 33.33%;
            text-align: center;
            vertical-align: bottom;
        }
        .signature-line {
            width: 200px;
            border-top: 1px solid #0C2B67;
            margin: 0 auto 8px auto;
        }
        .instructor-name {
            font-size: 14px;
            font-weight: bold;
            color: #0C2B67;
            margin: 0;
        }
        .instructor-role {
            font-size: 11px;
            color: #555555;
            margin: 2px 0 0 0;
        }
        
        /* Sello institucional circular */
        .seal-box {
            width: 90px;
            height: 90px;
            background-color: #0C2B67;
            color: #FFFFFF;
            border-radius: 50%;
            margin: 0 auto;
            text-align: center;
            padding-top: 18px;
            box-sizing: border-box;
            border: 3px double #A0C1FF;
        }
        .seal-title {
            font-size: 9px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .seal-subtitle {
            font-size: 11px;
            font-weight: bold;
            margin-top: 3px;
            color: #A0C1FF;
        }

        /* Metadatos y códigos de registro */
        .metadata {
            font-size: 10px;
            color: #555555;
            text-align: left;
            line-height: 1.5;
        }
    </style>
</head>
<body>

<div class="certificate-container">
    <div class="inner-border"></div>

    <!-- Cabecera -->
    <div class="header">
        <div class="header-left">
            Escuela Registrada en Yoga Alliance<br>
            Formación Integral Avanzada y Consciencia Plena<br>
            Modalidad Online y Presencial
        </div>
        <div class="header-center">
            ॐ
        </div>
        <div class="header-right">
            <div class="logo-container">
                YOGA INTEGRAL ACADEMY
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div class="main-content">
        <div class="school-title">La Escuela de Yoga Integral otorga el presente</div>
        <div class="diploma-title">Certificado</div>
        <div class="to-text">a</div>
        
        <!-- Nombre del Alumno dinámico vía Blade -->
        <div class="student-name">
            {{ $studentName ?? 'Nombre del Estudiante' }}
        </div>

        <div class="description-text">
            por haber acreditado su suficiencia y cumplido satisfactoriamente con los objetivos académicos, 
            teóricos y prácticos de especialización en el programa de formación profesional de
        </div>

        <div class="course-highlight">
            CURSO ESPECIALIZADO DE YOGA INTEGRAL
        </div>
    </div>

    <!-- Pie del Certificado (Firmas y Sello) -->
    <div class="footer">
        <!-- Columna Izquierda: Datos de Registro -->
        <div class="footer-col" style="text-align: left;">
            <div class="metadata">
                <strong>ID Alumno:</strong> {{ $studentId ?? 'YI-2026-089' }}<br>
                <strong>Certificado N°:</strong> {{ $certificateCode ?? 'CERT-2026-554' }}<br>
                <strong>Reg. Nacional:</strong> 590773<br>
                <em>Avalado por estándares internacionales de enseñanza.</em>
            </div>
        </div>

        <!-- Columna Central: Firma del Instructor -->
        <div class="footer-col">
            <div class="signature-line"></div>
            <p class="instructor-name">{{ $instructorName ?? 'Pedro Luis' }}</p>
            <p class="instructor-role">Maestro y Director del Programa Yoga Integral</p>
        </div>

        <!-- Columna Derecha: Sello Oficial -->
        <div class="footer-col">
            <div class="seal-box">
                <div class="seal-title">Certificado</div>
                <div class="seal-subtitle">100h / 200h</div>
                <div style="font-size: 8px; color: #FFFFFF; margin-top:2px;">YOGA INTEGRAL</div>
            </div>
        </div>
    </div>

</div>

</body>
</html>