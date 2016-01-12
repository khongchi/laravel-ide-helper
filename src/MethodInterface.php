<?php
/**
 *  This file is part of the Xpressengine package.
 *
 * PHP version 5
 *
 * @category
 * @package     Xpressengine\
 * @author      XE Team (khongchi) <khongchi@xpressengine.com>
 * @copyright   2000-2014 Copyright (C) NAVER <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 * @link        http://www.xpressengine.com
 */
namespace Barryvdh\LaravelIdeHelper;

interface MethodInterface
{
    /**
     * Get the class wherein the function resides
     *
     * @return string
     */
    public function getDeclaringClass();

    /**
     * Return the class from which this function would be called
     *
     * @return string
     */
    public function getRoot();

    /**
     * Get the docblock for this method
     *
     * @param string $prefix
     *
     * @return mixed
     */
    public function getDocComment($prefix = "\t\t");

    /**
     * Get the method name
     *
     * @return string
     */
    public function getName();

    /**
     * Get the parameters for this method
     *
     * @param bool $implode Wether to implode the array or not
     *
     * @return string
     */
    public function getParams($implode = true);

    /**
     * Get the parameters for this method including default values
     *
     * @param bool $implode Wether to implode the array or not
     *
     * @return string
     */
    public function getParamsWithDefault($implode = true);

    /**
     * Should the function return a value?
     *
     * @return bool
     */
    public function shouldReturn();

    /**
     * Get the parameters and format them correctly
     *
     * @param $method
     *
     * @return array
     */
    public function getParameters($method);
}
