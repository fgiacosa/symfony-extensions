<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;



class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('md5', [$this, 'md5hash']),
        ];
    }

    public function md5hash($a): string{
        return md5($a);
    }

}
