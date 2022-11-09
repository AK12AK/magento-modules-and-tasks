<?php
namespace Akilesh\Testapi\Model;

use Akilesh\Testapi\Api\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function __construct(array $Hello = [])
    {
        var_dump($Hello);
    }
    public function getList()
    {
        return "Api Response had been displayed _ Codilar";
    }
}