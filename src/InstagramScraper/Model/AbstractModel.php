<?php

namespace IgScrapper\Model;

use IgScrapper\Traits\ArrayLikeTrait;
use IgScrapper\Traits\InitializerTrait;

/**
 * Class AbstractModel
 * @package IgScrapper\Model
 */
abstract class AbstractModel implements \ArrayAccess
{
    use InitializerTrait, ArrayLikeTrait;

    /**
     * @var array
     */
    protected static $initPropertiesMap = [];

    /**
     * @return array
     */
    public static function getColumns()
    {
        return \array_keys(static::$initPropertiesMap);
    }
}