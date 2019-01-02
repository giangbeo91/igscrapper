<?php
require_once __DIR__ . '/IgScrapper/Instagram.php';
require_once __DIR__ . '/IgScrapper/Endpoints.php';
require_once __DIR__ . '/IgScrapper/InstagramQueryId.php';
require_once __DIR__ . '/IgScrapper/Traits/ArrayLikeTrait.php';
require_once __DIR__ . '/IgScrapper/Traits/InitializerTrait.php';
require_once __DIR__ . '/IgScrapper/Model/AbstractModel.php';
require_once __DIR__ . '/IgScrapper/Model/Account.php';
require_once __DIR__ . '/IgScrapper/Model/CarouselMedia.php';
require_once __DIR__ . '/IgScrapper/Model/Comment.php';
require_once __DIR__ . '/IgScrapper/Model/Location.php';
require_once __DIR__ . '/IgScrapper/Model/Media.php';
require_once __DIR__ . '/IgScrapper/Model/Tag.php';
require_once __DIR__ . '/IgScrapper/Exception/InstagramException.php';
require_once __DIR__ . '/IgScrapper/Exception/InstagramAuthException.php';
require_once __DIR__ . '/IgScrapper/Exception/InstagramNotFoundException.php';
