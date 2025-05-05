<?php

namespace App\Repository\Product;

use App\Models\Product;
use App\Repository\Product\ProductContract;

class ProductRepo implements ProductContract
{
    /**
     *
     * @param array $inputs
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function toCreate(array $inputs): \Illuminate\Database\Eloquent\Model
    {
        $product = Product::create($inputs);
        return $product;
    }

    /**
     *
     * @param array $inputs
     * @param mixed $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function toUpdate($id, array $inputs): \Illuminate\Database\Eloquent\Model
    {
        $product = $this->toGetById($id);
        $product->update($inputs);

        return $product;
    }

    /**
     *
     * @param mixed $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function toDelete($id): \Illuminate\Database\Eloquent\Model
    {
        $product = $this->toGetById($id);
        $product->delete();
        return $product;
    }

    /**
     *
     * @param mixed $n
     */
    public function toGetAll($n = 50)
    {
        $properties = Product::all()
            ->paginate($n);

        return $properties;
    }

    /**
     *
     * @param mixed $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function toGetById(int|string $id): \Illuminate\Database\Eloquent\Model
    {
        return Product::findOrFail($id);
    }
}