<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JoeLee.io</title>

        @vite(['resources/css/app.css', 'resources/js/app.ts'])
    </head>
    <body class="antialiased">
        <div id="terminal" class="terminal-window">
            <div class="terminal-header">
                <div class="header-buttons">
                    <div id="terminal-close" class="header-button red"></div>
                    <div id="terminal-minimize" class="header-button yellow"></div>
                    <div id="terminal-maximize" class="header-button green"></div>
                </div>
                <div class="header-title">Terminal</div>
                <div></div>
            </div>
            <div id="terminal-body" class="terminal-body">
                <div class="prompt">
                    <span class="p10k-segment p10k-segment-dir">~/portfolio</span>
                    <span class="p10k-segment p10k-segment-git">(main)</span>
                    <span class="p10k-prompt-symbol">❯</span>
                </div>
                <div class="content">
                    <h1>Joe Lee</h1>
                    <p>Lead Developer</p>

                    <h2>[ About Me ]</h2>
                    <p>

                        Over {{ \Carbon\Carbon::create(2014)->age }} years of experience developing a wide range of web applications leveraging various front-end and back-end technologies while constantly maintaining the full stack environment.</p>

                    <h2>[ Skills ]</h2>
                    <ul>
                        <li>PHP / Laravel</li>
                        <li>JavaScript</li>
                        <li>Vue.js</li>
                        <li>CSS</li>
                        <li>MySQL / SQLite</li>
                        <li>Ansible / Cloud / Bare Metal</li>
                    </ul>

                    <h2>[ Projects ]</h2>
                    <div>
                        <h3>Vintage VW Decoder</h3>
                        <p>Volkswagen Type 2 M-Plate and VIN Decoder: Essential Identification Tool for VW Buses from (1970-1979), Detailing Production Codes, Equipment, Manufacturing Dates, Destination, Specifications, and Optional Extras</p>
                        <a href="https://vintagevwdecoder.com/">Vintage VW Decoder</a>
                    </div>

                    <h2>[ Contact ]</h2>
                    <p>
                        You can find me on <a href="https://x.com/eojeel" target="_blank">Twitter</a> and <a href="https://linkedin.com/in/eojeel" target="_blank">LinkedIn</a>.
                    </p>
                </div>
            </div>
        </div>

        <div id="terminal-restart-overlay" class="terminal-restart-overlay hidden">
            <button id="terminal-restart-button" class="terminal-restart-button">Restart Terminal</button>
        </div>
        <button id="terminal-restore-button" class="terminal-restore-button hidden">Show Terminal</button>
    </body>
</html>
