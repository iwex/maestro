<?php

namespace Maestro\Cache;

trait CachingGetters
{
    public function getCachingEnabled()
    {
        return $this->cachingEnabled;
    }

    public function getCacheTime()
    {
        return $this->cacheTime;
    }
}
