<?php
    namespace App\Models\Traits;

	use Illuminate\Support\Facades\Auth;
	use Illuminate\Database\Eloquent\SoftDeletes as EloquentSoftDeletes;

    trait SoftDeletes
    {
		use EloquentSoftDeletes;
		
        public function delete()
        {
            // invoke parent method
			parent::delete();
			
			$this->deleted_by = Auth::id();
			
            $this->save();
        }
    }
?>
