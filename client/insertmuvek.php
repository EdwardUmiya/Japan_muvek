<form class="form-inline">
    <input type="text" name="" id="nev" class="form-control" placeholder="Írd be a mű nevét">
    <input type="text" name="" id="kiado" class="form-control" placeholder="Írd be a kiadóját">
    <input type="text" name="" id="resz" class="form-control" placeholder="Írd be a részek számát">
    <select id="mufaj" name="" class="form-select">
  <option value="1">Isekai</option>
  <option value="2">Sci-fi</option>
  <option value="3">Action</option>
  <option value="4">Horror</option>
  <option value="5">Romance</option>
  <option value="6">Comedy</option>
  <option value="7">Ecchi</option>
  <option value="8">Slice of life</option>
    <option value="9">Supernatural</option>
    </select>
    <select id="tipus" name="" class="form-select">
  <option value="1">Light novel</option>
  <option value="2">Web novel</option>
  <option value="3">Manga</option>
  <option value="4">Anime</option>
  <option value="5">Anime movie</option>
    </select>
    <input class="btn btn-primary" type="button" onclick="uj()" value="mentés">
</form>

    <script>
            function uj(){
                let nev=document.getElementById('nev').value
                let kiado=document.getElementById('kiado').value
                let resz=document.getElementById('resz').value
                let mufaj=document.getElementById('mufaj').value
                let tipus=document.getElementById('tipus').value

            fetch(`../server/insertanime.php?nev=${nev}&kiado=${kiado}&resz=${resz}&mufaj=${mufaj}&tipus=${tipus}`)
            .then((response)=>response.text())
            .then(data=>console.log(data))
            }
    </script>