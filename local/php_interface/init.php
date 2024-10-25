<?

/** Конвертация картинок в WEBp */
function makeWebp ($src) {
    $newImgPath = false;

    if ($src && function_exists('imagewebp')) {
        $newImgPath = str_replace(array('.jpg', '.JPG', '.jpeg', '.gif', '.png'), '.webp', $src);

        if (!file_exists($_SERVER['DOCUMENT_ROOT'].$newImgPath)) {
            $info = getimagesize($_SERVER['DOCUMENT_ROOT'].$src);

            if ($info !== false && ($type = $info[2])) {
                switch ($type) {
                    case IMAGETYPE_JPEG:
                        $newImg = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'].$src);
                        break;

                    case IMAGETYPE_GIF:
                        $newImg = imagecreatefromgif($_SERVER['DOCUMENT_ROOT'].$src);
                        break;

                    case IMAGETYPE_PNG:
                        $newImg = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'].$src);
                        break;
                }

                if ($newImg) {
                    imagewebp($newImg, $_SERVER['DOCUMENT_ROOT'].$newImgPath, 80);
                    imagedestroy($newImg);
                }
            }
        }
    }

    return $newImgPath;
}
