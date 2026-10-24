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

    if (
        !terminal ||
        !terminalHeader ||
        !terminalBody ||
        !minimizeButton ||
        !maximizeButton ||
        !closeButton ||
        !restartOverlay ||
        !restartButton ||
        !restoreButton
    ) {
        return;
    }

    const lockScrollDuringTransition = (transitionClass: string): void => {
        document.body.classList.add("no-scroll");
        terminal.classList.add(transitionClass);

        terminal.addEventListener(
            "transitionend",
            () => {
                terminal.classList.remove(transitionClass);
                document.body.classList.remove("no-scroll");
            },
            { once: true },
        );
    };

    const restoreTerminal = (): void => {
        lockScrollDuringTransition("restoring");
        terminal.classList.remove("minimized");
        restoreButton.classList.add("hidden");
    };

    minimizeButton.addEventListener("click", (e) => {
        e.stopPropagation();
        lockScrollDuringTransition("minimizing");

        requestAnimationFrame(() => {
            terminal.classList.add("minimized");
        });

        restoreButton.classList.remove("hidden");
    });

    restoreButton.addEventListener("click", restoreTerminal);

    terminalHeader.addEventListener("click", () => {
        if (terminal.classList.contains("minimized")) {
            restoreTerminal();
        }
    });

    maximizeButton.addEventListener("click", (e) => {
        e.stopPropagation();
        const isFull = terminal.classList.toggle("is-fullscreen");
        document.body.classList.toggle("terminal-fullscreen-open", isFull);
    });

    closeButton.addEventListener("click", (e) => {
        e.stopPropagation();
        terminal.classList.remove("is-fullscreen", "minimized");
        document.body.classList.remove("terminal-fullscreen-open");
        terminal.classList.add("hidden");
        restartOverlay.classList.remove("hidden");
    });

    restartButton.addEventListener("click", () => {
        restartOverlay.classList.add("hidden");
        terminal.classList.remove("hidden", "is-fullscreen", "minimized");
        document.body.classList.remove("terminal-fullscreen-open");
        terminalBody.focus();
    });
});
