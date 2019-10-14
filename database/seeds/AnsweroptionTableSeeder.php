<?php

use App\Answeroption;
use Illuminate\Database\Seeder;

class AnsweroptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answeroptions')->delete();

        $answer_bev = new Answeroption([
            'name' => 'Beverwijk',
            'slug' => 'beverwijk',
            'question_id' => 1,
        ]);
        $answer_bev->save();

        $answer_vels = new Answeroption([
            'name' => 'Velsen',
            'slug' => 'velsen',
            'question_id' => 1,
        ]);
        $answer_vels->save();

        $answer_heems = new Answeroption([
            'name' => 'Heemskerk',
            'slug' => 'heemskerk',
            'question_id' => 1,
        ]);
        $answer_heems->save();

        $answer_buiten = new Answeroption([
            'name' => 'Buiten de regio',
            'slug' => 'buiten de regio',
            'question_id' => 1,
        ]);
        $answer_buiten->save();

        $answer_bedrijven = new Answeroption([
            'name' => 'Bedrijventerrein',
            'slug' => 'bedrijventerrein',
            'question_id' => 2,
        ]);
        $answer_bedrijven->save();

        $answer_centrumwinkel = new Answeroption([
            'name' => 'Centrum / winkelgebied',
            'slug' => 'centrum / winkelgebied',
            'question_id' => 2,
        ]);
        $answer_centrumwinkel->save();

        $answer_recreatie = new Answeroption([
            'name' => 'Recreatiegebied',
            'slug' => 'recreatiegebied',
            'question_id' => 2,
        ]);
        $answer_recreatie->save();


        $answer_fam = new Answeroption([
            'name' => 'Wij zijn net een familie: 1-10 personen',
            'slug' => '1-10',
            'question_id' => 3,
        ]);
        $answer_fam->save();


        $answer_kleinfijn = new Answeroption([
            'name' => 'Wij zijn klein, maar fijn: 11-50 personen',
            'slug' => '11-50',
            'question_id' => 3,
        ]);
        $answer_kleinfijn->save();


        $answer_mkb = new Answeroption([
            'name' => 'Wij horen nog bij het MKB: 51-250 personen',
            'slug' => '51-250',
            'question_id' => 3,
        ]);
        $answer_mkb->save();


        $answer_veel = new Answeroption([
            'name' => 'Wij zijn met veel: > 250 personen',
            'slug' => '250+',
            'question_id' => 3,
        ]);
        $answer_veel->save();


        $answer_omdehoek = new Answeroption([
            'name' => 'Bijna om de hoek: 5-10km',
            'slug' => 'uptofive',
            'question_id' => 4,
            'minimum' => 1,
        ]);
        $answer_omdehoek->save();


        $answer_dichtbij = new Answeroption([
            'name' => 'Lekker dichtbij: 5-10km',
            'slug' => 'fivetoten',
            'question_id' => 4,
            'minimum' => 1,
        ]);
        $answer_dichtbij->save();


        $answer_watverder = new Answeroption([
            'name' => 'Wel wat verder weg: 11-20km',
            'slug' => 'eleventotwenty',
            'question_id' => 4,
            'minimum' => 1,
        ]);
        $answer_watverder->save();


        $answer_flinkeind = new Answeroption([
            'name' => 'Een flink eind: >20km',
            'slug' => 'morethantwenty',
            'question_id' => 4,
            'minimum' => 1,
        ]);
        $answer_flinkeind->save();


        $answer_gezond = new Answeroption([
            'name' => 'Supergezond op de fiets',
            'slug' => 'fiets',
            'question_id' => 5,
            'minimum' => 1,
        ]);
        $answer_gezond->save();


        $answer_openbaar = new Answeroption([
            'name' => 'Met het openbaar vervoer of met bedrijfsvervoer',
            'slug' => 'openbaarvervoer',
            'question_id' => 5,
            'minimum' => 1,
        ]);
        $answer_openbaar->save();


        $answer_auto = new Answeroption([
            'name' => 'Met de auto',
            'slug' => 'auto',
            'question_id' => 5,
            'minimum' => 1,
        ]);
        $answer_auto->save();


        $answer_poolautos = new Answeroption([
            'name' => 'We hebben poolauto’s (personenauto’s) om naar afspraken te gaan',
            'slug' => 'poolautos',
            'question_id' => 6,
        ]);
        $answer_poolautos->save();


        $answer_bestelbusjes = new Answeroption([
            'name' => 'We hebben bestelbusjes om onze klanten te bezoeken of onze producten mee te bezorgen',
            'slug' => 'bestelbusjes',
            'question_id' => 6,
        ]);
        $answer_bestelbusjes->save();


        $answer_vrachtwagens = new Answeroption([
            'name' => 'We rijden de regio in en uit met vrachtwagens',
            'slug' => 'vrachtwagens',
            'question_id' => 6,
        ]);
        $answer_vrachtwagens->save();


        $answer_ebike = new Answeroption([
            'name' => 'Er komen medewerkers op de e-bike, als je dat bedoelt',
            'slug' => 'ebike',
            'question_id' => 7,
        ]);
        $answer_ebike->save();


        $answer_electrisch = new Answeroption([
            'name' => 'Een enkeling heeft een elektrische auto',
            'slug' => 'electrischeauto',
            'question_id' => 7,
        ]);
        $answer_electrisch->save();


        $answer_poolautios = new Answeroption([
            'name' => 'Jazeker, we stimuleren dat en ook onze poolauto’s zijn elektrisch',
            'slug' => 'poolautos',
            'question_id' => 7,
        ]);
        $answer_poolautios->save();


        $answer_nietecht = new Answeroption([
            'name' => 'Nog niet echt, maar we willen dat wel meer gaan doen',
            'slug' => 'nognietecht',
            'question_id' => 7,
        ]);
        $answer_nietecht->save();
    }
}
