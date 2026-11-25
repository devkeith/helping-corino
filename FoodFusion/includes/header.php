<?php
require_once __DIR__.'/../config/config.php';
$flash=get_flash();
$base=base_path();
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?=e($title??'FoodFusion')?> | FoodFusion</title>
<meta name="description" content="FoodFusion, a home cooking and culinary community platform.">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="<?=$base?>assets/css/style.css" rel="stylesheet"></head><body>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top"><div class="container">
<a class="navbar-brand fw-bold" href="<?=$base?>index.php"><i class="bi bi-egg-fried"></i> FoodFusion</a>
<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav"><span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="nav"><ul class="navbar-nav ms-auto align-items-lg-center">
<li class="nav-item"><a class="nav-link" href="<?=$base?>index.php">Home</a></li>
<li class="nav-item"><a class="nav-link" href="<?=$base?>pages/about.php">About</a></li>
<li class="nav-item"><a class="nav-link" href="<?=$base?>pages/recipes.php">Recipes</a></li>
<li class="nav-item"><a class="nav-link" href="<?=$base?>pages/community.php">Community</a></li>
<li class="nav-item"><a class="nav-link" href="<?=$base?>pages/resources.php">Resources</a></li>
<li class="nav-item"><a class="nav-link" href="<?=$base?>pages/education.php">Education</a></li>
<li class="nav-item"><a class="nav-link" href="<?=$base?>pages/contact.php">Contact</a></li>
<?php if(user()): ?><li class="nav-item"><a class="btn btn-light ms-lg-2" href="<?=$base?><?=user()['role']==='admin'?'admin/index.php':'dashboard.php'?>"><i class="bi bi-person-circle"></i> <?=e(user()['first_name'])?></a></li><li class="nav-item"><a class="nav-link" href="<?=$base?>logout.php">Logout</a></li>
<?php else: ?><li class="nav-item"><a class="nav-link" href="<?=$base?>login.php">Login</a></li><li class="nav-item"><button class="btn btn-primary ms-lg-2" data-bs-toggle="modal" data-bs-target="#joinModal">Join Us</button></li><?php endif;?>
</ul></div></div></nav>
<?php if($flash):?><div class="container mt-3"><div class="alert alert-<?=e($flash['type'])?>"><?=e($flash['msg'])?></div></div><?php endif;?>
