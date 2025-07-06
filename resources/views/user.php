
        <?php if($status): ?>

        <h1><?= $user->name ?></h1>
        <p><?= $user->email ?> &nbsp;&nbsp; <small><a href="/user/edit/<?= $user->id ?>">Editar</a> <span>|</span> <a href="/user/delete/<?= $user->id ?>" onclick="return confirm('Deseja realmente eliminar pemanentemente utilizador #<?= $user->id ?>?')">Eliminar</a></small></p>

        <br>

        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis itaque ipsa magnam velit nemo cum animi quidem quibusdam quam veritatis, quas deleniti officiis numquam praesentium vero dolorem, illum repudiandae eveniet, nam minus excepturi expedita.
        </p>

        <?php else: ?>

        <h1 class="danger">Oooooo</h1>
        <p>Por erro na conexão, não é possível apresentarmos a notícia <i>"<?= $id ?>"</i>. Tente mais tarde.</p>

        <?php endif ?>