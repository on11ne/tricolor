<?php

class m121007_122711_schedule_uploader_type extends CDbMigration
{
	public function up()
	{
        $this->addColumn('tbl_schedule_uploader', 'type', 'varchar(30)');
	}

	public function down()
	{
		echo "m121007_122711_schedule_uploader_type does not support migration down.\n";
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