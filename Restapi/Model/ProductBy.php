<?php
namespace Akilesh\Restapi\Model;

use Akilesh\Restapi\Api\ProductByInterface;

class ProductBy implements ProductByInterface
{

    protected $productRepository;

    public function __construct(
       \Magento\Catalog\Api\ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getProductById($id)
    {
        return $this->productRepository->getById($id);
    }
}