<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private array $affected_tables = [
        'cards',
        'limitations',
        'limitation_sets',
        'line_items',
        'people',
        'product_types',
        'reservations',
        'shops',
        'visits'
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach ($this->affected_tables as $affected_table) {
            Schema::table($affected_table, function (Blueprint $table) {
                $table->foreignId('instance_id')->nullable();
            });

            DB::table($affected_table)->update(['instance_id' => 1]);

            Schema::table($affected_table, function (Blueprint $table) {
                $table->foreignId('instance_id')->nullable(false)->change()
                    ->constrained()->onUpdate('cascade')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        foreach ($this->affected_tables as $affected_table) {
            Schema::table($affected_table, function (Blueprint $table) {
                $table->dropForeign(['instance_id']);
                $table->dropColumn('instance_id');
            });
        }
    }
};
