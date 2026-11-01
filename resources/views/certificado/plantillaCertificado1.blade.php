<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado de Yoga Integral - Escuela de Yoga Integral</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Cinzel:wght@500;700;800&family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        /* Definición de colores corporativos requeridos */
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
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Formato Hoja A4 Landscape Proporcional */
        .certificate-card {
            width: 100%;
            max-width: 1050px;
            aspect-ratio: 1.414 / 1;
            background-color: var(--blanco-puro);
            position: relative;
            box-shadow: 0 20px 40px rgba(12, 43, 103, 0.15), 0 5px 15px rgba(0,0,0,0.08);
            border: 14px solid var(--azul-noche);
            padding: 35px 50px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        /* Doble marco interior con acentos */
        .inner-frame {
            position: absolute;
            top: 12px;
            left: 12px;
            right: 12px;
            bottom: 12px;
            border: 2px solid var(--azul-cielo);
            pointer-events: none;
        }

        .inner-frame-thin {
            position: absolute;
            top: 17px;
            left: 17px;
            right: 17px;
            bottom: 17px;
            border: 1px solid rgba(12, 43, 103, 0.25);
            pointer-events: none;
        }

        /* Marca de agua central (Lotus Watermark) */
        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 380px;
            height: 380px;
            opacity: 0.08;
            pointer-events: none;
            z-index: 1;
        }

        /* Adornos ornamentales en esquinas */
        .corner-ornament {
            position: absolute;
            width: 32px;
            height: 32px;
            border-color: var(--azul-noche);
            z-index: 2;
        }
        .top-left { top: 22px; left: 22px; border-top: 3px solid var(--azul-noche); border-left: 3px solid var(--azul-noche); }
        .top-right { top: 22px; right: 22px; border-top: 3px solid var(--azul-noche); border-right: 3px solid var(--azul-noche); }
        .bottom-left { bottom: 22px; left: 22px; border-bottom: 3px solid var(--azul-noche); border-left: 3px solid var(--azul-noche); }
        .bottom-right { bottom: 22px; right: 22px; border-bottom: 3px solid var(--azul-noche); border-right: 3px solid var(--azul-noche); }

        /* Estilos tipográficos refinados */
        .font-cinzel { font-family: 'Cinzel', serif; }
        .font-playfair { font-family: 'Playfair Display', serif; }
        .font-signature { font-family: 'Alex Brush', cursive; }

        /* Contenido Central */
        .center-content {
            position: relative;
            z-index: 10;
            text-align: center;
            margin: auto 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .course-badge {
            background: linear-gradient(135deg, rgba(160, 193, 255, 0.15) 0%, rgba(235, 225, 215, 0.3) 100%);
            border: 1px solid var(--azul-cielo);
            border-left: 4px solid var(--azul-noche);
            border-right: 4px solid var(--azul-noche);
            padding: 8px 30px;
            border-radius: 4px;
            box-shadow: 0 4px 10px rgba(12, 43, 103, 0.05);
        }

        /* Sello Circular de Excelencia */
        .seal-container {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            background: radial-gradient(circle, var(--azul-noche) 65%, #071a40 100%);
            border: 3px double var(--azul-cielo);
            box-shadow: 0 4px 12px rgba(12, 43, 103, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            margin: 0 auto;
            position: relative;
        }

        .seal-container::before {
            content: '';
            position: absolute;
            inset: -5px;
            border-radius: 50%;
            border: 1px dashed var(--azul-cielo);
        }

        /* Estilo para la firma manuscrita */
        .signature-text {
            font-size: 34px;
            color: var(--azul-noche);
            line-height: 1;
            transform: rotate(-3deg);
            margin-bottom: -10px;
            text-shadow: 0 1px 1px rgba(0,0,0,0.05);
        }

        /* Adaptabilidad de impresión */
        @media print {
            body {
                background: none;
                padding: 0;
            }
            .certificate-card {
                box-shadow: none;
                max-width: 100%;
                width: 100vw;
                height: 100vh;
                aspect-ratio: auto;
            }
        }
    </style>
</head>
<body>

    <!-- Contenedor Principal del Certificado -->
    <div class="certificate-card">
        
        <!-- Marcos Internos y Adornos -->
        <div class="inner-frame"></div>
        <div class="inner-frame-thin"></div>
        <div class="corner-ornament top-left"></div>
        <div class="corner-ornament top-right"></div>
        <div class="corner-ornament bottom-left"></div>
        <div class="corner-ornament bottom-right"></div>

        <!-- Marca de agua central (Flor de Loto SVG) -->
        <svg class="watermark" viewBox="0 0 24 24" fill="none" stroke="#A0C1FF" stroke-width="0.7">
            <path d="M12 3c-2.5 3.5-6 6.5-9 8 3 1.5 6.5 4.5 9 8 2.5-3.5 6-6.5 9-8-3-1.5-6.5-4.5-9-8z" />
            <path d="M12 6c-1.8 2.5-4.5 4.5-6.5 5.5 2 1 4.7 3 6.5 5.5 1.8-2.5 4.5-4.5 6.5-5.5-2-1-4.7-3-6.5-5.5z" />
            <path d="M12 9c-1 1.5-2.5 2.5-3.5 3 1 .5 2.5 1.5 3.5 3 1-1.5 2.5-2.5 3.5-3-1-.5-2.5-1.5-3.5-3z" />
        </svg>

        <!-- CABECERA SUPERIOR -->
        <header class="relative z-10 flex justify-between items-start pt-2 px-2 border-b border-slate-100 pb-3">
            <div class="text-left">
                <p class="text-[10px] uppercase tracking-widest font-bold text-[#0C2B67]">Escuela Registrada en Yoga Alliance</p>
                <p class="text-[9px] text-slate-500 mt-0.5">Formación Integral Avanzada & Meditación Consciente</p>
            </div>
            
            <div class="text-center">
                <span class="text-xl text-[#0C2B67] font-serif tracking-widest">ॐ</span>
            </div>

            <div class="text-right">
                <div class="inline-block bg-[#0C2B67] text-white px-3 py-1 rounded text-[11px] font-bold tracking-wider font-cinzel">
                    YOGA INTEGRAL ACADEMY
                </div>
            </div>
        </header>

        <!-- SECCIÓN CENTRAL DE CONTENIDO (Reequilibrada y Centrada) -->
        <main class="center-content my-auto py-2">
            
            <p class="font-cinzel text-xs md:text-sm tracking-[0.25em] text-[#0C2B67] font-semibold uppercase mb-1">
                La Escuela Internacional de Yoga Integral otorga el presente
            </p>

            <h1 class="font-cinzel text-3xl md:text-4xl font-extrabold text-[#0C2B67] tracking-[0.2em] my-1 uppercase">
                DIPLOMA DE EXCELENCIA
            </h1>

            <p class="font-playfair italic text-sm text-slate-600 mb-2">
                otorgado con orgullo y reconocimiento a
            </p>

            <!-- Nombre del Alumno -->
            <div class="my-2 relative group">
                <h2 class="font-playfair text-3xl md:text-4xl font-bold text-[#0C2B67] px-8 py-1 tracking-wide">
                    {{ $studentName ?? 'María Alejandra Pérez' }}
                </h2>
                <div class="w-3/4 h-[2px] bg-gradient-to-r from-transparent via-[#A0C1FF] to-transparent mx-auto mt-1"></div>
            </div>

            <!-- Texto descriptivo de suficiencia académica -->
            <p class="text-[12px] md:text-[13px] text-slate-700 max-w-2xl mx-auto leading-relaxed mt-2 mb-3 px-4">
                por haber acreditado su suficiencia y cumplido satisfactoriamente con los objetivos académicos, 
                teóricos y prácticos de especialización en el programa de formación profesional de:
            </p>

            <!-- Caja / Badge del Curso -->
            <div class="course-badge my-1">
                <h3 class="font-cinzel text-base md:text-lg font-bold text-[#0C2B67] tracking-wider uppercase">
                    CURSO ESPECIALIZADO DE YOGA INTEGRAL
                </h3>
            </div>
            
            <p class="text-[10px] text-slate-500 uppercase tracking-widest mt-2 font-medium">
                Con una intensidad horaria de 200 horas lectivas y prácticas de perfeccionamiento
            </p>
        </main>

        <!-- PIE DEL CERTIFICADO (Metadatos, Firma y Sello) -->
        <footer class="relative z-10 grid grid-cols-3 items-end pb-1 px-2 gap-4">
            
            <!-- Izquierda: Registro y Verificación -->
            <div class="text-left text-[9px] text-slate-600 space-y-1">
                <p><span class="font-bold text-[#0C2B67]">ID Alumno:</span> {{ $studentId ?? 'YI-2026-089' }}</p>
                <p><span class="font-bold text-[#0C2B67]">Certificado N°:</span> {{ $certificateCode ?? 'CERT-2026-554' }}</p>
                <p><span class="font-bold text-[#0C2B67]">Reg. Nacional:</span> 590773-YI</p>
                <div class="flex items-center gap-1.5 pt-1 text-[8px] text-slate-500">
                    <svg class="w-3.5 h-3.5 text-[#0C2B67]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Documento verificado digitalmente</span>
                </div>
            </div>

            <!-- Centro: Firma del Instructor -->
            <div class="text-center flex flex-col items-center">
                <div class="h-10 flex items-end justify-center mb-1">
                    <span class="font-signature signature-text">Pedro Luis</span>
                </div>
                <div class="w-48 h-[1px] bg-[#0C2B67] mb-1"></div>
                <p class="text-[12px] font-bold text-[#0C2B67] uppercase tracking-wide leading-tight">
                    {{ $instructorName ?? 'Pedro Luis' }}
                </p>
                <p class="text-[9.5px] text-slate-600 font-medium">
                    Director & Maestro de Yoga Integral
                </p>
            </div>

            <!-- Derecha: Sello Oficial Circular -->
            <div class="text-right">
                <div class="seal-container">
                    <span class="text-[7px] uppercase tracking-widest font-bold opacity-80">Oficial</span>
                    <span class="text-[11px] font-extrabold tracking-wider font-cinzel text-[#A0C1FF]">200 H</span>
                    <span class="text-[7px] uppercase font-bold tracking-tighter">Yoga Integral</span>
                </div>
            </div>
            
        </footer>

    </div>

</body>
</html>