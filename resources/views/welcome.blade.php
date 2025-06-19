<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poliklinikku</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      width: 100%;
      overflow-x: hidden;
      background: linear-gradient(to right, #f0f4f8, #d9e2ec);
      color: #1f2937;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    body.dark {
      background: linear-gradient(to right, #111827, #1f2937);
      color: white;
    }

    .container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1rem;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 4rem;
      font-weight: bold;
      margin-bottom: 2rem;
      letter-spacing: -0.05em;
    }

    @media (min-width: 768px) {
      .title {
        font-size: 6rem;
      }
    }

    .title span.word {
      display: inline-block;
      margin-right: 0.5rem;
    }

    .letter {
      display: inline-block;
      background: linear-gradient(to right, #0f172a, rgba(107, 114, 128, 0.8));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      transform: translateY(100px);
      opacity: 0;
    }

    body.dark .letter {
      background: linear-gradient(to right, white, rgba(255, 255, 255, 0.8));
    }

    .button-container {
      display: flex;
      gap: 1rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .button {
      background-color: #3b82f6;
      color: white;
      border: none;
      border-radius: 0.75rem;
      padding: 0.75rem 2rem;
      font-size: 1.125rem;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .button:hover {
      background-color: #2563eb;
      transform: translateY(-2px);
    }

    body.dark .button {
      background-color: #2563eb;
    }

    body.dark .button:hover {
      background-color: #1d4ed8;
    }

    .arrow {
      font-size: 1.25rem;
      transition: transform 0.3s ease;
    }

    .button:hover .arrow {
      transform: translateX(5px);
    }

    .background {
      position: absolute;
      inset: 0;
      pointer-events: none;
    }

    .svg-container {
      width: 100%;
      height: 100%;
      color: rgba(0, 0, 0, 0.05);
    }

    body.dark .svg-container {
      color: rgba(255, 255, 255, 0.05);
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes letterAnimation {
      0% {
        transform: translateY(100px);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .loading-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to right, #f0f4f8, #d9e2ec);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1000;
      transition: opacity 0.5s ease, visibility 0.5s ease;
    }

    body.dark .loading-overlay {
      background: linear-gradient(to right, #111827, #1f2937);
    }

    .loading-spinner {
      width: 40px;
      height: 40px;
      border: 4px solid rgba(0, 0, 0, 0.1);
      border-radius: 50%;
      border-top-color: #0f172a;
      animation: spin 1s linear infinite;
    }

    body.dark .loading-spinner {
      border: 4px solid rgba(255, 255, 255, 0.1);
      border-top-color: white;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
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
    <div class="background" id="background1"></div>
    <div class="background" id="background2"></div>

    <div class="content">
      <h1 class="title" id="title">Poliklinikku</h1>

      <div class="button-container">
        <button class="button" id="masuk-btn">
          <span>Masuk</span>
          <span class="arrow">→</span>
        </button>
        <button class="button" id="daftar-btn">
          <span>Daftar</span>
          <span class="arrow">→</span>
        </button>
      </div>
    </div>
  </div>

  <script>
    function createStaticPaths(containerId, position) {
      const container = document.getElementById(containerId);
      const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
      svg.setAttribute('class', 'svg-container');
      svg.setAttribute('viewBox', '0 0 696 316');
      svg.setAttribute('fill', 'none');

      for (let i = 0; i < 36; i++) {
        const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        const d = `M-${380 - i * 5 * position} -${189 + i * 6}C-${380 - i * 5 * position} -${189 + i * 6} -${312 - i * 5 * position} ${216 - i * 6} ${152 - i * 5 * position} ${343 - i * 6}C${616 - i * 5 * position} ${470 - i * 6} ${684 - i * 5 * position} ${875 - i * 6} ${684 - i * 5 * position} ${875 - i * 6}`;
        path.setAttribute('d', d);
        path.setAttribute('stroke', 'currentColor');
        path.setAttribute('stroke-width', (0.5 + i * 0.03).toString());
        path.setAttribute('stroke-opacity', (0.05 + i * 0.02).toString());
        svg.appendChild(path);
      }

      container.appendChild(svg);
    }

    function animateTitle() {
      const titleElement = document.getElementById('title');
      const text = titleElement.textContent;
      titleElement.textContent = '';

      const words = text.split(' ');

      words.forEach((word, wordIndex) => {
        const wordSpan = document.createElement('span');
        wordSpan.classList.add('word');

        Array.from(word).forEach((letter, letterIndex) => {
          const letterSpan = document.createElement('span');
          letterSpan.classList.add('letter');
          letterSpan.textContent = letter;

          const delay = wordIndex * 0.1 + letterIndex * 0.03;
          letterSpan.style.animation = `letterAnimation 0.5s forwards ease-out`;
          letterSpan.style.animationDelay = `${delay + 0.5}s`;

          wordSpan.appendChild(letterSpan);
        });

        titleElement.appendChild(wordSpan);
      });
    }

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
      createStaticPaths('background1', 1);
      createStaticPaths('background2', -1);
      animateTitle();
      setupButtons();
      handleLoading();
    });
  </script>
</body>
</html>
