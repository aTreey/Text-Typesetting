<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dblog</title>
    <link href="/tts/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/tts/Public/css/global.css?v=20161231204502" rel="stylesheet">
    <link href="/tts/Public/css/index.css?v=20161231204509" rel="stylesheet">
    <script src="/tts/Public/jquery/jquery-1.11.3.min.js"></script>
    <script src="/tts/Public/js/content.js?v=20161231204509"></script>
</head>

<body>

<div class="container" style="margin-top: 100px">
    <div class="row">
         <div class="col-md-5">
            <textarea class="form-control" rows="20" id="input-textarea"></textarea>
        </div>
        <div class="col-md-5">
            <textarea class="form-control" rows="20" id="output-textarea"></textarea>
        </div>
        <div class="col-md-2">
            <div class="btn-group-vertical" role="group" aria-label="...">
                <button type="button" class="btn btn-default" id="add-space-btn">添加空格</button>
                <button type="button" class="btn btn-default" id="convert-pic-btn">转换图片引用</button>
            </div>
        </div>
    </div><!-- row -->
</div><!-- container -->

<footer class="bs-docs-footer">
    <div class="container">
        <div><a href="https://github.com/CyC2018/Text-Typesetting">GitHub 仓库</a></div>
        <p>本项目源码受 <a rel="license" href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT </a>开源协议保护，文档受
            <a rel="license" href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a> 开源协议保护。
        </p>
    </div>
</footer>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/tts/Public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>