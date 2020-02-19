<?php

namespace Framework\Http;

class Request 
{

    public function getQueryParams() : array 
    {
        return $_GET;
    }
    
    public function getCookies() : array
    {
        return $_COOKIE;
    }
    
    
    public function getParsedBody()
    {
        return $_POST ?: null;
    }
    
    
}
