<?php
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script>
        document.addEventListener('contextmenu', e => e.preventDefault());
    </script>
    <title>Ayan Xars</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @font-face {
            font-family: 'ayanxars';
            src: url('https://cdn.jsdelivr.net/gh/ayanxars/ayanxars/font.woff2') format('woff2');
        }

        ::-webkit-scrollbar {
            display: none;
        }


        * {
            font-family: 'ayanxars', sans-serif;
            -webkit-tap-highlight-color: transparent;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        img {
            -webkit-user-drag: none;
            pointer-events: none;
        }


        body {
            font-family: 'ayanxars', sans-serif;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
    </style>
</head>

<body class="bg-black min-h-screen flex flex-col items-center p-10">
    <script>
        async function loadFontAndShow() {
            const fontUrl = 'https://cdn.jsdelivr.net/gh/ayanxars/ayanxars/font.woff2';
            const font = new FontFace('ayanxars', `url(${fontUrl})`);

            try {
                const loadedFont = await font.load();
                document.fonts.add(loadedFont);
                document.body.style.opacity = '1';
            } catch (error) {
                console.error('Font loading failed:', error);
                document.body.style.opacity = '1';
            }
        }

        async function loadLinks() {
            const url = 'https://raw.githubusercontent.com/AyanXars/ayanxars/refs/heads/main/url.json';
            try {
                const response = await fetch(url);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                const links = await response.json();
                const container = document.getElementById('jsonLoader');

                links.forEach(link => {
                    const a = document.createElement('a');
                    a.href = link.url;

                    a.className = "text-cyan-400 uppercase text-[10px] tracking-[2.5px] font-normal hover:underline focus:underline";
                    a.textContent = link.name;
                    container.appendChild(a);
                });
            } catch (error) {
                console.error('Error loading links:', error);
            }
        }

        loadFontAndShow();
        loadLinks();
    </script>
    <br><br>
    <img src="https://raw.githubusercontent.com/AyanXars/ayanxars/refs/heads/main/pfp.jpg" alt="Profile"
        class="w-32 h-32 mb-6">
    <br>
    <h1 class="text-white uppercase text-[12px] mb-6 tracking-[6px]">
        Ayan Xars
    </h1>
    <br>
    <a href="https://x.com/ayanxars"
        class="text-rose-500 uppercase text-[10px] tracking-[2.5px] font-normal hover:underline focus:underline">
        x.com/ayanxars
    </a>
    <br><br>
    <div id="jsonLoader" class="flex flex-col items-center gap-10 text-center leading-4">

    </div>
    <br><br>
    <span class="text-white uppercase text-[6px] tracking-[2.5px] font-normal">
        0xAYANXARS070707420691106BLADERUNNER2049ASXOJE
    </span>
    <br><br>
</body>

</html>
