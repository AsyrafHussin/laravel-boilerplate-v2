<?php

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

/**
 * Generate token.
 *
 * @param  int    - length token that want to generate
 *
 * @return string - token
 */
if (! function_exists('generateToken')) {
    function generateToken($length)
    {
        return bin2hex(random_bytes($length));
    }
}

/*
 * Save image
 *
 * @param object - image, string - folder name
 * @return string - image upload path
 */
if (! function_exists('saveImg')) {
    /**
     * @param $img
     */
    function saveImg($img, $folder = 'images')
    {
        return 'storage/' . $img->store($folder);
    }
}

/*
 * Remove image
 *
 * @param string - image path
 * @return void
 */
if (! function_exists('removeImg')) {
    /**
     * @param $img
     */
    function removeImg($img)
    {
        $img = str_replace('storage/', '', $img);
        if (file_exists(storage_path('app/public/') . $img)) {
            unlink(storage_path('app/public/') . $img);
        }
    }
}

/*
 * Custom paginate for collection
 *
 * @return void
 */
if (!function_exists('customPaginate')) {

    function customPaginate($items, $path = null, $perPage = 20, $page = null) {
        $path = $path ? $path : Paginator::resolveCurrentPage();
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, [
            'path' => $path,
            'pageName' => 'page',
        ]);
    }
}
