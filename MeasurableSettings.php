<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\MastodonWidget;

use Piwik\Settings\Setting;
use Piwik\Settings\FieldConfig;

class MeasurableSettings extends \Piwik\Settings\Measurable\MeasurableSettings
{

    /** @var Setting */
    public $mastodonPageURLSetting;

    protected function init()
    {
        $this->mastodonPageURLSetting = $this->makeMastodonPageURLSetting();
    }

    private function makeMastodonPageURLSetting()
    {
        return $this->makeSetting('mastodonPageURL', $default = '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
            $field->title = 'Mastodon Page URL';
            $field->uiControl = FieldConfig::UI_CONTROL_TEXT;
            $field->uiControlAttributes = array('size' => 3);
            $field->description = 'The URL of the Mastodon instance Page (ex. "https://mastodon.floss-marketing-school.com")';
        });
    }

}
