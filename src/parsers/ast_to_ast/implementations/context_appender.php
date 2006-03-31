<?php
/**
 * File containing the ezcTemplateAstToAstContextAppender
 *
 * @package Template
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * @package Template
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogen//
 */
class ezcTemplateAstToAstContextAppender extends ezcTemplateAstWalker
{
    public function __construct( )
    {
    }

    public function __destruct()
    {
    }

    public function visitOutputAstNode( ezcTemplateOutputAstNode $type )
    {
        parent::visitOutputAstNode( $type );
        return ezcTemplateXhtmlContext::transformOutput( $type->expression );
    }


}
?>