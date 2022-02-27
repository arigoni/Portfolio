<!-- Contact -->
<section class="contact contactMe pb-5">
    <div class="bloquote quoteC pt-2 d-flex align-items-center">
        <div class="container">
            <div class="texto text-center">
                <b>" Des solutions adaptées à votre domaine d'activité ! "</b>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row justify-content-center flex-wrap">
            <div class="col-12 col-xl-6">
                <h2 class="text-center">Contactez-moi</h2>
                <hr style="height:0.3125rem">
                <form id="contact" class="row" method="post" action="traitement.php">
                    <div class="form-group col-lg-4">
                        <label class="form-control-label" for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="form-group col-lg-4">
                        <label class="form-control-label" for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group col-lg-4">
                        <label class="form-control-label" for="objet">Objet</label>
                        <input type="text" class="form-control" id="objet" name="objet">
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="form-control-label" for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="6"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <button class="btn btn-info float-end mt-2" type="submit" name="envoi">Envoyer</button>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</section>