<?php

class ReplyTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('replies')->delete();
    Reply::create(array(
      'quote'        => "Que tu me baises, déjà c'est mal barré, mais alors que tu me baises bien, ça m'étonnerait fortement !",
      'typologie_id' => 1,
      'status_'      => 'accepted'
    ));
    Reply::create(array(
      'quote'        => "Que tu me baises, déjà c'est mal barré, mais alors que tu me baises bien, ça m'étonnerait fortement !",
      'typologie_id' => 2,
      'status_'      => 'accepted'
    ));
    Reply::create(array(
      'quote'        => "Que tu me baises, déjà c'est mal barré, mais alors que tu me baises bien, ça m'étonnerait fortement !",
      'typologie_id' => 3,
      'status_'      => 'accepted'
    ));
    Reply::create(array(
      'quote'        => "Que tu me baises, déjà c'est mal barré, mais alors que tu me baises bien, ça m'étonnerait fortement !",
      'typologie_id' => 4,
      'status_'      => 'accepted'
    ));
    Reply::create(array(
      'quote'        => "Que tu me baises, déjà c'est mal barré, mais alors que tu me baises bien, ça m'étonnerait fortement !",
      'typologie_id' => 5,
      'status_'      => 'accepted'
    ));
    Reply::create(array(
      'quote'        => "Que tu me baises, déjà c'est mal barré, mais alors que tu me baises bien, ça m'étonnerait fortement !",
      'typologie_id' => 6,
      'status_'      => 'accepted'
    ));
    Reply::create(array(
      'quote'        => "Que tu me baises, déjà c'est mal barré, mais alors que tu me baises bien, ça m'étonnerait fortement !",
      'typologie_id' => 7,
      'status_'      => 'accepted'
    ));
    Reply::create(array(
      'quote'        => "dsdsd dsd sddsdsd dsd sddsdsd dsd sddsdsd dsd sddsdsd dsd sddsdsd dsd sddsdsd dsd sddsdsd dsd sddsdsd dsd sddsdsd dsd sddsdsd dsd sddsdsd ds",
      'typologie_id' => 8,
      'status_'      => 'accepted'
    ));
  }

}
