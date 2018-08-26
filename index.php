<!DOCTYPE html >
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Project Title</title>
    <link rel="stylesheet" href="assets/css/app-ui.main.css?<?= time() ?>"/>
  </head>
  <body>
    <div class="ui-scalable">
      <div class="ui-scalable-content">
        <h1>It works!</h1>
      </div>
    </div>
    <library style="display:none">
      <ul id="ui-base64img-list">
        <li data-src="1x1">data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==</li>
        <li data-src="2x1">data:image/gif;base64,R0lGODlhAgABAIAAAP///wAAACH5BAEAAAAALAAAAAACAAEAAAICBAoAOw==</li>
        <li data-src="3x2">data:image/gif;base64,R0lGODlhAgADAIAAAP///wAAACH5BAEAAAAALAAAAAACAAMAAAIChF8AOw==</li>
        <li data-src="17x7">data:image/gif;base64,R0lGODlhEQAHAIAAAP///wAAACH5BAEAAAAALAAAAAARAAcAQAIJhI+py+0Po5QFADs=</li>
        <li data-src="16x9">data:image/false;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAAALAAAAAAQAAkAAAIKhI+py+0Po5yUFQA7</li>
        <li data-src="6x8">data:image/gif;base64,R0lGODlhBgAIAIAAAP///wAAACH5BAEAAAAALAAAAAAGAAgAQAIGhI+py30FADs=</li>
      </ul>
    </library>
  </body>
  <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
  <script src="assets/js/app-ui.js?<?= time() ?>"></script>
</html>
