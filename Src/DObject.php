<?php
/*
 * Created by (c)danidoble 2023.
 */

namespace Danidoble;

use ArrayAccess;
use Danidoble\Interfaces\IDObject;

/**
 * Class DObject
 * @package Danidoble\DObject
 * @author danidoble <Daniel Sandoval>
 */
class DObject implements ArrayAccess, IDObject
{
    private array $container = array();

    /**
     * @param object|array $arr
     */
    public function __construct(object|array $arr = [])
    {
        $this->toObject($arr);
    }

    /**
     * Bind data from array to object
     * @param object|array $arr
     */
    public function toObject(object|array $arr = []): void
    {
        if (!empty($arr) && is_array($arr) || is_object($arr)) {
            foreach ($arr as $key => $val) {
                $x_val = $val;
                if (is_array($val) || is_object($val)) {
                    $x_val = new DObject($val);
                }
                $this->{$key} = $x_val;
            }
        }
        $this->container = $this->toArray();
    }

    /**
     * @return false|string
     */
    public function __toString()
    {
        return json_encode($this);
    }

    /**
     * @return DObject
     */
    public function __invoke(): DObject
    {
        return $this;
    }

    /**
     * @param string $name
     * @param $value
     */
    public function __set(string $name, $value): void
    {
        $this->{$name} = $value;
        $this->container = $this->toArray();
    }

    /**
     * @param string $name
     * @return null
     */
    public function __get(string $name)
    {
        if (isset($this->{$name})) {
            return $this->{$name};
        }
        return null;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function __isset(string $name): bool
    {
        if (isset($this->$name)) {
            return true;
        }
        return false;
    }

    /**
     *
     */
    public function __unset(string $name): void
    {
        unset($this->{$name});
        $this->container = $this->toArray();
    }

    public function toArray(): array
    {
        return json_decode($this->toJSON(), true);
    }

    /**
     * @return false|string
     */
    public function toJSON(int $options = 0): bool|string
    {
        return json_encode($this, $options);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->toArray());
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
        $this->toObject($this->container);
    }

    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
        $this->toObject($this->container);
    }

    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }
}
