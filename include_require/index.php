<?php
function suma($numero1, $numero2)
{
  return $numero1 + $numero2;
}

echo '----- Antes del Require -----';

require 'view.php';

echo '----- Después del Require -----';
