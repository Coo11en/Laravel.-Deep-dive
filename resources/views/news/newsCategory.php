<h1>НОВОСТИ из категории <?=$category?></h1>

<?php foreach ($news as $key => $newses): ?>
    <a style="text-decoration: none; color: black" href="/category/<?=$category?>/news-<?=$key+1?>"><div style="border: 1px solid blue; background-color: #a0aec0">
        <H4>
            <?=$newses['title']?>
        </H4>
        <p>
            <?=$newses['digestNews']?>
        </p>
        <p style="text-align: right"><?=$newses['author']?>  <em style="font-size: 10px"><?=$newses['created_at']?></em></p>
    </div><br></a>
<?php endforeach; ?>
