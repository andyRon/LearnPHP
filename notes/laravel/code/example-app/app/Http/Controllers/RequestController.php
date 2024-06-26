<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RequestController extends Controller
{
    public function formPage()
    {
        phpinfo();
        return view('request.form');
    }

    public function fileUpload(Request $request)
    {
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            if (!$picture->isValid()) {
                abort(400, '无效的上传文件');
            }

            $extension = $picture->getClientOriginalExtension();
            $fileName = $picture->getClientOriginalName();
            $newFileName = md5($fileName . time() . mt_rand(1, 10000)) . '.' . $extension;
            $savePath = 'images/' . $newFileName;
            $webPath = '/storage/' . $savePath;

            if (Storage::disk('public')->has($savePath)) {
                return response()->json(['path' => $webPath]);
            }

            if ($picture->storePubliclyAs('images', $newFileName, ['disk' => 'public'])) {
                return response()->json(['path' => $webPath]);
            }
            abort(500, '文件上传失败');
        } else {
            abort(400, '请选择要上传的文件');
        }
    }
}
