<?php

use Illuminate\Database\Seeder;
use App\Model\Movie;
use App\Model\Actor;
use Illuminate\Support\Arr;
class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            ['title'=> 'Sonic 2', 'img'=> 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS1wBCWGMTDGJcO63CSXFz6y0hSFGnMoKkB0R1u7MaTI3nnpXpa', 'description' => 'Ancora una volta Sonic si trova a dover fermare i piani del perfido Dr. Robotnik, che nel frattempo è ritornato sulla Terra con un nuovo alleato, il guerriero echidna Knuckles.', 'release_date'=>'7 aprile 2022', 'price' => '20.99', 'available' =>'1'],
            ['title'=> 'Morbius', 'img'=> 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ3yucYH-5AVj_yRXCJo2Qmx9Cttwi56Bw4dwpTHpqg_-RpNBP3', 'description' => 'Il biochimico Michael Morbius sta cercando di curarsi da una rara malattia del sangue. Tuttavia, durante i suoi esperimenti, si infetta inavvertitamente con una forma di vampirismo.', 'release_date'=>'31 marzo 2022', 'price' => '35.99', 'available' =>'1'],
            ['title'=> 'Troppo cattivi', 'img'=> 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSPr7x5B43L3i_qHusYt-3_5vt1v23ai5C20pEdB05y_5Zbiqva', 'description' => 'Troppo cattivi è un film d\'animazione del 2022 prodotto dalla DreamWorks Animation e Scholastic e diretto da Pierre Perifel. La pellicola è basata sull\'omonima serie di libri del scrittore australiano Aaron Blabey.', 'release_date'=>'31 marzo 2022', 'price' => '29.99', 'available' =>'0'],
            ['title'=> 'The Batman', 'img'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY2IpT2RIwhuadAq4l2YE0K9pgMkILD4pZy9pmjLK311h7Lfru', 'description' => 'Dal celebre fumetto, le avventurose vicende di Batman, il supereroe che combatte il crimine indossando un costume da pipistrello, mentre è alla costante ricerca dei segreti del suo passato.', 'release_date'=>'3 marzo 2022', 'price' => '19.99', 'available' =>'1'],
            ['title'=> 'Uncharted', 'img'=> 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTcDX5WHCPrZcKzs4ad-62k27akzmEXGEdP3aqWeo6psye0X7g9', 'description' => 'Nathan Drake e il suo compagno di avventure Sully si lanciano in una pericolosa ricerca per trovare il più grande tesoro perduto, mentre seguono anche gli indizi che potrebbero portare al fratello di Nathan, scomparso da tempo.', 'release_date'=>'17 febbraio 2022', 'price' => '9.99', 'available' =>'0'],
            ['title'=> 'Ambulance', 'img'=> 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRasRSmrQO3g_lZ3Wt3deVgVr96mrdJlJtspaYYWR31Y1G9riSB', 'description' => 'Una coppia di ladri cerca di mettere a segno una rapina in banca nel pieno centro di Los Angeles. Quando il colpo va male, i due decidono di dirottare un\'ambulanza per tentare di fuggire.', 'release_date'=>'23 marzo 2022', 'price' => '32.99', 'available' =>'1'],
            ['title'=> 'Il lupo e il leone', 'img'=> 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTmC21PJh4ttf48smWh0_zRyntlIWGxGBM-7PnbmAaMhGwNMRb_', 'description' => 'La morte del nonno, riporta Alma tra i boschi canadesi in cui ha trascorso l\'infanzia. Qui incontra la femmina di lupo artico a cui il nonno era solito offrire ospitalità.', 'release_date'=>'20 gennaio 2022', 'price' => '7.99', 'available' =>'0'],
        ];
        
        $actor_ids = Actor::pluck('id')->toArray();

        foreach($movies as $movie){
            $new_movie = new Movie();
            $new_movie->actor_id = Arr::random($actor_ids);
            $new_movie->fill($movie);
            $new_movie->save();
        }
    }
}
