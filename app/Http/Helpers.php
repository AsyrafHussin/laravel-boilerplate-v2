<?php

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

if (! function_exists('generateToken')) {
    /**
     * Generate token.
     *
     * @param int - length token that want to generate
     *
     * @return string - token
     */
    function generateToken($length)
    {
        return bin2hex(random_bytes($length));
    }
}

if (! function_exists('saveImg')) {
    /**
     * Save image.
     *
     * @param object - image
     * @param string - folder name
     *
     * @return string - image upload path
     */
    function saveImg($img, $folder = 'images')
    {
        return 'storage/'.$img->store($folder);
    }
}

if (! function_exists('removeImg')) {
    /**
     * Remove image.
     *
     * @param string - image path
     *
     * @return void
     */
    function removeImg($img)
    {
        $img = str_replace('storage/', '', $img);
        if (file_exists(storage_path('app/public/').$img)) {
            unlink(storage_path('app/public/').$img);
        }
    }
}

if (! function_exists('customPaginate')) {
    /**
     * Custom paginate for collection.
     *
     * @return Illuminate\Pagination\LengthAwarePaginator
     */
    function customPaginate($items, $path = null, $perPage = 20, $page = null)
    {
        $path = $path ? $path : Paginator::resolveCurrentPage();
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, [
            'path'     => $path,
            'pageName' => 'page',
        ]);
    }
}
