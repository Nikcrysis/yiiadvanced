<?php
/**
 * Created by PhpStorm.
 * User: Gev
 * Date: 08.03.15
 * Time: 2:23
 */

namespace frontend\models;


use yii\base\Model;

class EntryForm extends Model{
    public $name;
    public $password;
    public $password1;
    public function rules() {
        return [
            [['name', 'password'],'required'],
        ];
    }


} 