<?php

namespace Airist\PhpMvc\Middleware;

interface Middleware
{

    function before(): void;

}