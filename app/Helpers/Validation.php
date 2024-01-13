<?php
    namespace App\Helpers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class Validation{
        public static function validate_date(Request $request){
            $request = Validator::make($request->all(), [
                'name' => "required|max:255",
                'user_id' => "required",
                'email' => "required"
            ]);
            if($request->fails()){
                echo "Data tidak sah";
            }
            else{
                echo "Data divalidasi";
            }
        }
    }
?>