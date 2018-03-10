<?php
namespace App\Http\Traits\V1;

use App\Models\Ambulance;
use App\Models\AmbulanceLocation;
use App\Models\Operator;
use Illuminate\Contracts\Logging\Log;
use Mockery\CountValidator\Exception;

trait InventoryTraits{

    public function getOperatorList($hospital_id){
        return Operator::where('hospital_id',$hospital_id)->select('id')->get();
    }

    public function getAmbulance($Operator_array){
        $Operator_Ids = '';
        if(is_object($Operator_array)){
           foreach($Operator_array as $Operator){
               $Operator_Ids[] = $Operator->id;
           }
        }else{
            $Operator_Ids = (array)$Operator_array;
        }
       return (Ambulance::where('belongs_to',2)->whereIn('owner_id',$Operator_Ids)->get());
    }

    public function lastLocation($operator_array){
        $operator_ids = '';
        if(is_object($operator_array)){
            $operator_ids = $operator_array;
        }else{
            $operator_ids = (array) $operator_array;
        }
       return (AmbulanceLocation::whereIn('operator_id',$operator_ids)->get());
    }

    public function ambulanceDetails($ambulace_Id){
          return Ambulance::find($ambulace_Id);
    }

}