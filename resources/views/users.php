
        <h1><?= $title ?></h1>
        <p><?= $description ?>&nbsp; &nbsp; <a href="/user/new">Novo +</a></p>

        <br>

        <?= ($msg)? "<p class='danger'>{$msg}.</p><br>": null ?>

        <?php if($status): ?>
        
        <section class="articles users">
            <?php 
                foreach($users as $key => $value): 
                    if($value->name == '') continue;
            ?>
            <article>
                <div class="oder-numb"><span><?= ++$key ?></span></div>
                <div class="content">
                    <h1><a href="/user/<?= $value->id ?>"><?= $value->name ?></a></h1>
                    <div class="category">
                        <p><?= $value->email ?></p>
                    </div>
                </div>
            </article>
            <?php endforeach ?>
        </section>

        <?php else: ?>

        <h1 class="danger">Oooooo</h1>
        <p>Por erro na conexão, não é possível apresentarmos as notícias. Tente mais tarde.</p>

        <?php endif ?>
        