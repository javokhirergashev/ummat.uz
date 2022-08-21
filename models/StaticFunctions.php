<?php

namespace app\models;

use yii\helpers\FileHelper;

class StaticFunctions
{
    public static function getImage($tableName,$id,$image){
        return "/uploads/$tableName/$id/$image";
    }
    public static function saveImage($tableName,$modelId,$image){
        $DIR = "uploads/$tableName/$modelId/";
        FileHelper::createDirectory($DIR);
        $FILENAME = sha1(rand(0,10000).time().rand(0,10000).$image->basename);
        $FILENAME = $FILENAME . '.' .$image->extension;
        $image->saveAs($DIR . $FILENAME);
        return $FILENAME;
    }
    public static function deleteImage($tableName, $model, $oldimage){
        $file = "uploads/$tableName/$model->id/$oldimage";
        if (is_file($file)){
        unlink($file);
        }
    }
}