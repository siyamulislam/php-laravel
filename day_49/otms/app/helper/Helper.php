<?php


namespace App\helper;


use function League\Flysystem\move;

class Helper
{
    public static function uploadFile($fileObject,$directory ,$exitFileUrl=null){
        if($fileObject){
            if ($exitFileUrl){
                unlink($exitFileUrl);
            }
            $fileName=time().'-'.rand(10,1000).'_'.$fileObject->getClientOriginalName();
            $fileDirectory='admin/assets/images/upload-images/'.$directory.'/';
            $fileObject->move($fileDirectory,$fileName);
            $fileUrl=$fileDirectory.$fileName ;
        }
        else{
            if($exitFileUrl){
                $fileUrl=$exitFileUrl;
            }
            else{
                $fileUrl=null;
            }
        }

        return $fileUrl;

    }

}
