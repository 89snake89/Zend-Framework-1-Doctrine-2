<?php
namespace Application\Entities;
/**
 * @Entity(repositoryClass="Application\Repositories\SectionsRepository")
 * @Table(name="user")
 */
class User
{ 
	/**
	 * @Id @Column(type="integer")
	 * @GeneratedValue
	 */
	private $id;
	/** @Column(length=20) */
	private $name;
	/** @Column(length=20) */
	private $surname;
	/** @Column(length=1) */
	private $sex;
	/** @Column(length=20) */
	private $city;
	
	public function setId($id_variable){
		$this->id = $id_variable;
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
	public function setSurname($surname){
		$this->surname = $surname;
	}
	public function getSurname(){
		return $this->$surname;
	}
	public function setSex($sex){
		$this->sex = $sex;
	}
	public function getSex(){
		return $this->sex;
	}
	public function setCity($city){
		$this->city = $city;
	}
	public function getCity(){
		return $this->city;
	}
}