<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->delete();

        $question_location = new Question([
        	'id' => 1,
            'name' => 'Waar is uw bedrijf gevestigd?',
            'slug' => 'location',
        ]);
        $question_location->save();

        $question_locationtype = new Question([
        	'id' => 2,
            'name' => 'Is het bedrijf gevestigd op of in een: ',
            'slug' => 'locationtype',
        ]);
        $question_locationtype->save();

        $question_employeecount = new Question([
        	'id' => 3,
            'name' => 'Hoeveel mensen werken er in dit bedrijf?',
            'slug' => 'employeecount',
        ]);
        $question_employeecount->save();

        $question_employeeorigin = new Question([
        	'id' => 4,
            'name' => 'Hoe ver wonen de medewerkers van het bedrijf?',
            'slug' => 'employeeorigin',
        ]);
        $question_employeeorigin->save();

        $question_employeemobility = new Question([
        	'id' => 5,
            'name' => 'Hoe komen de medewerkers naar het werk?',
            'slug' => 'employeemobility',
        ]);
        $question_employeemobility->save();

        $question_inhousemobility = new Question([
        	'id' => 6,
            'name' => 'Hebben jullie bedrijfsauto’s?',
            'slug' => 'inhousemobility',
        ]);
        $question_inhousemobility->save();

        $question_electricmobility = new Question([
        	'id' => 7,
            'name' => 'Rijden jullie al elektrisch?',
            'slug' => 'electricmobility',
        ]);
        $question_electricmobility->save();
    }
}
