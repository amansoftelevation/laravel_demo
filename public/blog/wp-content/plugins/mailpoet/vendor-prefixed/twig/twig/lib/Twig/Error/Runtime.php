<?php

namespace MailPoetVendor;

if (!defined('ABSPATH')) exit;


use MailPoetVendor\Twig\Error\RuntimeError;
\class_exists('MailPoetVendor\\Twig\\Error\\RuntimeError');
if (\false) {
    class Twig_Error_Runtime extends \MailPoetVendor\Twig\Error\RuntimeError
    {
    }
}
