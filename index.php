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
    <a href="https://x.com/ayanxars"
        class="text-white uppercase text-[20px] tracking-[2.5px] font-normal hover:underline focus:underline">
        x
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
