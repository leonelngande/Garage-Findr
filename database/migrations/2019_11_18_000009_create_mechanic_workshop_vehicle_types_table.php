<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMechanicWorkshopVehicleTypesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'mechanic_workshop_vehicle_types';

    /**
     * Run the migrations.
     * @table mechanic_workshop_vehicle_types
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('vehicle_type_id');
            $table->unsignedBigInteger('mechanic_workshop_id');

            $table->index(["mechanic_workshop_id"], 'fk_vehicle_types_has_mechanic_workshop_mechanic_workshop1_idx');

            $table->index(["vehicle_type_id"], 'fk_vehicle_types_has_mechanic_workshop_vehicle_types1_idx');

            $table->primary(['vehicle_type_id', 'mechanic_workshop_id'], 'mechanic_workshop_vehicle_types_primary');

            $table->foreign('vehicle_type_id', 'fk_vehicle_types_has_mechanic_workshop_vehicle_types1_idx')
                ->references('id')->on('vehicle_types')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('mechanic_workshop_id', 'fk_vehicle_types_has_mechanic_workshop_mechanic_workshop1_idx')
                ->references('id')->on('mechanic_workshops')
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
