<?php

/*
 *  Basic migration usage
 */
public function up()
{
    Schema::create('tablename', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->dateTime('columnName')->nullable();
        $table->integer('columnName');
        $table->string('columnName')->index();
    });
}
