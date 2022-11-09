<?php

namespace Akilesh\Testapi\Api;

interface PostRepositoryInterface
{
    /**
     * Returns Featured Brands to user
     *
     * @api
     * @param No params.
     * @return string
     */

    public function getList();


}