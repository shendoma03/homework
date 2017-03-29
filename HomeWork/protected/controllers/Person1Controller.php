<?php

class Person1Controller extends Controller
{
	public function actionIndex()

	{



        $person1 = Person1::model()->findAll();
        $interest = Interest::model()->findAll();

        echo "<h1>Sample many to many relationship</h1>";
        foreach($person1 as $person)
        {

            echo "My name is ".$person->name. " ";
            echo "And my hobbies are ";
            foreach ($person->interests as $interest){

                echo " ".$interest->interest.",";
            }
            echo "<br>";

        }


    }


	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}