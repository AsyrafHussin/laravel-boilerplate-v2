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
    function saveImg($img, $folder = 'img/upload')
    {
        $imgName         = date('mdYHis') . '.' . uniqid() . '.' . $img->getClientOriginalName();
        $destinationPath = public_path('/' . $folder);
        $img->move($destinationPath, $imgName);

        return $folder . '/' . $imgName;
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
        if (file_exists(public_path('/') . $img)) {
            unlink(public_path('/') . $img);
        }
    }
}
