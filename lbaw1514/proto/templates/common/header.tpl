<!DOCTYPE html>
<html>
  <head>
    <title>NOW!</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="{$BASE_URL}css/style.css">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="{$BASE_URL}javascript/main.js"></script>
  </head>
  <body>
    <header>
      <h1><a href="{$BASE_URL}">NOW!</a></h1>
      {if $EMAIL}
        {include file='common/menu_logged_in.tpl'}
      {else}
        {include file='common/menu_logged_out.tpl'}
      {/if}
    </header>

    <div id="error_messages">
    {foreach $ERROR_MESSAGES as $error}
      <div class="error">{$error}<a class="close" href="#">X</a></div>
    {/foreach}
    </div>
    <div id="success_messages">
    {foreach $SUCCESS_MESSAGES as $success}
      <div class="success">{$success}<a class="close" href="#">X</a></div>
    {/foreach}
    </div>
