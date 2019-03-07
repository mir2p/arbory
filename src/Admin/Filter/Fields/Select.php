<?php

namespace Arbory\Base\Admin\Filter\Fields;
use Arbory\Base\Html\Elements\Content;
use Arbory\Base\Html\Html;

use Illuminate\Http\Request;

/**
 * Class Dropdown
 * @package Arbory\Base\Admin\Form\Fields
 */
class Select
{
    public function __toString()
    {
        return (string) $this->render();
    }

    public function render()
    {
        return new Content([Html::div( [
            Html::select(),
        ] )->addClass( 'select' )]);
    }
}
