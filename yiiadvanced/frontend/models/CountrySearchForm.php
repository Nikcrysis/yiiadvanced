<?php
/**
 * Created by PhpStorm.
 * User: Gev
 * Date: 08.03.15
 * Time: 4:04
 */

namespace frontend\models;


use yii\base\Model;

class CountrySearchForm extends Model{
    public $string;
    public function rules(){
        return [
            [["string"], "string"]
        ];
    }
} 