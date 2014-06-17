<?php

class ReplyTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('replies')->delete();
    Reply::create(array(
      'quote'        => "Que tu me baises, déjà c'est mal barré, mais alors que tu me baises bien, ça m'étonnerait fortement !",
      'offensive_id' => 1,
      'status_'      => 'accepted'
    ));
  }

}
