<?php
require_once 'TemplateRenderer.php';

class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return Twig::render($templateString, $arguments);
    }
}