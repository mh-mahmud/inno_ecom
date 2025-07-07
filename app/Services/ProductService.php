<?php

namespace App\Services;
use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Helper;
use DB;

class ProductService
{
    public function productList($request)
    {
        /*$sql = Product::with('category')->query();
        $data = $request->all();
        if(!empty($data["search"])) {
            $sql->where('name','like', '%' . $data["search"] . '%');

        }
        if (isset($data['paginate']) && $data['paginate'] == false) {
            return  $sql->orderBy('id', 'DESC')->get();

        } else {
            return  $sql->orderBy('id', 'DESC')->paginate(config('constants.ROW_PER_PAGE'));

        }*/

        $sql = Product::with('category');
        $data = $request->all();

        if (!empty($data["search"])) {
            $sql->where('name', 'like', '%' . $data["search"] . '%');
        }

        if (isset($data['paginate']) && $data['paginate'] == false) {
            return $sql->orderBy('id', 'DESC')->get();
        } else {
            return $sql->orderBy('id', 'DESC')->paginate(config('constants.ROW_PER_PAGE'));
        }

    }

    public function productStore($request)
{
    $request->validate([
        'name' => 'required|max:191',
        'product_code' => 'required|max:20',
        'product_type' => 'required',
        'category_id' => 'required',
        'description' => 'required',
        'stock_quantity' => 'required|numeric',
        'img_path' => 'required|image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        'img_path_2' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        'img_path_3' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        'img_path_4' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        'img_path_5' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        'img_path_6' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        'product_cost' => ['nullable', 'numeric', 'regex:/^\d{1,11}(\.\d{1,2})?$/'],
        'product_value' => ['required', 'numeric', 'regex:/^\d{1,11}(\.\d{1,2})?$/'],
    ], [
        'product_cost.regex' => 'The product cost must have at most 11 digits before the decimal point and up to 2 digits after the decimal point.',
        'product_value.regex' => 'The product value must have at most 11 digits before the decimal point and up to 2 digits after the decimal point.',
    ]);

    $data = $request->all();

    $imageFields = ['img_path', 'img_path_2', 'img_path_3', 'img_path_4', 'img_path_5', 'img_path_6'];
    $uploadedImages = [];

    foreach ($imageFields as $field) {
        if ($request->hasFile($field)) {
            $file = $request->file($field);
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '_' . $field . '.' . $extension;
            $file->move(getcwd() . '/uploads/products', $fileNameToStore);
            $uploadedImages[$field] = $fileNameToStore;
        } else {
            $uploadedImages[$field] = null;
        }
    }

    try {
        return DB::transaction(function () use ($data, $uploadedImages) {
            $dataObj = new Product();
            $dataObj->name                  = $data['name'];
            $dataObj->product_code          = $data['product_code'];
            $dataObj->category_id           = $data['category_id'];
            $dataObj->brand_id              = $data['brand_id'] ?? null;
            $dataObj->product_type          = $data['product_type'];
            $dataObj->product_cost          = $data['product_cost'];
            $dataObj->product_value         = $data['product_value'];
            $dataObj->old_price             = $data['old_price'] ?? null;
            $dataObj->discount_price        = $data['discount_price'] ?? null;
            $dataObj->description           = $data['description'];
            $dataObj->key_features          = $data['key_features'] ?? null;
            $dataObj->club_point            = $data['club_point'] ?? null;
            $dataObj->product_specification = $data['product_specification'] ?? null;
            $dataObj->how_to_order          = $data['how_to_order'] ?? null;
            $dataObj->return_policy         = $data['return_policy'] ?? null;
            $dataObj->img_path              = $uploadedImages['img_path'];
            $dataObj->img_path_2            = $uploadedImages['img_path_2'];
            $dataObj->img_path_3            = $uploadedImages['img_path_3'];
            $dataObj->img_path_4            = $uploadedImages['img_path_4'];
            $dataObj->img_path_5            = $uploadedImages['img_path_5'];
            $dataObj->img_path_6            = $uploadedImages['img_path_6'];
            $dataObj->stock_status          = $data['stock_status'] ?? 'in_stock';
            $dataObj->stock_quantity        = $data['stock_quantity'];
            $dataObj->max_purchase_limit    = $data['max_purchase_limit'] ?? null;
            $dataObj->status                = $data['status'] ?? 1;
            $dataObj->product_tag           = $data['product_tag'] ?? null;
            $dataObj->created_by            = Auth::id();
            $dataObj->save();

            Helper::storeLog($data['name'], "Products", "Add Product {$data['name']}", "Added");

            return (object)[
                'status' => 201,
                'info'   => $dataObj->id
            ];
        });
    } catch (Exception $e) {
        return (object)[
            'status' => 424,
            'error'  => $e->getMessage()
        ];
    }
}


