<?php
namespace htlwy\headerphp\Option;

use htlwy\headerphp\Option;

/**
 * Class Cache
 * activates the output-buffering-cache
 */
class Cache extends option
{
    protected $cache = true;

    public function __construct($cache = null)
    {
        if(isset($cache))
        {
            $this->set($cache);
        }
    }

    public function set($cache)
    {
        if($cache)
        {
            $this->cache      = true;
        }
        else
        {
            $this->cache = false;
        }
        $this->_isdefault = false;
    }

    public function get()
    {
        return $this->cache;
    }
}
