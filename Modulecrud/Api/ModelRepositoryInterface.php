<?php
namespace Akilesh\Modulecrud\Api;

use \Akilesh\Modulecrud\Api\Data\ModelInterface;

interface ModelRepositoryInterface
{

    public function save(ModelInterface $model);


    public function delete(ModelInterface $model);

 
    public function deleteById($id);


    public function getById($id);


    // public function getList(SearchCriteriaInterface $criteria);
}