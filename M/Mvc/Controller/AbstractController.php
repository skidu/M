<?php
/**
 * @link https://github.com/MaGuowei/M
 * @copyright 2013 maguowei.com
 * @author Ma Guowei <imaguowei@gmail.com>
 */
namespace M\Mvc\Controller;

/**
 * Class AbstractController
 * @package M\Mvc\Controller
 */
abstract class AbstractController
{
    /**
     *构造器
     */
    public function __construct()
    {
        $this->init();
    }

    /**
     *初始化，子类可以覆盖该方法以降初始化内容放入构造器
     */
    public function init()
    {

    }

}