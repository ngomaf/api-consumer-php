
        <h1><?= $title ?></h1>
        <p><?= $description ?></p>

        <br>

        <?php if($status): ?>
        
        <section class="articles">
            <?php foreach($notices as $key => $value): ?>
            <article>
                <div class="oder-numb"><span><?= ++$key ?></span></div>
                <div class="content">
                    <h1><a href="/notice/<?= $value->slugNotice ?>"><?= $value->titleNotice ?></a></h1>
                    <div class="category">
                        <p><?= $value->catNotice ?></p>
                    </div>
                    <div class="others-datas meta-data">
                        <?= $this->procDate($value->createdNotice) ?> | <span title="<?= $value->viewNotice ?>"><?= $this->procNum($value->viewNotice) ?> views</span>
                    </div>
                </div>
            </article>
            <?php endforeach ?>
        </section>

        <?php else: ?>

        <h1 class="danger">Oooooo</h1>
        <p>Por erro na conexão, não é possível apresentarmos as notícias. Tente mais tarde.</p>

        <?php endif ?>
        