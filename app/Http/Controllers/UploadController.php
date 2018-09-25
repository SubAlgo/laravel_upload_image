<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as Input;


class UploadController extends Controller {

	public function upload(){

		if(Input::hasFile('file')){

            echo 'Uploaded <br>';
            
            $file = Input::file('file');
            //เอาไฟล์ที่อัพโหลด ไปเก็บไว้ที่ public/uploads/ชื่อไฟล์เดิม
			$file->move('uploads', $file->getClientOriginalName());
			echo "<img src='uploads/{$file->getClientOriginalName()}'>";
		}

	}
}

