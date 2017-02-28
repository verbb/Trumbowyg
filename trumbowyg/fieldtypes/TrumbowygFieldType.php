<?php
namespace Craft;

class TrumbowygFieldType extends BaseFieldType
{
    // Public Methods
    // =========================================================================

    public function getName()
    {
        return Craft::t('Rich Text (Trumbowyg)');
    }

    public function getInputHtml($name, $value)
    {
        $id = craft()->templates->formatInputId($name);
        $namespaceId = craft()->templates->namespaceInputId($name);

        craft()->templates->includeJsResource('trumbowyg/lib/trumbowyg/trumbowyg.min.js');
        craft()->templates->includeCssResource('trumbowyg/lib/trumbowyg/ui/trumbowyg.min.css');

        craft()->templates->includeJs('$("#' . $namespaceId. '").trumbowyg();');

        return craft()->templates->render('trumbowyg/input', array(
            'id' => $id,
            'name'  => $name,
            'value' => $value,
        ));
    }
}
