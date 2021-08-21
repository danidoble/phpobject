<?php
/*
 * Created by (c)danidoble 2021.
 */

namespace Danidoble;
use Danidoble\Interfaces\IDanidoble;

/**
 * Class Danidoble
 * @package Danidoble\Danidoble
 */
class Danidoble implements IDanidoble
{
    protected string $_danidoble = 'danidoble';
    protected $message,$no,$type,$action;

    /**
     * @return string
     */
    public function getCredits(): string
    {
        return $this->_danidoble;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param $value
     * @return Danidoble
     */
    public function SetMessage($value): Danidoble
    {
        $this->message = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param $value
     * @return Danidoble
     */
    public function SetAction($value): Danidoble
    {
        $this->action = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNo()
    {
        return $this->no;
    }

    /**
     * @param $value
     * @return Danidoble
     */
    public function SetNo($value): Danidoble
    {
        $this->no = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $value
     * @return Danidoble
     */
    public function SetType($value): Danidoble
    {
        $this->type = $value;
        return $this;
    }
}