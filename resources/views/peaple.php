
        <?php if($status): ?>

        <figure><img src="<?= $person->avatar ?>" alt="<?= $person->first_name ?>"></figure>
        <h1><?= $person->first_name ?> <?= $person->last_name ?></h1>
        <p><?= $person->email ?> &nbsp;&nbsp; <small><a href="/peaple/edit/<?= $person->id ?>">Editar</a> <span>|</span> <a href="/peaple/delete/<?= $person->id ?>" onclick="return confirm('Deseja realmente eliminar pemanentemente a personagem #<?= $person->id ?>?')">Eliminar</a></small></p>

        <br>

        <p><?= $description ?></p>

        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis itaque ipsa magnam velit nemo cum animi quidem quibusdam quam veritatis, quas deleniti officiis numquam praesentium vero dolorem, illum repudiandae eveniet, nam minus excepturi expedita.
        </p>

        <?php else: ?>

        <h1 class="danger">Oooooo</h1>
        <p>Por erro na conexão, não é possível apresentarmos a notícia <i>"2"</i>. Tente mais tarde.</p>

        <?php endif ?>