<?php
namespace App\Enum;

enum ClientRole :String
{
    case client = 'client';
    case admin = 'admin';
}