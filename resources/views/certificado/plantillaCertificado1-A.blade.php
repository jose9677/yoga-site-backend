<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Certificado Yoga Integral - Pedro Luis</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 0;
        }
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #EBE1D7; /* Arena / Crema Suave de fondo general */
            color: #000000;
            margin: 0;
            padding: 0;
            -webkit-print-color-adjust: exact;
        }
        .certificate-container {
            width: 1122px;
            height: 793px;
            background-color: #FFFFFF; /* Blanco Puro para la tarjeta central */
            margin: 0 auto;
            position: relative;
            box-sizing: border-box;
            border: 12px solid #0C2B67; /* Azul Noche Profundo */
            padding: 35px 55px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(12, 43, 103, 0.15);
        }
        /* Marco interior secundario */
        .inner-border {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            border: 2px solid #A0C1FF; /* Azul Cielo Claro */
            pointer-events: none;
        }
        
        /* Cabecera enfocada en la Mentoría */
        .header {
            display: table;
            width: 100%;
            margin-bottom: 20px;
        }
        .header-left {
            display: table-cell;
            width: 50%;
            font-size: 11px;
            color: #0C2B67;
            line-height: 1.4;
            font-style: italic;
            font-weight: bold;
        }
        .header-right {
            display: table-cell;
            width: 50%;
            text-align: right;
            vertical-align: top;
        }
        .logo-container {
            display: inline-block;
            background-color: #0C2B67;
            color: #FFFFFF;
            padding: 8px 16px;
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
            font-size: 15px;
            color: #0C2B67;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            margin-bottom: 4px;
            font-weight: bold;
        }
        .diploma-title {
            font-size: 34px;
            color: #0C2B67;
            font-weight: 800;
            letter-spacing: 6px;
            margin: 6px 0;
            text-transform: uppercase;
        }
        .to-text {
            font-size: 13px;
            font-style: italic;
            color: #555555;
            margin-bottom: 4px;
        }
        .student-name {
            font-size: 38px;
            color: #0C2B67;
            font-family: 'Georgia', serif;
            font-weight: bold;
            margin: 5px 0 15px 0;
            border-bottom: 3px solid #A0C1FF;
            display: inline-block;
            padding: 0 40px 5px 40px;
        }
        .description-text {
            font-size: 13px;
            color: #333333;
            max-width: 820px;
            margin: 0 auto 15px auto;
            line-height: 1.6;
        }
        
        /* Contenedor del Curso con toque de autor */
        .course-badge {
            background-color: #EBE1D7; /* Arena / Crema Suave */
            color: #0C2B67;
            padding: 10px 25px;
            border-radius: 6px;
            display: inline-block;
            margin: 10px 0;
            border: 1px solid #A0C1FF;
        }
        .course-highlight {
            font-size: 19px;
            color: #0C2B67;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Pie de página / Firmas, Metadatos y Sello */
        .footer {
            display: table;
            width: 100%;
            position: absolute;
            bottom: 35px;
            left: 55px;
            right: 55px;
            box-sizing: border-box;
        }
        .footer-col {
            display: table-cell;
            width: 33.33%;
            text-align: center;
            vertical-align: bottom;
        }
        
        /* Firma Caligráfica de Pedro Luis */
        .signature-area {
            position: relative;
            height: 48px;
            margin-bottom: 2px;
        }
        .signature-font {
            font-family: 'Brush Script MT', 'Comic Sans MS', cursive, serif;
            font-size: 32px;
            color: #0C2B67;
            position: absolute;
            bottom: 2px;
            left: 0;
            right: 0;
            text-align: center;
            transform: rotate(-3deg);
        }
        .signature-line {
            width: 210px;
            border-top: 1.5px solid #0C2B67;
            margin: 0 auto 5px auto;
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
        
        /* Sello Oficial de Marca Personal */
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
            font-size: 8.5px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .seal-subtitle {
            font-size: 11px;
            font-weight: bold;
            margin-top: 2px;
            color: #A0C1FF;
        }

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

    <!-- Cabecera con Enfoque en el Mentor -->
    <div class="header">
        <div class="header-left">
            "El verdadero yoga no es la forma en que te paras,<br>
            sino la forma en que vives tu presencia."<br>
            <span style="color: #555555; font-weight: normal; font-size: 10px;">— Pedro Luis, Mentor de Yoga Integral</span>
        </div>
        <div class="header-right">
            <div class="logo-container">
                PEDRO LUIS YOGA
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div class="main-content">
        <div class="school-title">Programa Oficial de Mentoría y Formación</div>
        <div class="diploma-title">Certificado</div>
        <div class="to-text">otorgado a</div>
        
        <div class="student-name">
            {{ $studentName ?? 'María Alejandra Pérez' }}
        </div>

        <div class="description-text">
            por haber completado con excelencia el proceso de formación teórica, práctica y vivencial, 
            cumpliendo satisfactoriamente los objetivos del programa especializado dirigido por el instructor:
        </div>

        <div class="course-badge">
            <div class="course-highlight">
                CURSO ESPECIALIZADO DE YOGA INTEGRAL
            </div>
        </div>
    </div>

    <!-- Pie (Metadatos, Firma de Pedro Luis y Sello) -->
    <div class="footer">
        <div class="footer-col" style="text-align: left;">
            <div class="metadata">
                <strong>ID Alumno:</strong> {{ $studentId ?? 'YI-2026-089' }}<br>
                <strong>Certificación N°:</strong> {{ $certificateCode ?? 'CERT-2026-554' }}<br>
                <strong>Plataforma:</strong> pedroluisyoga.com<br>
                <em>Avalado bajo estándares de calidad.</em>
            </div>
        </div>

        <div class="footer-col">
            <div class="signature-area">
                <div class="signature-font">Pedro Luis</div>
            </div>
            <div class="signature-line"></div>
            <p class="instructor-name">Pedro Luis</p>
            <p class="instructor-role">Creador y Director del Programa</p>
        </div>

        <div class="footer-col">
            <div class="seal-box">
                <div class="seal-title">Mentoría</div>
                <div class="seal-subtitle">CERTIFICADO</div>
                <div style="font-size: 7.5px; color: #FFFFFF; margin-top:2px;">PEDRO LUIS</div>
            </div>
        </div>
    </div>

</div>

</body>
</html>