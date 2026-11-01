<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Certificado Yoga Integral - Opción 3 Inmersión Profunda</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 0;
        }
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #0C2B67; /* Azul Noche Profundo de Fondo General */
            color: #FFFFFF;
            margin: 0;
            padding: 0;
            -webkit-print-color-adjust: exact;
        }
        .certificate-container {
            width: 1122px;
            height: 793px;
            background-color: #0C2B67; /* Azul Noche Profundo */
            margin: 0 auto;
            position: relative;
            box-sizing: border-box;
            border: 14px solid #A0C1FF; /* Marco Azul Cielo Claro para gran contraste */
            padding: 40px 60px;
            overflow: hidden;
        }
        .inner-border {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            border: 1px solid rgba(160, 193, 255, 0.4);
            pointer-events: none;
        }
        
        /* Cabecera */
        .header {
            display: table;
            width: 100%;
            margin-bottom: 25px;
        }
        .header-left {
            display: table-cell;
            width: 35%;
            font-size: 10px;
            color: #A0C1FF; /* Azul Cielo Claro */
            line-height: 1.4;
            font-weight: bold;
        }
        .header-center {
            display: table-cell;
            width: 30%;
            text-align: center;
            font-size: 26px;
            color: #EBE1D7; /* Arena Suave */
            letter-spacing: 2px;
        }
        .header-right {
            display: table-cell;
            width: 35%;
            text-align: right;
            vertical-align: top;
        }
        .logo-container {
            display: inline-block;
            background-color: #A0C1FF;
            color: #0C2B67;
            padding: 8px 18px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 13px;
            letter-spacing: 1.5px;
        }

        /* Cuerpo Central */
        .main-content {
            text-align: center;
            margin-top: 10px;
        }
        .school-title {
            font-size: 16px;
            color: #EBE1D7; /* Arena Suave */
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .diploma-title {
            font-size: 36px;
            color: #FFFFFF;
            font-weight: 800;
            letter-spacing: 8px;
            margin: 8px 0;
            text-transform: uppercase;
        }
        .to-text {
            font-size: 14px;
            font-style: italic;
            color: #A0C1FF;
            margin-bottom: 5px;
        }
        .student-name {
            font-size: 40px;
            color: #EBE1D7; /* Nombre del alumno en Crema Suave elegante */
            font-family: 'Georgia', serif;
            font-weight: bold;
            margin: 5px 0 15px 0;
            border-bottom: 3px solid #A0C1FF;
            display: inline-block;
            padding: 0 40px 6px 40px;
        }
        .description-text {
            font-size: 13px;
            color: #EBE1D7;
            max-width: 820px;
            margin: 0 auto 15px auto;
            line-height: 1.6;
        }
        
        /* Contenedor Claro de Destaque sobre Fondo Oscuro */
        .course-badge-light {
            background-color: #EBE1D7; /* Arena Suave */
            color: #0C2B67; /* Texto Azul Noche */
            padding: 12px 30px;
            border-radius: 6px;
            display: inline-block;
            margin: 10px 0;
            border: 1px solid #A0C1FF;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }
        .course-highlight {
            font-size: 20px;
            color: #0C2B67;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2.5px;
        }

        /* Pie del Certificado (Firmas y Sello) */
        .footer {
            display: table;
            width: 100%;
            position: absolute;
            bottom: 35px;
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
        
        /* Firma Manuscrita de Pedro Luis en tono celeste claro para contraste */
        .signature-area {
            position: relative;
            height: 50px;
            margin-bottom: 2px;
        }
        .signature-font {
            font-family: 'Brush Script MT', 'Comic Sans MS', cursive, serif;
            font-size: 32px;
            color: #A0C1FF; /* Azul Cielo Claro */
            position: absolute;
            bottom: 2px;
            left: 0;
            right: 0;
            text-align: center;
            transform: rotate(-3deg);
        }
        .signature-line {
            width: 220px;
            border-top: 1.5px solid #A0C1FF;
            margin: 0 auto 6px auto;
        }
        .instructor-name {
            font-size: 15px;
            font-weight: bold;
            color: #FFFFFF;
            margin: 0;
        }
        .instructor-role {
            font-size: 11px;
            color: #A0C1FF;
            margin: 2px 0 0 0;
        }
        
        /* Sello Oficial en Fondo Oscuro */
        .seal-box {
            width: 95px;
            height: 95px;
            background-color: #0C2B67;
            color: #FFFFFF;
            border-radius: 50%;
            margin: 0 auto;
            text-align: center;
            padding-top: 20px;
            box-sizing: border-box;
            border: 4px double #A0C1FF;
            box-shadow: 0 0 10px rgba(160, 193, 255, 0.3);
        }
        .seal-title {
            font-size: 9px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #A0C1FF;
        }
        .seal-subtitle {
            font-size: 12px;
            font-weight: bold;
            margin-top: 2px;
            color: #EBE1D7;
        }

        .metadata {
            font-size: 10px;
            color: #A0C1FF;
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
            Formación Integral Avanzada<br>
            Acreditación Internacional
        </div>
        <div class="header-center">
            ॐ
        </div>
        <div class="header-right">
            <div class="logo-container">
                PEDRO LUIS YOGA
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div class="main-content">
        <div class="school-title">La Escuela otorga el presente</div>
        <div class="diploma-title">Certificado</div>
        <div class="to-text">a</div>
        
        <div class="student-name">
            {{ $studentName ?? 'María Alejandra Pérez' }}
        </div>

        <div class="description-text">
            por haber acreditado su suficiencia y cumplido satisfactoriamente con los objetivos académicos, 
            teóricos y prácticos de especialización en el programa de formación profesional de
        </div>

        <div class="course-badge-light">
            <div class="course-highlight">
                CURSO ESPECIALIZADO DE YOGA INTEGRAL
            </div>
        </div>
    </div>

    <!-- Pie (Firmas, Datos y Sello) -->
    <div class="footer">
        <div class="footer-col" style="text-align: left;">
            <div class="metadata">
                <strong>ID Alumno:</strong> {{ $studentId ?? 'YI-2026-089' }}<br>
                <strong>Certificado N°:</strong> {{ $certificateCode ?? 'CERT-2026-554' }}<br>
                <strong>Reg. Nacional:</strong> 590773<br>
                <em>Avalado por estándares de enseñanza.</em>
            </div>
        </div>

        <div class="footer-col">
            <div class="signature-area">
                <div class="signature-font">Pedro Luis</div>
            </div>
            <div class="signature-line"></div>
            <p class="instructor-name">{{ $instructorName ?? 'Pedro Luis' }}</p>
            <p class="instructor-role">Fundador y Maestro Principal</p>
        </div>

        <div class="footer-col">
            <div class="seal-box">
                <div class="seal-title">Certificado</div>
                <div class="seal-subtitle">200 HORAS</div>
                <div style="font-size: 8px; color: #A0C1FF; margin-top:2px;">PEDRO LUIS YOGA</div>
            </div>
        </div>
    </div>

</div>

</body>
</html>