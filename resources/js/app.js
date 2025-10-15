document.addEventListener("DOMContentLoaded", function () {
    const terminal = document.getElementById("terminal");
    const terminalHeader = document.querySelector(".terminal-header");
    const terminalBody = document.getElementById("terminal-body");
    const minimizeButton = document.getElementById("terminal-minimize");
    const maximizeButton = document.getElementById("terminal-maximize");
    const closeButton = document.getElementById("terminal-close");
    const restartOverlay = document.getElementById("terminal-restart-overlay");
    const restartButton = document.getElementById("terminal-restart-button");
    const restoreButton = document.getElementById("terminal-restore-button");

    minimizeButton.addEventListener("click", (e) => {
        e.stopPropagation();
        document.body.classList.add("no-scroll");
        terminal.classList.add("minimizing");

        requestAnimationFrame(() => {
            terminal.classList.add("minimized");
        });

        restoreButton.classList.remove("hidden");

        terminal.addEventListener("transitionend", () => {
            terminal.classList.remove("minimizing");
            document.body.classList.remove("no-scroll");
        }, { once: true });
    });

    restoreButton.addEventListener("click", () => {
        document.body.classList.add("no-scroll");
        terminal.classList.add("restoring");
        terminal.classList.remove("minimized");
        restoreButton.classList.add("hidden");

        terminal.addEventListener("transitionend", () => {
            terminal.classList.remove("restoring");
            document.body.classList.remove("no-scroll");
        }, { once: true });
    });

    terminalHeader.addEventListener("click", () => {
        if (terminal.classList.contains("minimized")) {
            document.body.classList.add("no-scroll");
            terminal.classList.add("restoring");
            terminal.classList.remove("minimized");
            restoreButton.classList.add("hidden");

            terminal.addEventListener("transitionend", () => {
                terminal.classList.remove("restoring");
                document.body.classList.remove("no-scroll");
            }, { once: true });
        }
    });

    maximizeButton.addEventListener("click", (e) => {
        e.stopPropagation();
        const isFull = terminal.classList.toggle("is-fullscreen");
        document.body.classList.toggle("terminal-fullscreen-open", isFull);
    });

    closeButton.addEventListener("click", (e) => {
        e.stopPropagation();
        // Exit fullscreen if active
        if (terminal.classList.contains("is-fullscreen")) {
            terminal.classList.remove("is-fullscreen");
            document.body.classList.remove("terminal-fullscreen-open");
        }
        // Ensure minimized state is cleared
        terminal.classList.remove("minimized");
        // Hide terminal and show restart overlay
        terminal.classList.add("hidden");
        restartOverlay.classList.remove("hidden");
    });

    restartButton.addEventListener("click", () => {
        // Restore terminal visibility
        restartOverlay.classList.add("hidden");
        terminal.classList.remove("hidden");
        // Ensure we come back in normal mode
        terminal.classList.remove("is-fullscreen", "minimized");
        document.body.classList.remove("terminal-fullscreen-open");
        // Optional: focus body of terminal for usability
        terminalBody?.focus?.();
    });
});
