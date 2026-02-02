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
    <link rel="preload" href="https://cdn.jsdelivr.net/gh/AyanXars/ayanxars@main/font.woff2" as="font" type="font/woff2"
        crossorigin>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script>
        document.addEventListener('contextmenu', e => e.preventDefault());
    </script>
    <title>Ayan Xars</title>
    <style>
        @font-face {
            font-family: 'AyanCustom';
            src: url('https://cdn.jsdelivr.net/gh/AyanXars/ayanxars@main/font.woff2') format('woff2');
            font-display: block;
        }

        * {
            font-family: 'AyanCustom', sans-serif;
            -webkit-tap-highlight-color: transparent;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }

        body {
            opacity: 0;
            text-align: center;
        }

        #jsonLoader {
            text-transform: uppercase;
            line-height: normal;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            align-items: center;
        }

        img {
            -webkit-user-drag: none;
        }

        #fotter {
            font-size: 9px;
        }
    </style>
</head>

<body><br><br><br>
    <h1>Ayan Xars</h1><br>
    <a rel="noopener noreferrer" href="https://x.com/ayanxars">
        <img src="data:image/png;base64,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"
            alt="" style="height: 50px; width: 50px; margin-bottom: 40px; margin-top: 10px;">
    </a>
    <div id="jsonLoader"></div>
    <Br><br>
    <p id="fotter">
        0x<br>AYANXARS<br>070707<br>42069<br>1106<br>BLADERUNNER2049<br>ASXOJE
    </p>
    <br><br><br>
    <script>
        async function loadLinks() {
            const url = 'https://raw.githubusercontent.com/AyanXars/ayanxars/refs/heads/main/url.json?t=' + new Date().getTime();
            try {
                const response = await fetch(url, { cache: "no-store" });
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                const links = await response.json();

                if (document.readyState === 'loading') {
                    await new Promise(resolve => document.addEventListener('DOMContentLoaded', resolve));
                }

                const container = document.getElementById('jsonLoader');

                links.forEach(link => {
                    const a = document.createElement('a');
                    a.href = link.url;
                    a.textContent = link.name;
                    // Add a line break after each link for readability in a "simplest" page
                    container.appendChild(a);
                });

                // Wait for fonts to be ready/loaded
                await document.fonts.ready;

                // Ensure initial layout is done
                await new Promise(requestAnimationFrame);

                document.body.style.opacity = '1';

            } catch (error) {
                console.error('Error loading links:', error);
                // Even if error, show page so user isn't staring at blank screen
                document.body.style.opacity = '1';
            }
        }
        loadLinks();
    </script>
</body>

</html>
