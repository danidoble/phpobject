<?php
/*
 * Created by (c)danidoble 2023.
 */

namespace Danidoble\Interfaces;

use Danidoble\DObject;

/**
 * @Interface IDObject
 * @author danidoble <Daniel Sandoval>
 */
interface IDObject
{
    /**
     * @param object|array $arr
     * @return void
     */
    public function toObject(object|array $arr = []): void;

    /**
     * @return mixed
     */
    public function __toString();

    /**
     * @return DObject
     */
    public function __invoke(): DObject;

    /**
     * @param string $name
     * @param $value
     * @return void
     */
    public function __set(string $name, $value): void;

    /**
     * @param string $name
     * @return mixed
     */
    public function __get(string $name);

    /**
     * @param string $name
     * @return bool
     */
    public function __isset(string $name): bool;

    /**
     * @param string $name
     * @return void
     */
    public function __unset(string $name): void;

    /**
     * @return array
     */
    public function toArray(): array;

    /**
     * @param int $options
     * @return bool|string
     */
    public function toJSON(int $options = 0): bool|string;

    /**
     * @return int
     */
    public function count(): int;
}