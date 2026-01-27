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
        ::-webkit-scrollbar {
            display: none;
        }

        * {
            font-family: Arial, sans-serif;
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
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body class="bg-white min-h-screen flex flex-col items-left p-10">
    <script>


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

                    a.className = "text-blue-600 uppercase text-[12px] tracking-[3px] font-normal hover:underline focus:underline";
                    a.textContent = link.name;
                    container.appendChild(a);
                });
            } catch (error) {
                console.error('Error loading links:', error);
            }
        }

        loadLinks();
    </script>
    <br><br>
    <br>
    <h1 class="text-black uppercase text-[30px] mb-6 tracking-[6px]">
        Ayan Xars
    </h1>
    <br>
    <a href="https://x.com/ayanxars"
        class="text-blue-600 uppercase text-[20px] tracking-[2.5px] font-normal hover:underline focus:underline">
        x
    </a>
    <br><br>
    <div id="jsonLoader" class="flex flex-col items-left gap-10 text-left leading-4">

    </div>
    <br><br>
    <span class="text-black uppercase text-[8px] tracking-[2.5px] font-normal">
        0x<br>AYANXARS<br>070707<br>42069<br>1106<br>BLADERUNNER2049<br>ASXOJE
    </span>
    <br><br>
</body>

</html>
