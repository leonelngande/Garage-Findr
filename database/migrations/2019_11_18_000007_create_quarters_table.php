<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuartersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'quarters';

    /**
     * Run the migrations.
     * @table quarters
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name', 191);
            $table->unsignedBigInteger('subdivision_id');

            $table->index(["subdivision_id"], 'fk_quarters_subdivisions1_idx');


            $table->foreign('subdivision_id', 'fk_quarters_subdivisions1_idx')
                ->references('id')->on('subdivisions')
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
