<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Image;
class Products extends Model
{
    public static function getAll()
    {
        $data = DB::table('products')->get();
        return $data;
    }
    public static function postCreate($data)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $id= DB::table('products')->insertGetId([
            'code' => $data->code,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        if ($data->hasFile('image')) {
            //filename to store
            $filenametostore = $id . '_product.png';
            //Upload File
            $data->file('image')->storeAs('public/products', $filenametostore);
            $data->file('image')->storeAs('public/products/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/products/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(400, 150, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($thumbnailpath);
            DB::table('products')
                ->where('id', $id)
                ->update([
                    'image' => 'public/storage/products/' . $filenametostore,
                    'image_thumbnail' => 'public/storage/products/thumbnail/' . $filenametostore,
                ]);
        }
        return 200;
    }
}
