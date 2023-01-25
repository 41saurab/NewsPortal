<?php

function uploadImage($request, $object, $fileName)
{
    if ($request->hasFile($fileName)) {
        $file = $request->image;
        $newName = time() . '-' . $file->getClientoriginalExtension();
        $file->move("images", $newName);
        $object->$fileName = "images/$newName";
    }
}
