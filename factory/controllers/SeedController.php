<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\Student;
use Faker;

class SeedController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $faker = Faker\Factory::create();        

     for($i=0;$i<10;$i++){
        $student = new Student;
        $student->name = $faker->name;
        $student->phone = $faker->phoneNumber; 
        $student->address = $faker->address;    
        $student->save();
     }
    
        return $this->render('index');
    }

}
