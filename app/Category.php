<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    /**
     *  get all category data and display 
     */
    public function getAllCategory()
    {
        return Category::withTrashed()->get();
    }

    /**
     * storing category
     */
    public function storeCategory(array $data)
    {
        $create = new Category();
        $create->name = $data['name'];
        $create->description = $data['description'];
        $created = $create->save();
        if ($created) {
            return $created;
        }
    }

    /**
     * get category data for request category id
     */
    public function editCategory($id)
    {
        return Category::where('id', $id)->first();
    }

    /**
     * update category
     */
    public function updateCategory(array $data)
    {
        $update = Category::find($data['id']);
        $update->name = $data['name'];
        $update->description = $data['description'];
        $update->save();
        if ($update) {
            return $update;
        }
    }

    /**
     * soft delete category
     */
    public function deleteCategory($id)
    {
        $delete = Category::find($id);
        $deleted = $delete->delete();
        if ($deleted) {
            return $deleted;
        }
    }

    /**
     * restore deleted category
     */
    public function restoreCategory($id)
    {
        $restored =  Category::where('id', $id)->restore();
        if ($restored) {
            return $restored;
        }
    }
}
