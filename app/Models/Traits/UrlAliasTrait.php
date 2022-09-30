<?php
/**
 * Created by PhpStorm.
 * User: vgavr
 * Date: 15.06.2021
 * Time: 15:38
 */

namespace App\Models\Traits;


use App\Services\Url\UrlService;

trait UrlAliasTrait
{
    public function setAlias($title)
    {
        if(!$this->alias) {
            $urlService = new UrlService($this);
            if($title) {
                $this->alias = $urlService->getAlias($title);
            }
        }
    }
}
