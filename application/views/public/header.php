<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa TK - Sistem Informasi Pendaftaran</title>
    <meta name="description" content="Website pendaftaran siswa Taman Kanak-kanak (TK) dengan formulir lengkap dan sistem yang mudah digunakan">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #8B5CF6;
            --secondary-color: #3B82F6;
            --accent-color: #10B981;
            --gradient-primary: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%);
            --gradient-secondary: linear-gradient(135deg, #3B82F6 0%, #2563EB 100%);
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
        }
        
        .header-gradient {
            background: var(--gradient-primary);
            color: white;
            padding: 2rem 0;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .btn-primary-custom {
            background: var(--gradient-primary);
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139, 92, 246, 0.3);
        }
        
        .card-custom {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .card-custom:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .section-header {
            background: var(--gradient-primary);
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(139, 92, 246, 0.25);
        }
        
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(139, 92, 246, 0.25);
        }
    </style>
</head>
<body>
    <header class="header-gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <div class="bg-white bg-opacity-20 p-3 rounded-circle d-inline-flex">
                        <i class="fas fa-graduation-cap fa-2x"></i>
                    </div>
                </div>
                <div class="col-md-11">
                    <h1 class="mb-1 fw-bold">Sistem Pendaftaran Siswa TK</h1>
                    <p class="mb-0 opacity-75">Formulir Pendaftaran Taman Kanak-kanak Tahun Ajaran 2024/2025</p>
                </div>
            </div>
        </div>
    </header>