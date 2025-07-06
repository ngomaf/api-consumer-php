
        <h1><?= $title ?></h1>
        <p><?= $description ?></p>

        <br>

        <?= ($msg)? "<p class='danger'>{$msg}.</p><br>": null ?>

        <form action="/user/save" method="post">
            <label for="name">Nome<span class="danger">*</span></label>
            <input type="text" name="name" id="name" placeholder="Seu nome" required><br>
            
            <label for="email">E-mail<span class="danger">*</span></label>
            <input type="email" name="email" id="email" placeholder="Seu email" required><br>

            <button type="submit">Enviar</button> <button type="reset">Limpar</button>
        </form>
        