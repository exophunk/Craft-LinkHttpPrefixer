<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

 /*
 * @author    Robert Krieg <hello@robertkrieg.ch>
 * @copyright Copyright (c) 2016, Robert Krieg
 * @license   http://buildwithcraft.com/license Craft License Agreement
 *
 * @link      https://github.com/exophunk
 */
class HttpPrefixerTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'HttpPrefix';
    }

    public function getFilters()
    {
        return array(
            'httpPrefix' => new Twig_Filter_Method($this, 'addHttpPrefix'),
        );
    }

    public function addHttpPrefix($url)
    {
        if(strpos($url,'://') === false) {
            return 'http://' . $url;
        } else {
            return $url;
        }
    }
}
