<?php
/**
 * @author Serhii Nekhaienko <serhii.nekhaienko@gmail.com>
 * @license GPL
 * @copyright Serhii Nekhaienko &copy 2020
 * @version 2.0.0
 * @project endorphin-studio/browser-detector-detection
 */

namespace EndorphinStudio\Detector\Detection;

use EndorphinStudio\Detector\Tools;

/**
 * Detector of browser
 * Class BrowserDetector
 * @package EndorphinStudio\Detector\Detection
 */
class BrowserDetector extends AbstractDetection
{
    /**
     * @var string Key in config
     */
    protected $configKey = 'browser';

    /**
     * Setup result of object
     */
    protected function setupResultObject()
    {
        $browserData = $this->detectByType();
        foreach ($browserData as $key => $value) {
            if ($key === 'originalInfo') {
                $this->setAttributes($value);
                continue;
            }
            Tools::runSetter($this->resultObject, $key, $value);
        }
        $this->additionalInfo = $browserData;
    }
}