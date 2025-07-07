
        <h1><?= $title ?></h1>
        <p><?= $description ?></p>

        <br>

        <?= ($msg)? "<p class='danger'>{$msg}.</p><br>": null ?>

        <?php if($status): ?>
        
        <section class="articles users">
            <?php 
                foreach($persons as $key => $value): 
                    if($value->first_name == '') continue;
            ?>
            <article>
                <div class="oder-numb"><img src="<?= $value->avatar ?>" alt="<?= $value->first_name ?>"></div>
                <div class="content">
                    <figure></figure>
                    <h1><a href="/peaple/<?= $value->id ?>"><?= $value->first_name ?> <?= $value->last_name ?></a></h1>
                    <div class="category">
                        <p><?= $value->email ?></p>
                    </div>
                </div>
            </article>
            <?php endforeach ?>
        </section>

        <?php else: ?>

        <h1 class="danger">Oooooo</h1>
        <p>Error msg: <i><?= $persons ?></i></p>

        <?php endif ?>

        
        