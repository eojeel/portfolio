<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

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
                        I am a passionate web developer with a love for creating clean, efficient, and user-friendly applications. I have experience in both front-end and back-end development, and I am always eager to learn new technologies.
                    </p>

                    <h2>[ Skills ]</h2>
                    <ul>
                        <li>PHP / Laravel</li>
                        <li>JavaScript / TypeScript</li>
                        <li>React / Vue.js</li>
                        <li>Tailwind CSS</li>
                        <li>MySQL / PostgreSQL</li>
                    </ul>

                    <h2>[ Projects ]</h2>
                    <div>
                        <h3>Project 1</h3>
                        <p>A brief description of the project.</p>
                        <a href="#">View on GitHub</a>
                    </div>
                    <div>
                        <h3>Project 2</h3>
                        <p>A brief description of the project.</p>
                        <a href="#">View on GitHub</a>
                    </div>

                    <h2>[ Contact ]</h2>
                    <p>
                        You can find me on <a href="https://x.com/joethemaster" target="_blank">Twitter</a> and <a href="https://linkedin.com/in/joethemaster" target="_blank">LinkedIn</a>.
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
