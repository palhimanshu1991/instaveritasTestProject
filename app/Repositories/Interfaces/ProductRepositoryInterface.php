<?php 

namespace App\Repositories\Interfaces;


interface ProductRepositoryInterface {

	public function all();

	public function find($id);
}