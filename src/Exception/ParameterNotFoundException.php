<?php


namespace SitePoint\Container\Exception;


use Psr\Container\NotFoundExceptionInterface;

class ParameterNotFoundException extends \Exception implements NotFoundExceptionInterface
{

}