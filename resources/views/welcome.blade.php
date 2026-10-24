<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Joe Lee | Lead Developer – PHP, Laravel &amp; Full Stack</title>
        <meta name="description" content="Joe Lee is a lead developer with over {{ \Carbon\Carbon::create(2014)->age }} years of experience building web applications with PHP, Laravel, JavaScript and Vue.js.">
        <meta name="theme-color" content="#1e1e1e">
        <link rel="canonical" href="{{ url('/') }}">

        <meta property="og:type" content="website">
        <meta property="og:title" content="Joe Lee | Lead Developer">
        <meta property="og:description" content="Lead developer specialising in PHP, Laravel and full stack web applications.">
        <meta property="og:url" content="{{ url('/') }}">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@eojeel">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap">

        @vite(['resources/css/app.css', 'resources/js/app.ts'])
    </head>
    <body class="antialiased">
        <div id="terminal" class="terminal-window">
            <div class="terminal-header">
                <div class="header-buttons">
                    <button type="button" id="terminal-close" class="header-button red" aria-label="Close terminal"></button>
                    <button type="button" id="terminal-minimize" class="header-button yellow" aria-label="Minimise terminal"></button>
                    <button type="button" id="terminal-maximize" class="header-button green" aria-label="Toggle full screen"></button>
                </div>
                <div class="header-title">Terminal</div>
                <div aria-hidden="true"></div>
            </div>
            <main id="terminal-body" class="terminal-body" tabindex="-1">
                <div class="prompt" aria-hidden="true">
                    <span class="p10k-segment p10k-segment-dir">~/portfolio</span>
                    <span class="p10k-segment p10k-segment-git">(main)</span>
                    <span class="p10k-prompt-symbol">❯</span>
                </div>
                <div class="content">
                    <h1>Joe Lee</h1>
                    <p>Lead Developer</p>

                    <h2><span aria-hidden="true">[ </span>About Me<span aria-hidden="true"> ]</span></h2>
                    <p>
                        Over {{ \Carbon\Carbon::create(2014)->age }} years of experience developing a wide range of web applications leveraging various front-end and back-end technologies while constantly maintaining the full stack environment.</p>

                    <h2><span aria-hidden="true">[ </span>Skills<span aria-hidden="true"> ]</span></h2>
                    <ul>
                        <li>PHP / Laravel</li>
                        <li>JavaScript</li>
                        <li>Vue.js</li>
                        <li>CSS</li>
                        <li>MySQL / SQLite</li>
                        <li>Ansible / Cloud / Bare Metal</li>
                    </ul>

                    <h2><span aria-hidden="true">[ </span>Projects<span aria-hidden="true"> ]</span></h2>
                    <article>
                        <h3>Vintage VW Decoder</h3>
                        <p>Volkswagen Type 2 M-Plate and VIN Decoder: Essential Identification Tool for VW Buses from (1970-1979), Detailing Production Codes, Equipment, Manufacturing Dates, Destination, Specifications, and Optional Extras</p>
                        <a href="https://vintagevwdecoder.com/" rel="noopener">Visit Vintage VW Decoder</a>
                    </article>

                    <h2><span aria-hidden="true">[ </span>Contact<span aria-hidden="true"> ]</span></h2>
                    <p>
                        You can find me on <a href="https://x.com/eojeel" target="_blank" rel="noopener noreferrer">Twitter</a> and <a href="https://www.linkedin.com/in/eojeel" target="_blank" rel="noopener noreferrer">LinkedIn</a>.
                    </p>
                </div>
            </main>
        </div>

        <div id="terminal-restart-overlay" class="terminal-restart-overlay hidden">
            <button id="terminal-restart-button" class="terminal-restart-button">Restart Terminal</button>
        </div>
        <button id="terminal-restore-button" class="terminal-restore-button hidden">Show Terminal</button>
    </body>
</html>
