<?php
/**
 * dataurifilter plugin for Craft CMS 3.x
 *
 * Adds a dataUri filter to encode the file contents to work as a data URI
 *
 * @link      www.pinfirestudios.com
 * @copyright Copyright (c) 2018 Pinfire Studios
 */

namespace pinfirestudios\dataurifilter\twigextensions;

use pinfirestudios\dataurifilter\Dataurifilter;

use Craft;

/**
 * @author    Pinfire Studios
 * @package   Dataurifilter
 * @since     1.0.0
 */
class DataurifilterTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Dataurifilter';
    }

    /**
     * @inheritdoc
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('someFilter', [$this, 'someInternalFunction']),
        ];
    }

    /**
     * @inheritdoc
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('someFunction', [$this, 'someInternalFunction']),
        ];
    }

    /**
     * @param null $text
     *
     * @return string
     */
    public function someInternalFunction($text = null)
    {
        $result = $text . " in the way";

        return $result;
    }
}
