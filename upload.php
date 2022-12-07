<?php
class Upload {
    //上传一个文件
    /*
    <form action="upload.php" enctype="multipart/form-data" method="post">
    <input type="file" name="image" /> <br>
    <input type="submit" name="upload" value="上传" />
    </form>
    */
    //从name="image"的控件中上传图片到"upload"文件夹中，返回文件路径
    //$savename=Util::image_upload('image','upload');
    public static function image_upload($image_name, $upload_dir)
    {
        if($_FILES[$image_name]['error']>0)	//判断上传是否出错
            echo "错误:".$_FILES[$image_name]['error'];

        else{
            $tmp_filename=$_FILES[$image_name]['tmp_name'];
            $filename=$_FILES[$image_name]['name'];
            $dir=$upload_dir."/";
            if(is_uploaded_file($tmp_filename)){
                //上传并移动文件
                if(move_uploaded_file($tmp_filename, "$dir$filename")){
//                    echo "uploaded!";
//                    echo "file size=".($_FILES[$image_name]['size']/1024)."KB";
//                    return $filename;
                }else
                    echo "error, tmp_filename=".$tmp_filename;
            }
        }
        return "";
    }
}

?>
