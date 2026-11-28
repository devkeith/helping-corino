<?php require_once '../config/config.php';$title='About Us';require '../includes/header.php';?>
<div class="page-hero"><div class="container"><span class="eyebrow">Who we are</span><h1 class="fw-bold">About FoodFusion</h1><p class="lead">A community built around the simple joy of cooking at home.</p></div></div>

<section class="section">
<div class="container">
<div class="row g-5 align-items-center">
<div class="col-lg-7">
<h2>Our culinary philosophy</h2>
<p class="lead">We believe great food does not need to be complicated. FoodFusion brings recipes, practical skills and people together so anyone can cook with confidence.</p>
<p>What started as a small notebook of family recipes has grown into a global kitchen where home cooks, students and professional chefs share what they know. Every recipe on FoodFusion is written by a real person, tested in a real kitchen, and shared with one goal in mind: to make cooking less intimidating and more social.</p>
<p>From your first boiled egg to your first layered cake, our step-by-step guides walk you through each technique, explain the why behind every step, and celebrate every small win along the way.</p>
<p>Our values are creativity, community, learning, inclusion, sustainability and quality — and we bring them to every recipe we publish, every comment we welcome, and every event we host.</p>
</div>
<div class="col-lg-5">
<div class="row g-3"><?php foreach(['Creativity','Community','Learning','Inclusivity','Sustainability','Quality'] as $v):?><div class="col-6"><div class="stat"><h6><?=$v?></h6></div></div><?php endforeach;?></div>
</div>
</div>

<div class="row g-4 mt-4 text-center">
<div class="col-md-4"><div class="stat"><h2>500+</h2><span class="text-muted">Recipes shared</span></div></div>
<div class="col-md-4"><div class="stat"><h2>50k+</h2><span class="text-muted">Home cooks reached</span></div></div>
<div class="col-md-4"><div class="stat"><h2>30+</h2><span class="text-muted">Cuisines represented</span></div></div>
</div>

<h2 class="mt-5">How FoodFusion works</h2>
<div class="row g-4 mt-2">
<div class="col-md-4"><div class="card feature-card"><div class="card-body p-4"><span class="tag">Discover</span><h5 class="mt-3">Find your next meal</h5><p class="text-muted">Search hundreds of recipes by cuisine, diet or difficulty. Save the ones you love to your personal dashboard and come back to them any time.</p></div></div></div>
<div class="col-md-4"><div class="card feature-card"><div class="card-body p-4"><span class="tag">Learn</span><h5 class="mt-3">Build real skills</h5><p class="text-muted">Follow clear, tested instructions and practical tutorials — from knife skills to sauces — and grow from beginner to confident home cook.</p></div></div></div>
<div class="col-md-4"><div class="card feature-card"><div class="card-body p-4"><span class="tag">Share</span><h5 class="mt-3">Give back to the community</h5><p class="text-muted">Submit your own recipes, join the conversation in the comments, and help other cooks discover something new every week.</p></div></div></div>
</div>

<h2 class="mt-5">The team</h2>
<p class="lead">The six people behind FoodFusion — every day, in the kitchen and behind the scenes.</p>
<div class="row g-4">
<?php $team=[
 ['name'=>'Amara Banda','role'=>'Founder & Head Chef','bio'=>'Amara started FoodFusion after years of teaching cooking classes in her hometown. She leads recipe development and tests every featured dish.','img'=>'member-1.jpg'],
 ['name'=>'Daniel Phiri','role'=>'Community Manager','bio'=>'Daniel keeps the community buzzing — he welcomes new members, runs our weekly cook-along events and makes sure every voice is heard.','img'=>'member-2.jpg'],
 ['name'=>'Mia Chirwa','role'=>'Recipe Developer','bio'=>'Mia is a self-taught baker who turns complicated techniques into simple, repeatable steps. Her desserts are the most saved on the site.','img'=>'member-3.jpg'],
 ['name'=>'Thoko Nkhoma','role'=>'Nutrition Editor','bio'=>'Thoko reviews every recipe for balance and clarity, so you always know what is on your plate and why it belongs there.','img'=>'member-4.jpg'],
 ['name'=>'Grace Banda','role'=>'UX & Frontend Developer','bio'=>'Grace built the FoodFusion interface you are using right now. She is obsessed with fast pages and forms that never get in your way.','img'=>'member-5.jpg'],
 ['name'=>'Samuel Phiri','role'=>'Photographer & Videographer','bio'=>'Samuel shoots the food photos and step-by-step videos. If a dish looks good enough to eat through the screen, that is his work.','img'=>'member-6.jpg'],
]; foreach($team as $m):?>
<div class="col-md-4"><div class="card feature-card"><img class="team-photo" src="../assets/images/team/<?=$m['img']?>" alt="Portrait of <?=e($m['name'])?>"><div class="card-body p-4"><span class="team-role"><?=e($m['role'])?></span><h5 class="mt-2"><?=e($m['name'])?></h5><p class="text-muted mb-0"><?=e($m['bio'])?></p></div></div></div>
<?php endforeach;?>
</div>

<div class="text-center mt-5">
<h2>Want to cook with us?</h2>
<p class="lead">Join the community, share your recipes and eat well together.</p>
<a class="btn btn-primary btn-lg me-2" href="community.php">Visit the Community</a>
<a class="btn btn-outline-dark btn-lg" href="contact.php">Contact the team</a>
</div>
</div>
</section>
<?php require '../includes/footer.php';?>
