<?php

namespace Arbory\Base\Admin\Form\Fields;

use Arbory\Base\Admin\Form\Fields\Concerns\HasRelationships;

abstract class AbstractRelationField extends AbstractField implements NestedFieldInterface
{
    use HasRelationships;

    protected $fieldSetCallback;

    /**
     * AbstractRelationField constructor.
     * @param string $name
     * @param callable $fieldSetCallback
     */
    public function __construct( $name, callable $fieldSetCallback = null )
    {
        parent::__construct( $name );

        $this->fieldSetCallback = $fieldSetCallback;
    }
}
