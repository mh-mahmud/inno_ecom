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
        $sql = Product::query();
        $data = $request->all();
        if(!empty($data["search"])) {
            $sql->where('name','like', '%' . $data["search"] . '%');

        }
        if (isset($data['paginate']) && $data['paginate'] == false) {
            return  $sql->orderBy('id', 'DESC')->get();

        } else {
            return  $sql->orderBy('id', 'DESC')->paginate(config('constants.ROW_PER_PAGE'));

        }
    }

    public function productStore($request)
    {

        $request->validate([
            'name' => 'required|unique:products|max:191',
            'product_code' => 'required|max:20',
            'product_type' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'stock_quantity' => 'required|numeric',
            'img_path' => 'required|image|mimes:avif,jpeg,png,jpg,gif,webp|max:1048',
            'img_path_2' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:1048',
            'img_path_3' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:1048',
            'img_path_4' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:1048',
            'img_path_5' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:1048',
            'img_path_6' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:1048',
            'product_cost' => [
                'nullable',
                'numeric',
                'regex:/^\d{1,11}(\.\d{1,2})?$/'
            ],
            'product_value' => [
                'required',
                'numeric',
                'regex:/^\d{1,11}(\.\d{1,2})?$/'
            ],
        ], [
            'product_cost.regex' => 'The product cost must have at most 11 digits before the decimal point and up to 2 digits after the decimal point.',
            'product_value.regex' => 'The product value must have at most 11 digits before the decimal point and up to 2 digits after the decimal point.',
        ]);
        $data = $request->all();


        // upload main image
        $fileNameToStore = '';
        if ($request->hasFile('img_path')) {
            $fileNameWithExt = $request->file('img_path')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img_path')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $request->file('img_path')->move(getcwd().'/uploads/products', $fileNameToStore);
        }

        // upload image 2
        // $fileNameToStore = '';
        // if ($request->hasFile('img_path')) {
        //     $fileNameWithExt = $request->file('img_path')->getClientOriginalName();
        //     $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('img_path')->getClientOriginalExtension();
        //     $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        //     $request->file('img_path')->move(getcwd().'/uploads/products', $fileNameToStore);
            
        // }

        try {
            return  DB::transaction(function () use ($data, $fileNameToStore) {
                $dataObj                        = new Product();
                $dataObj->name                  = $data['name'];
                $dataObj->product_code          = $data['product_code'];
                $dataObj->category_id           = $data['category_id'];
                $dataObj->brand_id              = $data['brand_id'];
                $dataObj->product_type          = $data['product_type'];
                $dataObj->product_cost          = $data['product_cost'];
                $dataObj->product_value         = $data['product_value'];
                $dataObj->discount_price         = $data['discount_price'];
                $dataObj->description           = $data['description'];
                $dataObj->product_specification = $data['product_specification'];
                $dataObj->img_path              = $fileNameToStore;
                $dataObj->stock_status          = $data['stock_status'];
                $dataObj->stock_quantity        = $data['stock_quantity'];
                $dataObj->max_purchase_limit    = $data['max_purchase_limit'];
                $dataObj->status                = $data['status'];
                $dataObj->created_by            = Auth::id();
                $dataObj->save();

                Helper::storeLog($data['name'], "Products", "Add Product {$data['name']}", "Added");

                return (object)[
                    'status'                 => 201,
                    'info'                   => $dataObj->id
                ];
            });
        } catch (Exception $e) {
            dd($e->getMessage());
            return (object)[
                'status'             => 424,
                'error'              => $e->getMessage()
            ];
        }
    }

    public function productUpdate($request, $id)
    {

        $request->validate([
            'name' => 'required|unique:products,name,' . $request->id,
            'product_code' => 'required|max:20',
            'product_type' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'stock_quantity' => 'required|numeric',
            'img_path' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:1048',
            'img_path_2' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:1048',
            'img_path_3' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:1048',
            'img_path_4' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:1048',
            'img_path_5' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:1048',
            'img_path_6' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:1048',
            'product_cost' => [
                'nullable',
                'numeric',
                'regex:/^\d{1,11}(\.\d{1,2})?$/'
            ],
            'product_value' => [
                'required',
                'numeric',
                'regex:/^\d{1,11}(\.\d{1,2})?$/'
            ],
        ], [
            'product_cost.regex' => 'The product cost must have at most 11 digits before the decimal point and up to 2 digits after the decimal point.',
            'product_value.regex' => 'The product value must have at most 11 digits before the decimal point and up to 2 digits after the decimal point.',
        ]);


        $data = $request->all();
        $fileNameToStore = '';
        if ($request->hasFile('img_path')) {
            $fileNameWithExt = $request->file('img_path')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img_path')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $request->file('img_path')->move(getcwd().'/uploads/products', $fileNameToStore);
            
        } 

        try {
            return  DB::transaction(function () use ($data, $fileNameToStore, $request, $id) {
                $dataObj                        = Product::findOrFail($id);;
                $dataObj->name                  = $data['name'];
                $dataObj->product_code          = $data['product_code'];
                $dataObj->category_id           = $data['category_id'];
                $dataObj->brand_id              = $data['brand_id'];
                $dataObj->product_type          = $data['product_type'];
                $dataObj->product_cost          = $data['product_cost'];
                $dataObj->product_value         = $data['product_value'];
                $dataObj->discount_price         = $data['discount_price'];
                $dataObj->description           = $data['description'];
                $dataObj->product_specification = $data['product_specification'];
                $dataObj->img_path              = $request->hasFile('img_path') ? $fileNameToStore : $dataObj->img_path;
                $dataObj->stock_status          = $data['stock_status'];
                $dataObj->stock_quantity        = $data['stock_quantity'];
                $dataObj->max_purchase_limit    = $data['max_purchase_limit'];
                $dataObj->status                = $data['status'];
                $dataObj->updated_by            = Auth::id();
                $dataObj->save();
                Helper::storeLog($data['name'], "Products", "Update Product", "Updated");

                return (object)[
                    'status'                 => 208,
                    'info'                   => $dataObj->id
                ];
            });


        } catch (Exception $e) {
            dd($e->getMessage());
            return (object)[
                'status'             => 424,
                'error'              => $e->getMessage()
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