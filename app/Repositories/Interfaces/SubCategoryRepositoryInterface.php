<?php 

namespace App\Repositories\Interfaces;


interface SubCategoryRepositoryInterface {

	public function all();

	public function find($id);
}