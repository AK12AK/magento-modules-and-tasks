<?php
/**
 *
 * @package     magento2
 * @author      Codilar Technologies
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        http://www.codilar.com/
 */

namespace Akilesh\Modulecrud\Controller\Car;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Akilesh\Modulecrud\Model\Model;
use Akilesh\Modulecrud\Model\ResourceModel\Model as ModelResource;

class Add extends Action
{

    private $Model;

    private $ModelResource;


    public function __construct(
        Context $context,
        Model $Model,
        ModelResource $ModelResource
    )
    {
        parent::__construct($context);
        $this->Model = $Model;
        $this->ModelResource = $ModelResource;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {

        // echo 'dfsf';
        // exit;
        /* Get the post data */
        $data = $this->getRequest()->getParams();

        /* Set the data in the model */
        $ModelModel = $this->Model;
        $ModelModel->setData($data);

        try {
            /* Use the resource model to save the model in the DB */
            $this->ModelResource->save($ModelModel);
            $this->messageManager->addSuccessMessage("Car saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving car"));
        }

        /* Redirect back to cars page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('modulecrud');
        return $redirect;
    }
}

