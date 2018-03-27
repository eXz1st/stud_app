<?php
namespace App\Controllers;

use App\Models\ProductModel;
use Mindk\Framework\Exceptions\NotFoundException;
use Mindk\Framework\Http\Request\Request;
/**
 * Product controller
 *
 * Class ProductController
 * @package App\Controllers
 * @param int Product ID
 * @return mixed
 * @throws NotFoundException
 */
class ProductController
{
    /**
     * Products index page
     */
    function index(ProductModel $model){
        return $model->getList();
    }
    /**
     * Single product page
     *
     * @param   int Product ID
     * @return  mixed
     */
    function show($id){
        $model = new ProductModel();
        $item = $model->getRecord((int)$id);

        //Check if record exists
        if(empty($item)) {
            throw new NotFoundException('Product with id ' . $id . ' not found');
        }

        return $item;
    }
    /**
     * Create product
     */
    function create(){
        //@TODO: Implement this
    }
}