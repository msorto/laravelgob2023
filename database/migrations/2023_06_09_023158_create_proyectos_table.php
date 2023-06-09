<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nombreProyecto');
            $table->string('fuenteFondos');
            $table->double('montoPlanificado',12,2);
            $table->double('montoPatrocinado',12,2);
            $table->double('montoFondosPropios',12,2);         
        });

        DB::table('proyectos')->insert(
            array([
                'nombreProyecto' =>"Vaso de Leche",
                'fuenteFondos' => "Varios",
                'montoPlanificado' => 1500000.00,
                'montoPatrocinado' => 500000.00,
                'montoFondosPropios' => 1000000.00,],
                [
                    'nombreProyecto' =>"Mamá Digna",
                    'fuenteFondos' => "Varios",
                    'montoPlanificado' => 1500000.00,
                    'montoPatrocinado' => 500000.00,
                    'montoFondosPropios' => 1000000.00,],
                    [
                        'nombreProyecto' =>"Un niño una computadora",
                        'fuenteFondos' => "Varios",
                        'montoPlanificado' => 1500000.00,
                        'montoPatrocinado' => 500000.00,
                        'montoFondosPropios' => 1000000.00,],
                        [
                            'nombreProyecto' =>"El Salvador seguro",
                            'fuenteFondos' => "Varios",
                            'montoPlanificado' => 150000000.00,
                            'montoPatrocinado' => 50000000.00,
                            'montoFondosPropios' => 100000000.00,]
            )

        );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('proyectos');


    }
};
