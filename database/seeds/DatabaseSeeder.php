<?php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @var array
     */
    private $tables = [
        'countries', 'roles', 'users'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->cleanDatabase();
        $this->call('CountriesTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('UsersTableSeeder');

        Model::reguard();
    }

    /**
     * Cleans the database tables
     */
    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $tableName) {
            DB::table($tableName)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
