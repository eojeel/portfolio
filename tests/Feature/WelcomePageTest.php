<?php

declare(strict_types=1);

it('renders the welcome page with SEO metadata', function (): void {
    $this->get('/')
        ->assertSuccessful()
        ->assertSee('<title>', false)
        ->assertSee('<meta name="description"', false)
        ->assertSee('<link rel="canonical" href="'.url('/').'">', false)
        ->assertSee('<meta property="og:title"', false);
});

it('renders accessible terminal controls', function (string $label): void {
    $this->get('/')
        ->assertSuccessful()
        ->assertSee('aria-label="'.$label.'"', false);
})->with([
    'close' => 'Close terminal',
    'minimise' => 'Minimise terminal',
    'full screen' => 'Toggle full screen',
]);

it('uses a main landmark and safe external links', function (): void {
    $this->get('/')
        ->assertSuccessful()
        ->assertSee('<main id="terminal-body"', false)
        ->assertSee('rel="noopener noreferrer"', false);
});
