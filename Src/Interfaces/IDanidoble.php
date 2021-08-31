<?php
/*
 * Created by (c)danidoble 2021.
 */

namespace Danidoble\Interfaces;

use Danidoble\Danidoble;

/**
 *
 */
interface IDanidoble
{
    /**
     * @return array
     */
    public function getCredits(): array;

    /**
     * @return mixed
     */
    public function getMessage();

    /**
     * @param $value
     * @return Danidoble
     */
    public function SetMessage($value): Danidoble;

    /**
     * @return mixed
     */
    public function getAction();

    /**
     * @param $value
     * @return Danidoble
     */
    public function SetAction($value): Danidoble;

    /**
     * @return mixed
     */
    public function getNo();

    /**
     * @param $value
     * @return Danidoble
     */
    public function SetNo($value): Danidoble;

    /**
     * @return mixed
     */
    public function getType();

    /**
     * @param $value
     * @return Danidoble
     */
    public function SetType($value): Danidoble;

    /**
     * @return mixed
     */
    public function getError();

    /**
     * @param $value
     * @return Danidoble
     */
    public function SetError($value): Danidoble;

    /**
     * @return mixed
     */
    public function getErrors();

    /**
     * @param $value
     * @return Danidoble
     */
    public function SetErrors($value): Danidoble;

    /**
     * @param null $no
     * @param null $message
     * @param null $type
     * @param null $action
     */
    public function __construct($no = null, $message = null, $type = null, $action = null);

    /**
     * @return false|string
     */
    public function __toString();

    /**
     * @return $this
     */
    public function __invoke(): Danidoble;

    /**
     * @param string $name
     * @param $value
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
     */
    public function __unset(string $name): void;

    /**
     * @param null $no
     * @param null $message
     * @param null $type
     * @param null $action
     */
    public function bind($no = null, $message = null, $type = null, $action = null): void;
}