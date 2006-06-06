<?php
/**
 * File containing the ezcTemplateBlockCommentAstNode class
 *
 * @package Template
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */
/**
 * Represents PHP comments (Block style).
 *
 * Comments consists of the start marker, the comment text and the end marker.
 * If the text contains newlines each line will be indentended according to
 * indentation level.
 *
 * Creating a comment:
 * <code>
 * $var = new ezcTemplateBlockCommentAstNode( 'A comment with some text' );
 * </code>
 * The corresponding PHP code will be:
 * <code>
 * /* A comment with some text *\/
 * </code>
 *
 * @package Template
 * @version //autogen//
 * @access private
 */
class ezcTemplateBlockCommentAstNode extends ezcTemplateStatementAstNode
{
    /**
     * The text for the comment.
     *
     * @var string
     */
    public $text;

    /**
     * Controls whether space separators are placed between the start/end marker
     * and the comment text.
     *
     * @var bool
     */
    public $hasSeparator;

    /**
     * @param string $text         Text for comment.
     * @param bool   $hasSeparator Use spacing separator or not?
     * @todo See if the ezcBaseTypeException can be improved with name of variable.
     */
    public function __construct( $text, $hasSeparator = true )
    {
        parent::__construct();
        if ( !is_string( $text ) )
        {
            throw new ezcBaseValueException( "text", $text, 'string' );
        }
        $this->text         = $text;
        $this->hasSeparator = $hasSeparator;
    }
}
?>
