
        <h1><?= $title ?></h1>
        <p><?= $description ?></p>

        <br>

        <form action="/user/update" method="post">
            <input type="hidden" name="id" value="<?= $user->id ?>">
            
            <label for="name">Nome<span class="danger">*</span></label>
            <input type="text" name="name" value="<?= $user->name ?>" id="name" placeholder="Seu nome" required><br>
            
            <label for="email">E-mail<span class="danger">*</span></label>
            <input type="email" name="email" value="<?= $user->email ?>" id="email" placeholder="Seu email" required><br>

            <button type="submit">Actualizar</button>
        </form>
        