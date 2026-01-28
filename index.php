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


<body
    class="bg-black text-white min-h-screen flex flex-col items-center p-10 opacity-0 transition-opacity duration-100 ease-in">
    <script>
        async function loadLinks() {
            // Using timestamp to ensure no cache as requested
            const url = 'https://raw.githubusercontent.com/AyanXars/ayanxars/refs/heads/main/url.json?t=' + new Date().getTime();
            try {
                const response = await fetch(url, { cache: "no-store" });
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                const links = await response.json();

                // Ensure DOM is ready before trying to find the container
                if (document.readyState === 'loading') {
                    await new Promise(resolve => document.addEventListener('DOMContentLoaded', resolve));
                }

                const container = document.getElementById('jsonLoader');

                links.forEach(link => {
                    const a = document.createElement('a');
                    a.href = link.url;

                    a.className = "text-white uppercase text-[12px] tracking-[3px] font-normal hover:underline focus:underline";
                    a.textContent = link.name;
                    container.appendChild(a);
                });
            } catch (error) {
                console.error('Error loading links:', error);
            }
        }

        const linksLoadedPromise = loadLinks();

        window.addEventListener('load', async () => {
            await linksLoadedPromise;
            setTimeout(() => {
                document.body.classList.remove('opacity-0');
            }, 1000);
        });
    </script>
    <div class="h-6 w-full"></div>
    <img src="https://cdn.jsdelivr.net/gh/AyanXars/ayanxars/pfp.jpg" class="w-[200px] mt-22 mb-6">
    <div class="h-12 w-full"></div>
    <h1 class="text-white uppercase text-[30px] mb-6 tracking-[6px]">
        Ayan Xars
    </h1>
    <div class="h-12 w-full"></div>
    <a href="https://x.com/ayanxars" class="text-white uppercase font-normal hover:underline focus:underline">
        <img class="w-[80px] h-[80px]"
            src="data:image/jpeg;base64,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"
            alt="">
    </a>
    <div class="h-6 w-full"></div>
    <div id="jsonLoader" class="flex flex-col items-center gap-10 text-center leading-4 my-10">

    </div>
    <div class="h-6 w-full"></div>
    <span class="text-white uppercase text-[8px] tracking-[2.5px] font-normal text-center">
        0x<br>AYANXARS<br>070707<br>42069<br>1106<br>BLADERUNNER2049<br>ASXOJE
    </span>
    <div class="h-12 w-full"></div>
</body>


</html>
