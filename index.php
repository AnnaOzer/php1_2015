<?php

require_once __DIR__ . '/models/news.php';

$news = News_getAll();

include 'view/index.php';

include 'view/showoneform.php';

include 'view/editoneform.php';