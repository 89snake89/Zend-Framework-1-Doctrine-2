<?php

namespace Application\Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

/** 
 * @ODM\Document(db="local",
 *     collection="log") 
 */
class User
{
    /** @ODM\Id */
    private $id;

    /** @ODM\String */
    private $name;

    /** @ODM\String */
    private $email;

    /** @ODM\EmbedMany */
    private $posts = array();

    public function setId($id){
    	$this->id = $id;
    }
    public function getId(){
    	return $this->id;
    }
    public function setName($name){
    	$this->name = $name;
    }
    public function getName(){
    	return $this->name;
    }
    public function setEmail($mail){
    	$this->email = $mail;
    }
    public function getEmail(){
    	return $this->email;
    }
    public function addPosts($post){
    	array_push($this->posts, $post);
    }
    public function getPosts(){
    	return $this->posts;
    }
}