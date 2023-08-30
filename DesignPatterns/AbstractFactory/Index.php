<?php

require_once 'Page.php';
require_once './Factory/PHPTemplateFactory.php';

echo 'Hi index!';

$page = new Page('Simple Page', 'This is simple page content');
echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());
