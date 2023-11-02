<?php

namespace app\controllers;

use Yii;
use Faker;
use app\models\Post;

class SeedController extends \yii\web\Controller
{
    public function actionIndex()
    {


        
          for($i=0;$i<10;$i++){

            $faker = Faker\Factory::create();
            $post = new Post;           
            $post->title = $faker->name;
            $post->body = $faker->country;
            $post->save();            
          }

          

        return $this->render('index');
    }

}
