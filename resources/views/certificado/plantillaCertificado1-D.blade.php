<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Certificado - Sello de Autor Pedro Luis</title>
    <style>
        @page { size: A4 landscape; margin: 0; }
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #EBE1D7;
            color: #000000;
            margin: 0; padding: 0;
            -webkit-print-color-adjust: exact;
        }
        .certificate-container {
            width: 1122px; height: 793px;
            background-color: #FFFFFF;
            margin: 0 auto; position: relative;
            box-sizing: border-box;
            border: 2px solid #0C2B67;
            padding: 45px 65px;
            overflow: hidden;
        }
        .corner-tl, .corner-tr, .corner-bl, .corner-br {
            position: absolute; width: 35px; height: 35px; border-color: #0C2B67; border-style: solid;
        }
        .corner-tl { top: 20px; left: 20px; border-width: 3px 0 0 3px; }
        .corner-tr { top: 20px; right: 20px; border-width: 3px 3px 0 0; }
        .corner-bl { bottom: 20px; left: 20px; border-width: 0 0 3px 3px; }
        .corner-br { bottom: 20px; right: 20px; border-width: 0 3px 3px 0; }

        .watermark-logo {
            position: absolute; top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 380px; opacity: 0.04; pointer-events: none;
            text-align: center; font-size: 150px; color: #0C2B67;
        }

        .header { display: table; width: 100%; margin-bottom: 20px; }
        .header-left { display: table-cell; width: 50%; font-size: 11px; color: #0C2B67; line-height: 1.4; font-weight: bold; }
        .header-right { display: table-cell; width: 50%; text-align: right; vertical-align: top; }
        .logo-box {
            display: inline-block; background-color: #0C2B67; color: #FFFFFF;
            padding: 8px 16px; border-radius: 4px; font-weight: bold; font-size: 13px; letter-spacing: 1px;
        }

        .main-content { text-align: center; margin-top: 15px; position: relative; z-index: 2; }
        .school-title { font-size: 14px; color: #0C2B67; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 8px; font-weight: bold; }
        .diploma-title { font-size: 36px; color: #0C2B67; font-weight: 800; letter-spacing: 5px; margin: 5px 0; text-transform: uppercase; }
        .to-text { font-size: 13px; font-style: italic; color: #555555; margin-bottom: 5px; }
        
        .student-name {
            font-size: 40px; color: #0C2B67; font-family: 'Georgia', serif; font-weight: bold;
            margin: 10px 0 15px 0; border-bottom: 2px solid #A0C1FF; display: inline-block; padding: 0 40px 5px 40px;
        }
        .description-text { font-size: 13px; color: #333333; max-width: 820px; margin: 0 auto 15px auto; line-height: 1.6; }
        
        .course-badge {
            background-color: #0C2B67; color: #FFFFFF; padding: 10px 25px; border-radius: 4px;
            display: inline-block; margin: 10px 0; border: 1px solid #A0C1FF; font-size: 18px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase;
        }

        .footer { display: table; width: 100%; position: absolute; bottom: 35px; left: 65px; right: 65px; box-sizing: border-box; z-index: 2; }
        .footer-col { display: table-cell; width: 33.33%; text-align: center; vertical-align: bottom; }
        
        .signature-area { position: relative; height: 45px; margin-bottom: 2px; }
        .signature-font {
            font-family: 'Brush Script MT', 'Comic Sans MS', cursive, serif; font-size: 32px; color: #0C2B67;
            position: absolute; bottom: 0; left: 0; right: 0; text-align: center; transform: rotate(-3deg);
        }
        .signature-line { width: 200px; border-top: 1px solid #0C2B67; margin: 0 auto 5px auto; }
        .instructor-name { font-size: 14px; font-weight: bold; color: #0C2B67; margin: 0; }
        .instructor-role { font-size: 10px; color: #555555; margin: 2px 0 0 0; }
        
        .seal-box {
            width: 88px; height: 88px; background-color: #0C2B67; color: #FFFFFF;
            border-radius: 50%; margin: 0 auto; text-align: center; padding-top: 16px;
            box-sizing: border-box; border: 3px double #A0C1FF;
        }
        .metadata { font-size: 10px; color: #555555; text-align: left; line-height: 1.5; }
    </style>
</head>
<body>

<div class="certificate-container">
    <div class="corner-tl"></div><div class="corner-tr"></div><div class="corner-bl"></div><div class="corner-br"></div>
    
    <!-- Espacio reservado para tu logo / flor -->
    <div class="watermark-logo">ॐ</div>

    <div class="header">
        <div class="header-left">
            PROGRAMA DE AUTOR Y CERTIFICACIÓN MAGISTRAL<br>
            <span style="font-weight: normal; color: #555555; font-size: 9.5px;">Masterclass & Formación Exclusiva de Autor</span>
        </div>
        <div class="header-right">
            <div class="logo-box">PEDRO LUIS YOGA</div>
        </div>
    </div>

    <div class="main-content">
        <div class="school-title">El Sello de Autor de Pedro Luis otorga el presente</div>
        <div class="diploma-title">DIPLOMA DE EXCELENCIA</div>
        <div class="to-text">concedido con máximo reconocimiento a</div>
        
        <div class="student-name">{{ $studentName ?? 'María Alejandra Pérez' }}</div>

        <div class="description-text">
            por haber dominado con suficiencia los módulos avanzados, técnicos y metodológicos establecidos 
            en el programa de autoría exclusiva:
        </div>

        <div class="course-badge">
            CURSO ESPECIALIZADO DE YOGA INTEGRAL
        </div>
        <div style="font-size: 11px; color: #555555; margin-top: 5px; font-style: italic;">
            Diseñado, estructurado e impartido bajo el sello magistral de Pedro Luis
        </div>
    </div>

    <div class="footer">
        <div class="footer-col" style="text-align: left;">
            <div class="metadata">
                <strong>ID Alumno:</strong> {{ $studentId ?? 'YI-2026-089' }}<br>
                <strong>Certificado N°:</strong> {{ $certificateCode ?? 'CERT-2026-554' }}<br>
                <strong>Edición Autor:</strong> MasterClass 2026<br>
                <em>Autenticidad Verificada de Autor.</em>
            </div>
        </div>

        <div class="footer-col">
            <div class="signature-area">
                <div class="signature-font">Pedro Luis</div>
            </div>
            <div class="signature-line"></div>
            <p class="instructor-name">Pedro Luis</p>
            <p class="instructor-role">Autor, Creador & Maestro Principal</p>
        </div>

        <div class="footer-col">
            <div class="seal-box">
                <div style="font-size: 8px; font-weight: bold; letter-spacing: 1px;">SELLO DE AUTOR</div>
                <div style="font-size: 11px; font-weight: bold; margin-top: 2px; color: #A0C1FF;">MASTER</div>
                <div style="font-size: 7px; color: #FFFFFF; margin-top:2px;">PEDRO LUIS</div>
            </div>
        </div>
    </div>
</div>

</body>
</html>