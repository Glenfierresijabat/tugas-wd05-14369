<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poliklinikku</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
      color: #1f2937;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    body.dark {
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: white;
    }

    .container {
      text-align: center;
      background: white;
      padding: 3rem;
      border-radius: 2rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease;
    }

    body.dark .container {
      background: #1f2937;
    }

    .title {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 2rem;
      animation: fadeScale 1s ease forwards;
    }

    @keyframes fadeScale {
      from {
        opacity: 0;
        transform: scale(0.9);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .button-container {
      display: flex;
      gap: 1.5rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .button {
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: white;
      border: none;
      border-radius: 2rem;
      padding: 0.75rem 2rem;
      font-size: 1.125rem;
      font-weight: 600;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .button:hover {
      transform: translateY(-4px);
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
    }

    body.dark .button {
      background: linear-gradient(135deg, #4f46e5, #3b82f6);
    }

    .loading-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1000;
      transition: opacity 0.5s ease, visibility 0.5s ease;
    }

    body.dark .loading-overlay {
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
    }

    .loading-spinner {
      width: 50px;
      height: 50px;
      border: 6px solid rgba(0, 0, 0, 0.1);
      border-radius: 50%;
      border-top-color: #4f46e5;
      animation: spin 1s linear infinite;
    }

    body.dark .loading-spinner {
      border: 6px solid rgba(255, 255, 255, 0.1);
      border-top-color: white;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    .hidden {
      opacity: 0;
      visibility: hidden;
    }
  </style>
</head>

<body>
  <div class="loading-overlay" id="loading-overlay">
    <div class="loading-spinner"></div>
  </div>

  <div class="container">
    <h1 class="title">Poliklinikku</h1>
    <div class="button-container">
      <button class="button" id="masuk-btn">Masuk</button>
      <button class="button" id="daftar-btn">Daftar</button>
    </div>
  </div>

  <script>
    function setupDarkMode() {
      if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.body.classList.add('dark');
      }

      window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
        if (event.matches) {
          document.body.classList.add('dark');
        } else {
          document.body.classList.remove('dark');
        }
      });
    }

    function setupButtons() {
      const masukBtn = document.getElementById('masuk-btn');
      const daftarBtn = document.getElementById('daftar-btn');

      masukBtn.addEventListener('click', () => {
        window.location.href = "{{ route('login') }}";
      });

      daftarBtn.addEventListener('click', () => {
        window.location.href = "{{ route('register') }}";
      });
    }

    function handleLoading() {
      const loadingOverlay = document.getElementById('loading-overlay');

      window.addEventListener('load', () => {
        setTimeout(() => {
          loadingOverlay.classList.add('hidden');
        }, 800);
      });
    }

    document.addEventListener('DOMContentLoaded', () => {
      setupDarkMode();
      setupButtons();
      handleLoading();
    });
  </script>
</body>

</html>