   public function productUpdate($request, $id)
{
    $request->validate([
        'name' => 'required|max:191',
        'product_code' => 'required|max:20',
        'product_type' => 'required',
        'category_id' => 'required',
        'description' => 'required',
        'stock_quantity' => 'required|numeric',
        'img_path' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        'img_path_2' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        'img_path_3' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        'img_path_4' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        'img_path_5' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        'img_path_6' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        'product_cost' => ['nullable', 'numeric', 'regex:/^\d{1,11}(\.\d{1,2})?$/'],
        'product_value' => ['required', 'numeric', 'regex:/^\d{1,11}(\.\d{1,2})?$/'],
    ], [
        'product_cost.regex' => 'The product cost must have at most 11 digits before the decimal point and up to 2 digits after the decimal point.',
        'product_value.regex' => 'The product value must have at most 11 digits before the decimal point and up to 2 digits after the decimal point.',
    ]);

    $data = $request->all();

    // Handle image uploads
    $imageFields = ['img_path', 'img_path_2', 'img_path_3', 'img_path_4', 'img_path_5', 'img_path_6'];
    $uploadedImages = [];

    foreach ($imageFields as $field) {
        if ($request->hasFile($field)) {
            $file = $request->file($field);
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '_' . $field . '.' . $extension;
            $file->move(getcwd() . '/uploads/products', $fileNameToStore);
            $uploadedImages[$field] = $fileNameToStore;
        }
    }

    try {
        return DB::transaction(function () use ($data, $uploadedImages, $id) {
            $dataObj = Product::findOrFail($id);

            $dataObj->name                  = $data['name'];
            $dataObj->product_code          = $data['product_code'];
            $dataObj->category_id           = $data['category_id'];
            $dataObj->brand_id              = $data['brand_id'] ?? $dataObj->brand_id;
            $dataObj->product_type          = $data['product_type'];
            $dataObj->product_cost          = $data['product_cost'];
            $dataObj->product_value         = $data['product_value'];
            $dataObj->old_price             = $data['old_price'] ?? $dataObj->old_price;
            $dataObj->discount_price        = $data['discount_price'] ?? $dataObj->discount_price;
            $dataObj->description           = $data['description'];
            $dataObj->key_features          = $data['key_features'] ?? $dataObj->key_features;
            $dataObj->club_point            = $data['club_point'] ?? $dataObj->club_point;
            $dataObj->product_specification = $data['product_specification'] ?? $dataObj->product_specification;
            $dataObj->how_to_order          = $data['how_to_order'] ?? $dataObj->how_to_order;
            $dataObj->return_policy         = $data['return_policy'] ?? $dataObj->return_policy;
            $dataObj->stock_status          = $data['stock_status'] ?? $dataObj->stock_status;
            $dataObj->stock_quantity        = $data['stock_quantity'];
            $dataObj->max_purchase_limit    = $data['max_purchase_limit'] ?? $dataObj->max_purchase_limit;
            $dataObj->status                = $data['status'] ?? $dataObj->status;
            $dataObj->product_tag           = $data['product_tag'] ?? $dataObj->product_tag;
            $dataObj->updated_by            = Auth::id();

            // Update only if file was uploaded
            foreach ($uploadedImages as $field => $filename) {
                $dataObj->$field = $filename;
            }

            $dataObj->save();

            Helper::storeLog($data['name'], "Products", "Update Product", "Updated");

            return (object)[
                'status' => 208,
                'info'   => $dataObj->id
            ];
        });
    } catch (Exception $e) {
        return (object)[
            'status' => 424,
            'error'  => $e->getMessage()
        ];
    }
}

    public function getProductById($id)
    {
        return Product::findOrFail($id);
    }

    public function productDelete($id)
    {
        try {
            return  DB::transaction(function () use ($id) {
                $data = Product::findOrFail($id);
                $data->delete();

                Helper::storeLog($data->name, "Products", "Delete Product", "Deleted");

                return (object)[
                    'status'                 => 200,
                ];

            });
        } catch (Exception $e) {
            return (object)[
                'status'             => 424,
                'error'              => $e->getMessage()
            ];
        }
    }
}