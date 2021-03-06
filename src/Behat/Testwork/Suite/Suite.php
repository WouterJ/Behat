<?php

/*
 * This file is part of the Behat Testwork.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Testwork\Suite;

/**
 * Testwork suite interface.
 *
 * All testwork suites should implement this interface.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface Suite
{
    /**
     * Returns unique suite name.
     *
     * @return string
     */
    public function getName();

    /**
     * Returns suite settings.
     *
     * @return array
     */
    public function getSettings();

    /**
     * Checks if a setting with provided name exists.
     *
     * @param string $key
     *
     * @return Boolean
     */
    public function hasSetting($key);

    /**
     * Returns setting value by its key.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function getSetting($key);

    /**
     * Returns custom parameters.
     *
     * @return array
     */
    public function getParameters();

    /**
     * Checks if parameter with provided name exists.
     *
     * @param string $key
     *
     * @return Boolean
     */
    public function hasParameter($key);

    /**
     * Returns parameter value by its key.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function getParameter($key);
}
