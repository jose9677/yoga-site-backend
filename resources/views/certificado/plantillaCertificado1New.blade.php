<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado Yoga Integral - Opción 1: Elegancia Sutil en Crema</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Cinzel:wght@500;700;800;900&family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <style>
        :root {
            --azul-noche: #0C2B67;
            --azul-cielo: #A0C1FF;
            --arena-crema: #EBE1D7;
            --blanco-puro: #FFFFFF;
            --negro-neutro: #000000;
        }

        body {
            background-color: var(--arena-crema);
            font-family: 'Montserrat', sans-serif;
            color: var(--negro-neutro);
            margin: 0;
            padding: 24px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* Contenedor del Canvas de Certificado Proporcional A4 Landscape */
        .certificate-canvas {
            width: 100%;
            max-width: 1080px;
            aspect-ratio: 1.414 / 1;
            background-color: var(--blanco-puro);
            position: relative;
            box-shadow: 0 25px 50px -12px rgba(12, 43, 103, 0.25), 0 10px 20px rgba(0, 0, 0, 0.08);
            border: 16px solid var(--azul-noche);
            padding: 40px 60px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        /* Enmarcado doble elegante */
        .frame-outer {
            position: absolute;
            top: 12px;
            left: 12px;
            right: 12px;
            bottom: 12px;
            border: 2px solid var(--azul-cielo);
            pointer-events: none;
        }

        .frame-inner {
            position: absolute;
            top: 18px;
            left: 18px;
            right: 18px;
            bottom: 18px;
            border: 1px dashed rgba(12, 43, 103, 0.3);
            pointer-events: none;
        }

        /* Marca de Agua Central */
        .watermark-lotus {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 420px;
            height: 420px;
            opacity: 0.07;
            pointer-events: none;
            z-index: 1;
        }

        /* Corner Ornaments (Esquinas de Gala) */
        .corner {
            position: absolute;
            width: 36px;
            height: 36px;
            z-index: 2;
        }
        .corner-tl { top: 22px; left: 22px; border-top: 3px solid var(--azul-noche); border-left: 3px solid var(--azul-noche); }
        .corner-tr { top: 22px; right: 22px; border-top: 3px solid var(--azul-noche); border-right: 3px solid var(--azul-noche); }
        .corner-bl { bottom: 22px; left: 22px; border-bottom: 3px solid var(--azul-noche); border-left: 3px solid var(--azul-noche); }
        .corner-br { bottom: 22px; right: 22px; border-bottom: 3px solid var(--azul-noche); border-right: 3px solid var(--azul-noche); }

        /* Typography */
        .font-cinzel { font-family: 'Cinzel', serif; }
        .font-playfair { font-family: 'Playfair Display', serif; }
        .font-signature { font-family: 'Alex Brush', cursive; }

        /* Tarjeta Destacada del Curso */
        .course-card-badge {
            background: linear-gradient(135deg, rgba(235, 225, 215, 0.4) 0%, rgba(160, 193, 255, 0.2) 100%);
            border: 1.5px solid var(--azul-cielo);
            border-left: 5px solid var(--azul-noche);
            border-right: 5px solid var(--azul-noche);
            padding: 10px 36px;
            border-radius: 6px;
            box-shadow: 0 4px 12px rgba(12, 43, 103, 0.06);
        }

        /* Sello Oficial Circular con Marca Personal de Pedro Luis */
        .personal-seal {
            width: 105px;
            height: 105px;
            border-radius: 50%;
            background: radial-gradient(circle, #0C2B67 60%, #06193d 100%);
            border: 3px double var(--azul-cielo);
            box-shadow: 0 6px 16px rgba(12, 43, 103, 0.35);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #FFFFFF;
            margin: 0 auto;
            position: relative;
        }
        .personal-seal::before {
            content: '';
            position: absolute;
            inset: -6px;
            border-radius: 50%;
            border: 1px stroke var(--azul-cielo);
            opacity: 0.7;
        }

        /* Firma Manuscrita Realista de Pedro Luis */
        .signature-stroke {
            font-size: 38px;
            color: var(--azul-noche);
            line-height: 1;
            transform: rotate(-4deg);
            margin-bottom: -12px;
            text-shadow: 0 1px 2px rgba(12, 43, 103, 0.15);
        }

        @media print {
            .no-print { display: none !important; }
            body { background: none; padding: 0; }
            .certificate-canvas {
                box-shadow: none;
                max-width: 100%;
                width: 100vw;
                height: 100vh;
                border-width: 12px;
            }
        }
    </style>
</head>
<body>

    <!-- BARRA DE HERRAMIENTAS INTERACTIVA (Sólo vista web) -->
    <div class="no-print w-full max-w-[1080px] bg-white p-4 rounded-xl shadow-md mb-6 border border-[#A0C1FF] flex flex-wrap items-center justify-between gap-4">
        <div class="flex items-center gap-3">
            <span class="w-3 h-3 rounded-full bg-[#0C2B67]"></span>
            <h1 class="text-sm font-bold text-[#0C2B67] uppercase tracking-wider">
                Opción 1: Elegancia Sutil en Crema (Marca Pedro Luis)
            </h1>
        </div>

        <div class="flex items-center gap-3 flex-wrap">
            <label class="text-xs text-slate-600 font-medium">Nombre del Alumno:</label>
            <input type="text" id="studentNameInput" value="María Alejandra Pérez" 
                   class="px-3 py-1.5 border border-slate-300 rounded text-xs focus:outline-none focus:border-[#0C2B67] text-[#0C2B67] font-semibold"
                   oninput="updateStudentName(this.value)">
            
            <button onclick="window.print()" 
                    class="bg-[#0C2B67] hover:bg-[#081e48] text-white text-xs font-semibold px-4 py-1.5 rounded transition-colors flex items-center gap-1.5 shadow">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                </svg>
                Imprimir / PDF
            </button>
        </div>
    </div>

    <!-- CANVAS DEL CERTIFICADO -->
    <div class="certificate-canvas">
        
        <!-- Enmarcados y Filigranas -->
        <div class="frame-outer"></div>
        <div class="frame-inner"></div>
        <div class="corner corner-tl"></div>
        <div class="corner corner-tr"></div>
        <div class="corner corner-bl"></div>
        <div class="corner corner-br"></div>

        <!-- Marca de Agua (Lotus Vector) -->
        <svg class="watermark-lotus" viewBox="0 0 24 24" fill="none" stroke="#0C2B67" stroke-width="0.6">
            <path d="M12 3c-2.5 3.5-6 6.5-9 8 3 1.5 6.5 4.5 9 8 2.5-3.5 6-6.5 9-8-3-1.5-6.5-4.5-9-8z" />
            <path d="M12 6c-1.8 2.5-4.5 4.5-6.5 5.5 2 1 4.7 3 6.5 5.5 1.8-2.5 4.5-4.5 6.5-5.5-2-1-4.7-3-6.5-5.5z" />
            <path d="M12 9c-1 1.5-2.5 2.5-3.5 3 1 .5 2.5 1.5 3.5 3 1-1.5 2.5-2.5 3.5-3-1-.5-2.5-1.5-3.5-3z" />
        </svg>

        <!-- CABECERA DE AUTORIDAD -->
        <header class="relative z-10 flex justify-between items-start pt-1 px-2 border-b border-slate-100 pb-3">
            <div class="text-left">
                <p class="text-[10px] uppercase tracking-widest font-bold text-[#0C2B67]">
                    ACADEMIA INTERNACIONAL DE YOGA & MEDITACIÓN
                </p>
                <p class="text-[9px] text-slate-500 font-medium mt-0.5">
                    Metodología de Formación Continua • Cursos & Maestría
                </p>
            </div>
            
            <div class="text-center">
                <span class="text-2xl text-[#0C2B67] font-serif tracking-widest">ॐ</span>
            </div>

            <div class="text-right">
                <div class="inline-block bg-[#0C2B67] text-white px-3.5 py-1 rounded text-[11px] font-bold tracking-widest font-cinzel shadow-sm">
                    PEDRO LUIS YOGA
                </div>
            </div>
        </header>

        <!-- CUERPO CENTRAL PERFECTAMENTE EQUILIBRADO VERTICALMENTE -->
        <main class="relative z-10 my-auto py-3 text-center flex flex-col items-center justify-center">
            
            <!-- Título de Certificación -->
            <p class="font-cinzel text-xs md:text-sm tracking-[0.3em] text-[#0C2B67] font-bold uppercase mb-1">
                La Escuela de Yoga otorga el presente
            </p>

            <h2 class="font-cinzel text-3xl md:text-4xl font-extrabold text-[#0C2B67] tracking-[0.22em] my-1 uppercase">
                DIPLOMA DE EXCELENCIA
            </h2>

            <p class="font-playfair italic text-sm text-slate-600 mb-2">
                otorgado con pleno reconocimiento académico a
            </p>

            <!-- Nombre del Estudiante (Dinámico) -->
            <div class="my-2 w-full">
                <h3 id="studentNameDisplay" class="font-playfair text-3xl md:text-4xl font-bold text-[#0C2B67] tracking-wide px-6">
                    María Alejandra Pérez
                </h3>
                <div class="w-2/3 h-[2px] bg-gradient-to-r from-transparent via-[#A0C1FF] to-transparent mx-auto mt-1.5"></div>
            </div>

            <!-- Texto de Acreditación -->
            <p class="text-[12px] md:text-[13px] text-slate-700 max-w-2xl mx-auto leading-relaxed mt-2 mb-3 px-4">
                por haber completado satisfactoriamente los requisitos teóricos, prácticos y vivenciales del módulo de especialización en el programa oficial de:
            </p>

            <!-- Tarjeta Destacada del Curso -->
            <div class="course-card-badge my-1">
                <h4 class="font-cinzel text-base md:text-lg font-bold text-[#0C2B67] tracking-wider uppercase">
                    CURSO ESPECIALIZADO DE YOGA INTEGRAL
                </h4>
            </div>

            <p class="text-[10px] text-slate-500 uppercase tracking-widest mt-2 font-semibold">
                Bajo la dirección técnica y pedagógica directa del Maestro Pedro Luis
            </p>
        </main>

        <!-- PIE DEL CERTIFICADO (Con Firma Manuscrita y Sello del Instructor) -->
        <footer class="relative z-10 grid grid-cols-3 items-end pb-1 px-2 gap-4">
            
            <!-- Columna Izquierda: Metadatos y Validación -->
            <div class="text-left text-[9px] text-slate-600 space-y-1">
                <p><span class="font-bold text-[#0C2B67]">ID Alumno:</span> YI-2026-089</p>
                <p><span class="font-bold text-[#0C2B67]">Certificado N°:</span> CERT-2026-554</p>
                <p><span class="font-bold text-[#0C2B67]">Reg. Instructor:</span> PL-590773</p>
                <div class="flex items-center gap-1.5 pt-1 text-[8.5px] text-slate-500 font-medium">
                    <svg class="w-3.5 h-3.5 text-[#0C2B67]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Autenticidad Verificada por Pedro Luis Studio</span>
                </div>
            </div>

            <!-- Columna Central: Firma de Pedro Luis -->
            <div class="text-center flex flex-col items-center">
                <div class="h-11 flex items-end justify-center mb-0.5">
                    <span class="font-signature signature-stroke">Pedro Luis</span>
                </div>
                <div class="w-48 h-[1.5px] bg-[#0C2B67] mb-1"></div>
                <p class="text-[12px] font-bold text-[#0C2B67] uppercase tracking-wide leading-tight">
                    Pedro Luis
                </p>
                <p class="text-[9.5px] text-slate-600 font-medium">
                    Fundador, Autor & Instructor Principal
                </p>
            </div>

            <!-- Columna Derecha: Sello Personalizado de Marca -->
            <div class="text-right">
                <div class="personal-seal">
                    <span class="text-[7px] uppercase tracking-widest font-bold text-[#A0C1FF]">ACREDITADO</span>
                    <span class="text-[11px] font-extrabold tracking-wider font-cinzel text-white my-0.5">200 H</span>
                    <span class="text-[7px] uppercase font-bold tracking-tighter text-[#A0C1FF]">PEDRO LUIS YOGA</span>
                </div>
            </div>
            
        </footer>

    </div>

    <script>
        function updateStudentName(val) {
            const display = document.getElementById('studentNameDisplay');
            display.textContent = val.trim() !== '' ? val : 'María Alejandra Pérez';
        }
    </script>
</body>
</html>