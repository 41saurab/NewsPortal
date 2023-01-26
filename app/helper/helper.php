<?php

function uploadImage($request, $object, $fileName)
{
    if ($request->hasFile($fileName)) {
        $file = $request->$fileName;
        $newName = time() . "." . $file->getClientOriginalExtension();
        $file->move("images", $newName);
        $object->$fileName = "images/$newName";
    }
}
