<?php

class m121007_095537_add_youtube_teaser extends CDbMigration
{
	public function up()
	{
        $this->addColumn('tbl_items', 'slider_teaser_image', 'varchar(255)');
	}

	public function down()
	{
		echo "m121007_095537_add_youtube_teaser does not support migration down.\n";
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