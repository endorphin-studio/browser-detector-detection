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
 * Class OsDetector
 * Detection class for OS
 * @package EndorphinStudio\Detector\Detection
 */
class OsDetector extends AbstractDetection
{
    /**
     * @var string Key for abstract detector
     */
    protected $configKey = 'os';

    /**
     * Setup result object
     */
    protected function setupResultObject()
    {
        $osData = $this->detectByKey('family');
        foreach ($osData as $key => $value) {
            if ($key === 'originalInfo') {
                $this->setAttributes($value);
                continue;
            }
            Tools::runSetter($this->resultObject, $key, $value);
        }
        $this->additionalInfo = $osData;
    }
}