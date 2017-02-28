<?php
namespace Craft;

class TrumbowygPlugin extends BasePlugin
{
    // =========================================================================
    // PLUGIN INFO
    // =========================================================================

    public function getName()
    {
        return Craft::t('Trumbowyg');
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
        return 'S. Group';
    }

    public function getDeveloperUrl()
    {
        return 'http://sgroup.com.au';
    }

    public function getPluginUrl()
    {
        return 'https://github.com/engram-design/Trumbowyg';
    }

    public function getDocumentationUrl()
    {
        return $this->getPluginUrl() . '/blob/master/README.md';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/engram-design/Trumbowyg/master/changelog.json';
    }

}
