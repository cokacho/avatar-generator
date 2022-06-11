<?php

use GuzzleHttp\Exception\GuzzleException;
use Harmons\lib\AvatarDiceBear;
use Harmons\lib\AvatarUIAvatars;
use Harmons\lib\integrations\HandlerApi;
use Harmons\lib\integrations\HandlerUrl;

require_once realpath(__DIR__ . '/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
if (file_exists(__DIR__ . '/.env')) {
    $dotenv->load();
}

$avatar = new AvatarDiceBear();
$avatar->setHandler(new HandlerApi());
$avatar->setSettings([
    "gender" => "male",
    "name" => "nelson",
    "background" => "230000ff",
    "mood[]" => "happy"
]);

$avatarUIAvatars = new AvatarUIAvatars();
$avatarUIAvatars->setHandler(new HandlerUrl());
$avatarUIAvatars->setSettings([
    "name" => "Nelson Favian",
    "backgroud" => "0D8ABC",
    "color" => "fff",
    "size" => "128"
]);
try {
    $avatar->load();
    $avatarUIAvatars->load();
    $image = $avatar->getAvatarContent();
    $imageUIAvatars = $avatarUIAvatars->getAvatarContent();
    var_dump($image);
    var_dump($imageUIAvatars);
} catch (GuzzleException $e) {
    var_dump($e);
} catch (Exception $e) {
    var_dump($e);
}

