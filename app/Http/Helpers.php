<?php

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
        if (file_exists(storage_path('app/') . $img)) {
            unlink(storage_path('app/') . $img);
        }
    }
}
