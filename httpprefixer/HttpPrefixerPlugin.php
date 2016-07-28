<?php
namespace Craft;

/**
 * HTTP Prefixer Twig Filter Plugin.
 *
 * Adds a twig filter ( "URL"|httpPrefix ) to twig that lets you prefix a string with "http://" if there isn't
 * any "://" already in the string.
 *
 * This helps if people add links like this in the CMS: "www.google.com" or "google.com" without a protocol. Links to this URL get
 * wrongly appended to your website as a relative link: "www.yoursite.com/www.google.com".
 *
 * By prefixing it with "http://" the link works correctly. If the url already has another protocol like "https://" or "ftp://",
 * it doesn't get touched.
 *
 * @author    Robert Krieg <hello@robertkrieg.ch>
 * @copyright Copyright (c) 2016, Robert Krieg
 * @license   http://buildwithcraft.com/license Craft License Agreement
 *
 * @link      https://github.com/exophunk
 */
class HttpPrefixerPlugin extends BasePlugin
{

    public function init()
    {

    }

    public function getName()
    {
        return Craft::t('Link HTTP Prefixer');
    }

    public function getDescription()
    {
        return 'Adds a Twig Filter that you can use to add a http:// prefix to a URL, if there isn\'t one already.';
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Robert Krieg';
    }

    public function getDeveloperUrl()
    {
        return 'https://github.com/exophunk';
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.httpprefixer.twigextensions.HttpPrefixerTwigExtension');

        return new HttpPrefixerTwigExtension();
    }

}
