<?php
declare(strict_types=1);

function renderTemplate(string $template, array $data = [])
{
    extract($data);
    require "templates/$template.php";
}
