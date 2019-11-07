<?php
	namespace App\Models\Traits;
	
	use Illuminate\Support\Facades\Storage;

	trait FileStorage
	{
		/* 
		 * Upload file into Storage
		 *
		 * @return 
		**/
		public function saveFile($file, $path)
		{
			return Storage::disk('public')->put($path, $file);
		}

		public function fileNameMaker($ext)
		{
			return md5(str_random(16) . time()) . '.' . $ext;
		}

		/* 
		 * Delete file from the Storage
		 *
		 * @return 
		**/
		public function deleteFile()
		{
			Storage::disk('public')->delete($this->path);

			return $this;
		}

		/* 
		 * Convert base64 content to file.
		 *
		 * @return File $file 
		**/
		public static function base64ToFile($base64File)
        {
            list($type, $file) = explode(';', $base64File);
			list(, $file) = explode(',', $file);
			return base64_decode($file);
        }
	}
?>