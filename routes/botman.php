<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});

$botman->hears('Oi', function ($bot) {
    $bot->reply('Oi, tudo bem?');
});

$botman->fallback(function($bot) {
    $bot->reply('Sorry, I did not understand these commands.');
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
