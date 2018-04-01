<?php
namespace App\Models;
use Mindk\Framework\DB\DBOConnectorInterface;
use Mindk\Framework\Models\Model;
use Mindk\Framework\DI\Service;
/**
 * Class ProductModel
 *
 * @package App\Models
 */
class ProductModel extends Model
{
    protected $tableName = 'products';
}