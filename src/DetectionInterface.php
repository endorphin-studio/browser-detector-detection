<?php
/**
 * @author Serhii Nekhaienko <serhii.nekhaienko@gmail.com>
 * @license GPL
 * @copyright Serhii Nekhaienko &copy 2020
 * @version 2.0.0
 * @project endorphin-studio/browser-detector-detection
 */

namespace EndorphinStudio\Detector\Detection;

use EndorphinStudio\Detector\Detector;

/**
 * Interface of abstract detection
 * Interface DetectionInterface
 * @package EndorphinStudio\Detector\Detection
 */
interface DetectionInterface
{
    /**
     * Init method
     * @param Detector $detector
     * @return mixed
     */
    public function init(Detector $detector);

    /**
     * Detect method
     * @param array $additional
     * @return mixed
     */
    public function detect(array $additional);
}