<?php
return [
  'components' => [
    'db' =>  [
      'class' => 'yii\db\Connection',
      "dsn" => "pgsql:host=localhost;port=5432;dbname=yii2-ecommerec",
      "username" => "postgres",
      "password" => "pwd",
      "charset" => "utf8",
    ],,
    'mailer' => [
      'class' => 'yii\swiftmailer\Mailer',
      'viewPath' => '@common/mail',
    ],
  ],
];
