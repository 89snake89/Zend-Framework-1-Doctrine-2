<?php

namespace Application\Documents;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document */
class BlogPost
{
    /** @ODM\Id */
    private $id;

    /** @ODM\String */
    private $title;

    /** @ODM\String */
    private $body;

    /** @ODM\Date */
    private $createdAt;
	public function __construct(){
		$this->createdAt = date("Y-m-d H:i:s");
	}
    //Setters methods
    public function setTitle($param){
    	$this->title = $param;
    }
    public function setBody($param){
    	$this->body = $param;
    }
    //Getters methods
    public function getId(){
    	return $this->id;
    }
    public function getTitle(){
    	return $this->title;
    }
    public function getBody(){
    	return $this->body;
    }
    public function getCreatedAt(){
    	return $this->createdAt;
    }
}