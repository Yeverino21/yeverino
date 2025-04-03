use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperheroesSeeder extends Seeder
{
    public function run()
    {
        DB::table('superheroes')->insert([
            [
                'name' => 'Spider-Man',
                'universe_id' => 1,  // Ajusta según tu tabla de universos
                'gender_id' => 1,    // Ajusta según tu tabla de géneros
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Batman',
                'universe_id' => 2,
                'gender_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

