<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMechanicWorkshopsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'mechanic_workshops';

    /**
     * Run the migrations.
     * @table mechanic_workshops
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name', 191);
            $table->string('address', 191)->nullable();
            $table->unsignedBigInteger('quarter_id');

            $table->index(["quarter_id"], 'fk_mechanic_workshops_quarters1_idx');


            $table->foreign('quarter_id', 'fk_mechanic_workshops_quarters1_idx')
                ->references('id')->on('quarters')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
