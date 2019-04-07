<?php
/**
 * The file contains Output class
 *
 * PHP version 5
 *
 * @category Library
 * @package  Cherry
 * @author   Temuri Takalandze <takalandzet@gmail.com>
 * @license  https://github.com/cherry-framework/console/blob/master/LICENSE MIT
 * @link     https://github.com/cherry-framework/console
 */

namespace Cherry\Console\Output;

/**
 * Class for organizing CLI output.
 *
 * @category Library
 * @package  Cherry
 * @author   Temuri Takalandze <takalandzet@gmail.com>
 * @license  https://github.com/cherry-framework/console/blob/master/LICENSE MIT
 * @link     https://github.com/cherry-framework/console
 */
class Output
{
    private $_CLIColor;

    /**
     * Output constructor.
     */
    public function __construct()
    {
        $this->_CLIColor = new CLIColor();
    }

    /**
     * Return info-styled text.
     *
     * @param string $text Text for returning.
     *
     * @return string
     */
    public function info($text)
    {
        return $this->_colorizeString("[INFO] {$text}", 'blue', 'white');
    }

    /**
     * Return warning-styled text.
     *
     * @param string $text Text for returning.
     *
     * @return string
     */
    public function warning($text)
    {
        return $this->_colorizeString("[WARNING] {$text}", 'yellow', 'white');
    }

    /**
     * Return danger-styled text.
     *
     * @param string $text Text for returning.
     *
     * @return string
     */
    public function danger($text)
    {
        return $this->_colorizeString("[ERROR] {$text}", 'red', 'white');
    }

    /**
     * Return success-styled text.
     *
     * @param string $text Text for returning.
     *
     * @return string
     */
    public function success($text)
    {
        return $this->_colorizeString("[OK] {$text}", 'green', 'white');
    }

    /**
     * Return text without styling.
     *
     * @param string $text Text for returning.
     *
     * @return string
     */
    public function text($text)
    {
        return $this->_colorizeString($text);
    }

    /**
     * Add style to text string.
     *
     * @param string $text             Text for colorizing.
     * @param string $background_color Background color for string.
     * @param string $foreground_color Foreground color for string.
     *
     * @return string Stylized text.
     */
    private function _colorizeString($text, $background_color = null,
        $foreground_color = null
    ) {
        return $this->_CLIColor
            ->getColoredString($text, $background_color, $foreground_color)
            ."\n";
    }
}