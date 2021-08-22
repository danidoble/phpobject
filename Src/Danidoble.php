<?php
/*
 * Created by (c)danidoble 2021.
 */

namespace Danidoble;

use Danidoble\Interfaces\IDanidoble;
use ErrorException;


/**
 * Class Danidoble
 * @package Danidoble\Danidoble
 */
class Danidoble implements IDanidoble
{
    protected $message, $no, $type, $action;
    protected array $_danidoble;

    /**
     * @param null $no
     * @param null $message
     * @param null $type
     * @param null $action
     */
    public function __construct($no = null, $message = null, $type = null, $action = null)
    {
        $this->_danidoble = [
            'credits'=>'Created by danidoble.',
            'github'=>'https://github.com/danidoble',
            'website'=>'https://danidoble.com',
        ];
        $this->bind($no, $message, $type, $action);
    }

    /**
     * @param null $no
     * @param null $message
     * @param null $type
     * @param null $action
     */
    public function bind($no = null, $message = null, $type = null, $action = null): void{
        if ($no !== null) {
            $this->no = $no;
        }else{
            unset($this->no);
        }
        if ($message !== null) {
            $this->message = $message;
        }else{
            unset($this->message);
        }
        if ($type !== null) {
            $this->type = $type;
        }else{
            unset($this->type);
        }
        if ($action !== null) {
            $this->action = $action;
        }else{
            unset($this->action);
        }
    }

    /**
     * @return false|string
     */
    public function __toString()
    {
        $data = json_decode(json_encode($this));
        if(isset($this->message)){
            $data->message = $this->message;
        }
        if(isset($this->no)) {
            $data->no = $this->no;
        }
        if(isset($this->type)) {
            $data->type = $this->type;
        }
        if(isset($this->action)) {
            $data->action = $this->action;
        }
        return json_encode($data);
    }

    /**
     * @return $this
     */
    public function __invoke(): Danidoble
    {
        return $this;
    }

    /**
     * @param string $name
     * @param $value
     * @throws ErrorException
     */
    public function __set(string $name, $value): void
    {
        if ($name === '_danidoble') {
            throw new ErrorException("You cannot modify this property", 500);
        }
        $this->{$name} = $value;
    }

    /**
     * @param string $name
     * @return null
     * @throws ErrorException
     */
    public function __get(string $name)
    {
        if ($name === '_danidoble') {
            throw new ErrorException("Can't view this protected property, use getCredits(), to access", 500);
        }
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
        if(isset($this->name)){
            return true;
        }
        return false;
    }

    /**
     * @throws ErrorException
     */
    public function __unset(string $name): void
    {
        if ($name === '_danidoble') {
            throw new ErrorException("You cannot delete this property", 500);
        }
        unset($this->{$name});
    }

    /**
     * @return array
     */
    public function getCredits(): array
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