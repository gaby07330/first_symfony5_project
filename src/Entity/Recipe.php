<?php // Entité recette
namespace App\Entity; 


class Recipe {

	/*
	 *   /------ DATA ------\ 
	 */

	private $author;

	private $name;

	private $step;

	private $createdAt;

	/*
	 *    /------ Functions ------\
	 */

	
	//  --- Getter ---  \\
	
	public function getAuthor(){
		return $this->author;
	}/*EO getAuthor */

	public function getName(){
		return $this->name;
	}/*EO getName */

	public function getStep(){
		return $this->step;
	}/*EO getStep */

	public function getCreaterAt(){
		return $this->createdAt;
	}/*EO getCreatedAt */

	//  --- Setter ---  \\

	public function setAuthor($author){
		$this->author = $author;
	}/*EO setAuthor */

	public function setName($name){
		$this->name = $name;
	}/*EO setName */

	public function setStep($step){
		$this->step = $step;
	}/*EO setStep */

	public function setCreatedAt($createdAt){
		$this->createdAt = $createdAt;
	}/*EO setCreatedAt */
}/*EO Recipe */
?>