<?php
/*
 * Created by (c)danidoble 2021.
 */

namespace Danidoble\Interfaces;
use Danidoble\Danidoble;

/**
 *
 */
interface IDanidoble{
    /**
     * @return string
     */
    public function getCredits(): string;

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

}