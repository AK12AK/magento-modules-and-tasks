<?php

namespace Akilesh\Grptsk\Api\Data;

interface GridInterface
{
    const Feedback_No = 'Feedback_No';
    const Name = 'Name';
    const Email = 'Email';
    const Mobile = 'Mobile';
    const Feedback = 'Feedback';

   
    public function getFeedback_No();

    public function getName();

   
    public function setName($Name);

    public function getEmail();

 
    public function setEmail($Email);

 
    public function getMobile();

  
    public function setMobile($Mobile);

    public function getFeedback();
}