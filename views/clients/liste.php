<div class="container p-3">
    <div class="card">
        <div class="card-body p-2">
            <form action="./clients" method="post" class="add w-75">
                <div class="input-group">
                    <input id="keyword" name="keyword" type="text" class="form-control" placeholder="Rechercher un client…" aria-label="My new idea" aria-describedby="basic-addon1"/>
                </div>
            </form>
            <h5 class="card-title">Les clients</h5>
            <!-- Liste -->
            <table class="w-100 table">
                <thead>
                    <tr class="text-secondary">
                        <td>Id</td>
                        <td>Nom Prénom</td>
                        <td>Téléphone</td>
                        <td>Email</td>
                        <td>
                            <a href="./clients/ajouter" class="text-white btn btn-success">Ajouter un client</a>
                        </td>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($clients as $client) {
                    ?>
                        <tr>
                            <td><?= $client->getId() ?></td>
                            <td><?= $client->getNom() ?>&nbsp;<?= $client->getPrenom() ?></td>
                            <td><?= $client->getTelephone() ?></td>
                            <td><?= $client->getEmail() ?></td>
                            <td>
                                <a href="./client/<?= $client->getId() ?>" class="btn">&gt;</a>
                            </td>
                        </tr>
                    
                    <?php
                }
                

                if (sizeof($clients) == 0) {
                    ?>
                    <li class="list-group-item text-center">C'est vide !</li>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>