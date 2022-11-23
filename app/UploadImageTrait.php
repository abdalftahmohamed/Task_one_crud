<?php

namespace App;

use Symfony\Component\HttpFoundation\Request;

trait UploadImageTrait
{
    public function uploadeimage(Request $request,$foldername){
        $image =$request->file('photo')->getClientOriginalName();
        $path =$request->file('photo')->storeAs($foldername,$image,'shahin');
        return $path;
    }
}
