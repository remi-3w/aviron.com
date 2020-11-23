<?php include('template/header.php'); ?>
<div class="row">
    <section class="col-6  p-5">
        <form action="template/post_contact.php" method="POST">
            <div class="form-group col-6">
                <label for="FormControlInput1">Nom</label>
                <input type="name" name="name" class="form-control" id="FormControlInput1">
            </div>
            <div class="form-group col-6">
                <label for="FormControlInput2">Email address</label>
                <input type="email" name="email" class="form-control" id="FormControlInput2">
            </div>
            <div class="form-group">
                <label for="FormControlSelect1">Sujet</label>
                <select class="form-control" name="category" id="FormControlSelect1">
                    <option selected>L'aviron</option>
                    <option>Le club</option>
                    <option>Les activités</option>
                    <option>Autres</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="FormControlTextarea1">Example textarea</label>
                <textarea class="form-control" name="message" id="FormControlTextarea1" rows="5"></textarea>

                <button type="submit" class="btn btn-outline-danger text-dark item-align-right btn-lg">Envoyez</button></div>
        </form>

    </section>
    <section id="info" class="col-6">
        <h2> LE CLUB </h2>
        <div class="  m-auto">
            <div class=" m-auto row  ">
                <i class=" iconify col-2 text-dark" data-icon="mdi-email-edit-outline" data-inline="false"> </i>
                <p class=" col-10">Contactez nous par écrit</p>
            </div>
            <div class=" m-auto row ">
                <i class=" iconify col-2 text-dark" data-icon="bi:telephone" data-inline="false"> </i>
                <p class=" col-10">01 64 97 05 15</p>
            </div>
            <div class="m-auto row pb-3 ">
                <i class=" iconify col-2 text-dark" data-icon="wpf-geo-fence" data-inline="false"> </i>
                <p class=" col-10 ">1 chemin de halage, Parking Gare 91000 Evry-Courcouronnes</p>
            </div>
        </div>
        <hr class=" hr col-3 m-auto ">
        <h2 class="pt-3"> HORAIRES </h2>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Lundi</th>
                    <td>9:00</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <th scope="row">Mardi</th>
                    <td>Fermé</td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Mercredi</th>
                    <td>9:30</td>
                    <td>20:00</td>
                </tr>
                <tr>
                    <th scope="row">Jeudi</th>
                    <td>9:30</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <th scope="row">Vendredi</th>
                    <td>Fermé</td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Samedi</th>
                    <td>9:00</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <th scope="row">Dimanche</th>
                    <td>9:00</td>
                    <td>12:30</td>
                </tr>
            </tbody>
        </table>
    </section>
</div>
<?php include('template/footer.php'); ?>