
        <?php if($status): ?>

        <h1><?= $notice->titleNotice ?></h1>
        <p>Data: <?= $this->procDate($notice->createdNotice) ?> | Views: <?= $this->procNum($notice->viewNotice) ?></p>

        <br>

        <figure>
            <img src="http://127.0.0.1:8000/assets/image/<?= $notice->directoryTypeImage ?>/<?= $notice->image ?>" alt="<?= $notice->altImage ?>">
            <figcaption class="meta-data"><?= $notice->altImage ?></figcaption>
        </figure>

        <br>

        <?= $notice->contentNotice ?>

        <?php else: ?>

        <h1 class="danger">Oooooo</h1>
        <p>Por erro na conexão, não é possível apresentarmos a notícia <i>"<?= $slug ?>"</i>. Tente mais tarde.</p>

        <?php endif ?>