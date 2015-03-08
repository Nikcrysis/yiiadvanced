<?php
/**
 * Created by PhpStorm.
 * User: Gev
 * Date: 08.03.15
 * Time: 3:36
 */

namespace frontend\controllers;

use frontend\models\CountrySearchForm;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Country;
use Yii;
use frontend\models\CountrySearchFormo;
use yii\db\mssql\QueryBuilder;

class CountryController extends Controller {
    public function actionIndex() {
        $query = Country::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->OrderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    public function actionSearch() {
        $model = new CountrySearchForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $query = Country::find();
            if (empty($model->string)) {
                $countries = $query->orderBy('population')->all();
            }
            else {
                $countries = $query->where(array('LIKE','name',  $model->string ,))->orderBy('population')->all();
            }

            return $this->render('search-result', ['model' => $model, 'countries' => $countries]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('search', ['model' => $model]);
        }


    }
} 