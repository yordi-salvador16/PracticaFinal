<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateRecintoss extends Migration{
	public function up(){ 
 		Schema::create('recintoss', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->string('nombre');
			$table->string('designed_species');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}