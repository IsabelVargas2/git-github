<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #f5576c 75%, #4facfe 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
            pointer-events: none;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 50px;
            border-radius: 30px;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.1),
                0 0 0 1px rgba(255, 255, 255, 0.05),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            width: 100%;
            max-width: 550px;
            position: relative;
            overflow: hidden;
        }

        .container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(transparent, rgba(255, 255, 255, 0.1), transparent 30%);
            animation: rotate 4s linear infinite;
            z-index: -1;
        }

        @keyframes rotate {
            100% { transform: rotate(360deg); }
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 40px;
            font-size: 2.8rem;
            font-weight: 700;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4);
            border-radius: 2px;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: translateX(-50%) scaleX(1); }
            50% { opacity: 0.7; transform: translateX(-50%) scaleX(1.1); }
        }

        .form-group {
            margin-bottom: 30px;
            position: relative;
        }

        .form-group::before {
            content: '';
            position: absolute;
            top: 0;
            left: -20px;
            width: 4px;
            height: 100%;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            border-radius: 2px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .form-group:focus-within::before {
            opacity: 1;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            transform: translateY(0);
            transition: transform 0.3s ease;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 18px 25px;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            font-family: inherit;
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 
                0 8px 32px rgba(0, 0, 0, 0.1),
                inset 0 2px 4px rgba(255, 255, 255, 0.5);
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            outline: none;
            background: rgba(255, 255, 255, 1);
            transform: translateY(-3px) scale(1.02);
            box-shadow: 
                0 15px 40px rgba(0, 0, 0, 0.15),
                0 0 0 4px rgba(255, 255, 255, 0.3),
                inset 0 2px 4px rgba(255, 255, 255, 0.8);
        }

        input[type="text"]::placeholder,
        input[type="email"]::placeholder,
        textarea::placeholder {
            color: #aaa;
            font-style: italic;
        }

        textarea {
            resize: none;
            min-height: 140px;
            font-family: inherit;
        }

        .submit-btn {
            width: 100%;
            padding: 20px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4);
            background-size: 300% 300%;
            animation: gradientFlow 3s ease infinite;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
            box-shadow: 
                0 12px 24px rgba(0, 0, 0, 0.15),
                0 4px 8px rgba(0, 0, 0, 0.1);
        }

        @keyframes gradientFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transition: all 0.6s ease;
            transform: translate(-50%, -50%);
        }

        .submit-btn:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.2),
                0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .submit-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .submit-btn:active {
            transform: translateY(-2px) scale(1.01);
        }

        /* Floating particles */
        .particle {
            position: absolute;
            width: 6px;
            height: 6px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            pointer-events: none;
            animation: float 6s infinite linear;
        }

        .particle:nth-child(1) {
            top: 20%;
            left: 20%;
            animation-delay: 0s;
            animation-duration: 8s;
        }

        .particle:nth-child(2) {
            top: 60%;
            left: 80%;
            animation-delay: 2s;
            animation-duration: 6s;
        }

        .particle:nth-child(3) {
            top: 80%;
            left: 10%;
            animation-delay: 4s;
            animation-duration: 7s;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }

        /* Form animation */
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-group {
            animation: slideInUp 0.8s ease forwards;
            opacity: 0;
        }

        h1 {
            animation: slideInUp 0.8s ease 0.2s forwards;
            opacity: 0;
        }

        .form-group:nth-child(1) { animation-delay: 0.4s; }
        .form-group:nth-child(2) { animation-delay: 0.6s; }
        .form-group:nth-child(3) { animation-delay: 0.8s; }
        .form-group:nth-child(4) { animation-delay: 1s; }
        .submit-btn { 
            animation: slideInUp 0.8s ease 1.2s forwards;
            opacity: 0;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .container {
                padding: 35px 25px;
                margin: 10px;
                border-radius: 25px;
            }
            
            h1 {
                font-size: 2.2rem;
                margin-bottom: 30px;
            }
            
            input[type="text"],
            input[type="email"],
            textarea {
                padding: 15px 20px;
                border-radius: 15px;
            }
            
            .submit-btn {
                padding: 18px;
                border-radius: 20px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    
    <div class="container">
        <h1>Hablemos ✨</h1>
        <form action="{{route('contacto.store')}}" method="GET">
            <div class="form-group">
                <label for="nombre">Tu nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="¿Cómo te llamas?" required>
            </div>
            
            <div class="form-group">
                <label for="correo">Correo electrónico</label>
                <input type="email" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" required>
            </div>
            
            <div class="form-group">
                <label for="mensaje">Tu mensaje</label>
                <textarea id="mensaje" name="mensaje" placeholder="Cuéntanos qué tienes en mente..." required></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Enviar Mensaje</button>
        </form>
    </div>
</body>
</html>