<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
  @include('layouts.header')
  <div class="lienFormation">
    <h2>DépartementGMP -Genie Mecanique et Productique</h2>



  </div>

  <ul class="listLien">
    <li>ACCUEIL </li>
    <li> > </li>
    <li>ESPACE ENSEIGNANT</li>
    <li> > </li>
    <li>NOTES</li>
  </ul>


  <section id="section">

    <div class="Ajoutnotes mx-auto my-7">
      <h2>Ajouter des notes</h2>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form action="{{ route('Ajoutnotes.add') }}" method="POST">
        @csrf
        <div>
          <ul class="flex flex-row justify-center">
            <li> <input type="radio" name="classe" class="choixClasse" id="classe1" value="1" required>
              <label for="classe1">LP MIE</label>
            </li>
            <br>
            <li> <input type="radio" name="classe" class="choixClasse" id="classe2" value="2">
              <label for="classe2">LP MIEF</label>
            </li>
            <br>
            <li> <input type="radio" name="classe" class="choixClasse" id="classe3" value="3">
              <label for="classe3">LP MRI</label>
            </li>
          </ul>
        </div>

        <br><br>
        <input type="hidden" name="id_enseignant" value="{{auth()->id();}}">

        <select name="id_etudiant" id="etudiant" required>
          <option value="" selected>Etudiant</option>
        </select>
        <br><br>
        <select name="id_matiere" id="matiere" required>
          <option value="" selected>Matière</option>
          @foreach ($matieres as $matiere)
          <option value="{{$matiere->id_matiere}}">{{$matiere->nom_matiere}}</option>
          @endforeach
        </select> <br><br>

        <input type="number" name="note" id="note" placeholder="Note*" min="0" max="20" step="0.5" required>
        <br><br>

        <input type="number" name="coefficient" id="coefficient" placeholder="Coefficient*" min="1" step="1" required>
        <br><br>

        <textarea name="appreciation" id="appreciation" placeholder="Appréciation*" rows="4" cols="30" required></textarea>
        <br><br>

        <input type="submit" value="Ajouter la note">
      </form>
    </div>

  </section>


  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
  </script>
  <script>
    jQuery(document).ready(function() {
      jQuery('.choixClasse').click(function(e) {
        var $idClasseChoisie = $(this).val();

        //  e.preventDefault();
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
        });
        jQuery.ajax({
          url: "/Ajoutnotes/showClasse" + $idClasseChoisie,
          method: 'get',
          success: function(result) {
            var optionDeBase = $('<option></option>').attr("value", "").text("Etudiant");
            $("#etudiant").empty().append(optionDeBase);

            // Les étudiants
            $.each(result, function(index, element) {
              var nomEtudiant = element.nom_etudiant;
              var idEtudiant = element.id_etudiant;
              var optionEtudiant = $('<option></option>').attr("value", idEtudiant).text(nomEtudiant);
              $("#etudiant").append(optionEtudiant);
            });





          }
        });
      });
    });
  </script>
</body>
@include('layouts.footer')


</html>
<style>
  /*FORM*/
  .Ajoutnotes {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
    width: 400px;
    text-align: center;
    box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.5);
  }

  .Ajoutnotes h2 {
    color: #333333;
    font-size: 24px;
    margin-bottom: 20px;
  }

  .Ajoutnotes label {
    display: inline-block;
    width: 100px;
    text-align: left;
    margin-bottom: 10px;
  }

  .Ajoutnotes input[type="text"],
  .Ajoutnotes input[type="number"],
  .Ajoutnotes textarea {
    width: 300px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
  }

  .Ajoutnotes input[type="submit"] {
    background-color: #606C38;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .Ajoutnotes input[type="submit"]:hover {
    background-color: #BC6C25;
  }

  /*FIN FORM*/

  #section {
    min-height: 30vw;
    height: 100%;
    DISPLAY: flex;


  }

  ul.listLien {
    display: flex;
    padding: 18px;
    color: white;
    font-size: 13px;
    border-bottom: 1px solid;
    background: #606c38;
  }

  ul.listLien li {
    padding-left: 11px;
    position: relative;
    left: 7pc;
  }

  .lienFormation {
    background-color: #283618;
    padding: 19px;


  }


  .lienFormation h2 {
    color: white;
    position: relative;
    margin: auto 114px;
  }

  .listMenu {

    width: 18%;
    text-align: left;
    /* height: 100%; */
    background: #606c38;
    color: white;


  }

  .listMenu li {
    border-bottom: 1px solid white;
    padding: 15px;
    text-align: center;

  }


  div.menu {}
</style>