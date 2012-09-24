<?php

class m120924_140950_add_schedule_upload extends CDbMigration
{
	public function up()
	{
        $this->createTable("tbl_schedule_uploader", array(
            'id' => 'int(10) PRIMARY KEY NOT NULL',
            'filename' => 'varchar(255) NOT NULL',
            'created' => 'TIMESTAMP',
            'PRIMARY KEY (id)' => ''
        ));
	}

	public function down()
	{
		echo "m120924_140950_add_schedule_upload does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}