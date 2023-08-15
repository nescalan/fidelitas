<?php

function render($view, $variables = [])
{
    extract($variables);

    require $view;
}

?>