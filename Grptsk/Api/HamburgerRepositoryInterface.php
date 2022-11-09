<?php

namespace Akilesh\Grptsk\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Akilesh\Grptsk\Api\Data\HamburgerInterface;

interface HamburgerRepositoryInterface
{
    /**
     * @param int $Feedback_No
     * @return \Hello\Employee\Api\Data\HamburgerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($Feedback_No);

    /**
     * @param \Hello\Employee\Api\Data\HamburgerInterface $hamburger
     * @return \Hello\Employee\Api\Data\HamburgerInterface
     */
    public function save(HamburgerInterface $hamburger);

    /**
     * @param \Hello\Employee\Api\Data\HamburgerInterface $hamburger
     * @return void
     */
    public function delete(HamburgerInterface $hamburger);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Hello\Employee\Api\Data\HamburgerSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
     public function deleteById($d);
}