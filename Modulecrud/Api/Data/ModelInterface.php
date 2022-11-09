<?php
namespace Akilesh\Modulecrud\Api\Data;

interface ModelInterface
{

    const ID ='id';
    const TITLE='title';
    const CONTENT='content';
    const DESCRIPTION='description';

    public function getId();

    public function setId($id);


    public function getTitle();


    public function setTitle($title);


    public function getContent();


    public function setContent($content);


    public function getDescription();


    public function setDescription($description);
}