<?php
/**
 * File containing the ezcTemplateForeachLoopTstNode class
 *
 * @package Template
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Control structure: foreach.
 *
 * @package Template
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogen//
 */
class ezcTemplateForeachLoopTstNode extends ezcTemplateBlockTstNode
{
    public $array;
    public $keyVariableName;
    public $itemVariableName;
    public $value;

    public $offset;
    public $limit;

    /**
     *
     * @param ezcTemplateSource $source
     * @param ezcTemplateCursor $start
     * @param ezcTemplateCursor $end
     */
    public function __construct( ezcTemplateSourceCode $source, /*ezcTemplateCursor*/ $start, /*ezcTemplateCursor*/ $end )
    {
        parent::__construct( $source, $start, $end );
        $this->value = $this->keyVariableName = $this->itemVariableName = null;
        $this->name = 'foreach';

        $this->offset = $this->limit = null;
    }

    public function getTreeProperties()
    {
        return array( 'name'             => $this->name,
                      'isClosingBlock'   => $this->isClosingBlock,
                      'isNestingBlock'   => $this->isNestingBlock,
                      'array'            => $this->array,
                      'keyVariableName'  => $this->keyVariableName,
                      'itemVariableName' => $this->itemVariableName,
                      'value'            => $this->value,
                      'children'         => $this->children );
    }

    public function canHandleElement( ezcTemplateTstNode $element )
    {
        //return ( $element instanceof ezcTemplateLoopTstNode && $element->name != 'delimiter' );
        return false;
    }

    public function handleElement( ezcTemplateTstNode $element )
    {
        // Also accept the Delimiter TSTNode.
        $this->children[] = $element;

        // temporary compatability
        $this->elements = $this->children;

    }
}
?>
