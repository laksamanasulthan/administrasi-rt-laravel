<?php

namespace App\Services;

use Illuminate\Support\Str;

class FileUploadServices
{
    public function upload($file)
    {
        $fileName = Str::random(10) . '_' . $file->getClientOriginalName();
        $destination = 'id_card';
        $file->move_uploaded_file($fileName, $destination);

        return $fileName;
    }
}
