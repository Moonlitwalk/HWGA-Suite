<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RaiderioService
{


    public function getPath(string $group, string $path)
    {
        $prefix = config("raiderio.groups.{$group}.prefix");
        $endpoint = config("raiderio.groups.{$group}.endpoints.{$path}");

        return $prefix . $endpoint;
    }

}
