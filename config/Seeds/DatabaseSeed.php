<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Text;

/**
 * Users seed.
 */
class DatabaseSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $ligaData = [];
        $ligasIds = [];
        for ($i = 0; $i < 3; $i++)
        {
            $id = Text::UUID();
            $ligaData[] = [
                'id' => $id,
                'nombre' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'deporte' => 'futbol',
                'fecha_inicio' => $faker->date("Y-m-d", '-2 years'),
                'fecha_fin'    => ($i > 1) ? null : $faker->date("Y-m-d", 'now'),
                'created'    => date("Y-m-d H:i:s"),
                'modified'   => date("Y-m-d H:i:s")
            ];
            $ligasIds[] = $id;
        }

        $table = $this->table('ligas');
        //$table->truncate();
        $table->insert($ligaData)->save();

        $equipoData = [];
        $equiposIds = [];
        for ($i = 0; $i < 15; $i++)
        {
            $id = Text::UUID();
            $equipoData[] = [
                'id' => $id,
                'nombre' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                'ciudad' => $faker->city(),
                'provincia' => $faker->country(),
                'liga_id' => $faker->randomElement($ligasIds),
                'created'    => date("Y-m-d H:i:s"),
                'modified'   => date("Y-m-d H:i:s")
            ];
            $equiposIds[] = $id;
        }

        $table = $this->table('equipos');
        //$table->truncate();
        $table->insert($equipoData)->save();

        $jugadorData = [];
        $jugadorsIds = [];
        for ($i = 0; $i < 50; $i++)
        {
            $id = Text::UUID();
            $jugadorData[] = [
                'id' => $id,
                'nombre' => $faker->firstName(),
                'apellido' => $faker->lastName(),
                'fecha_nacimiento' => $faker->date("Y-m-d"),
                'rating' => $faker->randomDigit(),
                'posicion' => $faker->randomElement(array("arquero", "defensor", "mediocampista", "delantero", "polifuncional")),
                'equipo_id' => $faker->randomElement($equiposIds),
                'esta_sancionado' => $faker->randomDigit(),
                'created'    => date("Y-m-d H:i:s"),
                'modified'   => date("Y-m-d H:i:s")
            ];
            $jugadorsIds[] = $id;
        }

        $table = $this->table('jugadors');
        //$table->truncate();
        $table->insert($jugadorData)->save();

    }
}