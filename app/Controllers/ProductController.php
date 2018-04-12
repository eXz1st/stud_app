<?php
namespace App\Controllers;

use App\Models\ProductModel;
use Mindk\Framework\DI\Injector;
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
    function show(ProductModel $model, $id){

        $item = $model->load($id);

        //Check if record exists
        if(empty($item)) {
            throw new NotFoundException('Product with id ' . $id . ' not found');
        }

        return $item;
    }

    function delete(ProductModel $model, $id) {

        if(empty($model->load($id))) {
            throw new NotFoundException('Product with id ' . $id . ' not found');
        }

        return $model->delete($id);
    }

    function update(ProductModel $model, $id) {

        if(empty($model->load($id))) {
            throw new NotFoundException('Product with id ' . $id . ' not found');
        }

        $model->id = $id;
        $model->name = 'Name';
        $model->price = 300;
        $model->published = 1;

        return $model->save();
    }

    /**
     * Create product
     */
    function create(ProductModel $model){
        $data['name'] = "NewName";
        $data['price'] = 100;
        $data['published'] = 1;
        return $model->create($data);
    }
}