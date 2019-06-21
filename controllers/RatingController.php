<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class RatingController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
//                'only' => ['logout'],
                'rules' => [
                    [
//                        'actions' => ['logout'],
                        'allow' => true,
//                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    public $hiddenlayout = true;

    public function actionTest()
    {
            //,'"',"\\"
        $csv_parse = Yii::$app->cache->getOrSet('scv_parse', function () {
            $url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vSt1CxEqA0Er646zlN5uwDGhjvhYJBYgt0b5ALCUHqsNdbySCrKMYmAlgrIfwNvrJoQi5TsycIwBd8C/pub?gid=0&single=true&output=csv";
            $csv = file_get_contents($url);
            $csv_parse = str_getcsv($csv,"\n");
            return $csv_parse;
        }, 3600);

        $data_filter = [];
        $type = Yii::$app->request->get('type');
        $data = [];
        foreach ($csv_parse as $i=>$items) {
            if ($i == 0) continue;
            $item = explode(",", $items);
            $line = new \stdClass();

//            $line->id = $item[0];
//            $line->type = $item[1];
            $line->place = $item[2];
            $line->account_number = $item[3];
            $line->first_name = $item[4];
            $line->point = $item[5];

            $data_filter[$item[1]][] = $line;
        }

        if (is_null($type)) {
            $data['data'] = ['online' => isset($data_filter['online']) ? $data_filter['online'] : []];
        } else {
            if(array_key_exists($type, $data_filter)) {
                $this->hiddenlayout = false;
                $data['data'] = [$type => $data_filter[$type]];
            } else {
                return $this->redirect(['rating/']);
            }
        }

        return $this->render('//site/test', $data);
    }
}
