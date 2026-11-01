<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Certificado Yoga Integral - Opción 1-C Comunidad</title>
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
            padding: 40px 60px;
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
        
        /* Cabecera optimizada para impacto visual rápido */
        .header {
            display: table;
            width: 100%;
            margin-bottom: 25px;
        }
        .header-left {
            display: table-cell;
            width: 50%;
            font-size: 11px;
            color: #0C2B67;
            line-height: 1.4;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            vertical-align: middle;
        }
        .header-right {
            display: table-cell;
            width: 50%;
            text-align: right;
            vertical-align: middle;
        }
        .logo-container {
            display: inline-block;
            background-color: #0C2B67;
            color: #FFFFFF;
            padding: 9px 18px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 13px;
            letter-spacing: 2px;
        }

        /* Cuerpo Central Limpio y Dinámico */
        .main-content {
            text-align: center;
            margin-top: 5px;
        }
        .school-title {
            font-size: 15px;
            color: #0C2B67;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 6px;
            font-weight: bold;
        }
        .diploma-title {
            font-size: 36px;
            color: #0C2B67;
            font-weight: 800;
            letter-spacing: 7px;
            margin: 6px 0;
            text-transform: uppercase;
        }
        .to-text {
            font-size: 13.5px;
            font-style: italic;
            color: #555555;
            margin-bottom: 6px;
        }
        .student-name {
            font-size: 40px;
            color: #0C2B67;
            font-family: 'Georgia', serif;
            font-weight: bold;
            margin: 6px 0 18px 0;
            border-bottom: 3px solid #A0C1FF;
            display: inline-block;
            padding: 0 45px 6px 45px;
        }
        .description-text {
            font-size: 13.5px;
            color: #333333;
            max-width: 820px;
            margin: 0 auto 18px auto;
            line-height: 1.65;
        }
        
        /* Insignia del Curso destacada */
        .course-badge {
            background-color: #EBE1D7; /* Arena / Crema Suave */
            color: #0C2B67;
            padding: 11px 28px;
            border-radius: 6px;
            display: inline-block;
            margin: 8px 0;
            border: 1px solid #A0C1FF;
        }
        .course-highlight {
            font-size: 20px;
            color: #0C2B67;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2.5px;
        }

        /* Pie de página optimizado para menciones en Redes */
        .footer {
            display: table;
            width: 100%;
            position: absolute;
            bottom: 38px;
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
            margin: 0 auto 6px auto;
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
        
        /* Sello Oficial Redondeado con Llamado a Redes */
        .seal-box {
            width: 92px;
            height: 92px;
            background-color: #0C2B67;
            color: #FFFFFF;
            border-radius: 50%;
            margin: 0 auto;
            text-align: center;
            padding-top: 19px;
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

    <!-- Cabecera limpia -->
    <div class="header">
        <div class="header-left">
            Comunidad Global de Bienestar<br>
            <span style="font-weight: normal; color: #555555; font-size: 9.5px;">Formación Profesional Certificada</span>
        </div>
        <div class="header-right">
            <div class="logo-container">
                PEDRO LUIS YOGA
            </div>
        </div>
    </div>

    <!-- Cuerpo Central -->
    <div class="main-content">
        <div class="school-title">La Academia de Pedro Luis otorga el presente</div>
        <div class="diploma-title">Certificado</div>
        <div class="to-text">a</div>
        
        <div class="student-name">
            {{ $studentName ?? 'María Alejandra Pérez' }}
        </div>

        <div class="description-text">
            por haber completado exitosamente las horas de formación teórica y práctica, demostrando dedicación 
            y dominio de los principios del bienestar bajo la dirección y mentoría de:
        </div>

        <div class="course-badge">
            <div class="course-highlight">
                CURSO ESPECIALIZADO DE YOGA INTEGRAL
            </div>
        </div>
    </div>

    <!-- Pie (Metadatos, Firma y Sello optimizados para fotos/redes) -->
    <div class="footer">
        <div class="footer-col" style="text-align: left;">
            <div class="metadata">
                <strong>ID Alumno:</strong> {{ $studentId ?? 'YI-2026-089' }}<br>
                <strong>Certificado N°:</strong> {{ $certificateCode ?? 'CERT-2026-554' }}<br>
                <strong>Comunidad:</strong> pedroluisyoga.com<br>
                <em>Comparte tu logro: @PedroLuisYoga</em>
            </div>
        </div>

        <div class="footer-col">
            <div class="signature-area">
                <div class="signature-font">Pedro Luis</div>
            </div>
            <div class="signature-line"></div>
            <p class="instructor-name">Pedro Luis</p>
            <p class="instructor-role">Fundador y Guía Principal</p>
        </div>

        <div class="footer-col">
            <div class="seal-box">
                <div class="seal-title">Verificado</div>
                <div class="seal-subtitle">ONLINE</div>
                <div style="font-size: 7.5px; color: #FFFFFF; margin-top:2px;">PEDRO LUIS</div>
            </div>
        </div>
    </div>

</div>

</body>
</html>