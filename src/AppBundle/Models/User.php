<?php
/**
 * Created by PhpStorm.
 * User: ALi
 * Date: 27/11/2017
 * Time: 00:57
 */

namespace AppBundle\Models;


class User
{

    private $id;

    /**
     * User constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}