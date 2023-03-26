<h1>CATEGORY</h1>

<?php foreach ($category as $key => $categorys): ?>
<div>
    <h3>
        <a href="/category/<?=$key?>"><?=$categorys?></a>
    </h3>
</div>
<?php endforeach; ?>
