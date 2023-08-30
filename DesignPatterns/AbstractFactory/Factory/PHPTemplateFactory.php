<?php

require_once 'TemplateFactory.php';
require_once dirname(__DIR__).'/TitleTemplate/PHPTemplateTitleTemplate.php';
require_once dirname(__DIR__).'/PageTemplate/PHPTemplatePageTemplate.php';
require_once dirname(__DIR__).'/Renderer/PHPTemplateRenderer.php';


class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}
