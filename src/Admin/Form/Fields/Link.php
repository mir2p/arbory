<?php

namespace Arbory\Base\Admin\Form\Fields;

use Arbory\Base\Admin\Form\Fields\Concerns\HasNestedFieldSet;
use Arbory\Base\Admin\Form\FieldSet;
use Arbory\Base\Html\Elements\Element;
use Arbory\Base\Html\Html;

class Link extends HasOne
{
    use HasNestedFieldSet;

    protected $style = 'nested';

    protected $urlRules;

    /**
     * @param string $name
     */
    public function __construct( string $name )
    {
        $fieldSetCallback = function( FieldSet $fieldSet )
        {
            $fieldSet->text( 'href' );
            $fieldSet->text( 'title' );
            $fieldSet->checkbox( 'new_tab' );
        };

        $this->wrapper = function ($content) {
            $div = Html::div()->addClass('link-body');
            $fieldset = Html::fieldset()->addClass('item');

            $div->append($fieldset);
            $fieldset->append($content);

            return $div;
        };

        parent::__construct( $name, $fieldSetCallback );
    }

    public function configureFieldSet( FieldSet $fieldSet )
    {
        $fieldSet->text( 'href' );
        $fieldSet->text( 'title' );
        $fieldSet->checkbox( 'new_tab');

        return $fieldSet;
    }

    /**
     * @return mixed
     */
    public function getUrlRules()
    {
        return $this->urlRules;
    }

    /**
     * @param mixed $urlRules
     */
    public function setUrlRules( $urlRules ): void
    {
        $this->urlRules = $urlRules;
    }
}
