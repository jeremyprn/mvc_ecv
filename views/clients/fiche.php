<div class="container">
    <div class="card mt-2">
        <div class="card-body p-2">
            <h5 class="card-title">Client / <?= $client->getNom() ?>&nbsp;<?= $client->getPrenom() ?> / informations</h5>
        </div>
    </div>
    <div class="card mt-4 p-2">
        <h5 class="card-title">Données générales</h5>
        <div class="card-body p-2 d-flex">
            <div class="card m-2 bg-light" style="width: 18rem;">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2">Nom</h6>
                    <p class="card-text"><?= $client->getNom() ?></p>
                </div>
            </div>
            <div class="card m-2 bg-light" style="width: 18rem;">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2">Prenom</h6>
                    <p class="card-text"><?= $client->getPrenom() ?></p>
                </div>
            </div>
            <div class="card m-2 bg-light" style="width: 18rem;">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2">Téléphone</h6>
                    <p class="card-text"><?= $client->getTelephone() ?></p>
                </div>
            </div>
            <div class="card m-2 bg-light" style="width: 18rem;">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2">Email</h6>
                    <p class="card-text"><?= $client->getEmail() ?></p>
                </div>
            </div>
        </div>
    </div>
</div>