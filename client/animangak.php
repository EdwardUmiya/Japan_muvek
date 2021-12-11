<body>
<div class="container">
<select class="custom-select" id="kategoria"></select>
    <h1>Művek</h1>
        <table class="table table-striped">
            <thead class="thead-dark sticky-top">
                <th>Név</th>
                <th>Kiadó</th>
                <th>Részek</th>
                <th>Típus</th>
                <th>Műfaj</th>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <script>
    function render(data){
        let tbl=""
        for(obj of data){
            tbl+=`<tr><td>${obj.animenev}</td><td>${obj.kiado}</td><td>${obj.reszek}</td><td>${obj.tipusnev}</td><td>${obj.kategorianev}</td></tr>`
        }
        document.querySelector("tbody").innerHTML=tbl
    }
    fetch("../server/readkateg.php")
    .then(response=>response.json())
    .then(data=>renderkateg(data))

    function renderkateg(data){
        let ostr='<option value="0">Válassz egy műfajt!</option>'
        for(let obj of data)      
        ostr+=`<option value="${obj.kaz}">${obj.nev}</option>`

        document.getElementById('kategoria').innerHTML=ostr
    }

    document.getElementById("kategoria").addEventListener("change",myFilter)

function myFilter(e){
    //console.log(e.target.value)
    let id=e.target.value
    if(id!=0){
    fetch(`../server/filterkateg.php?aaz=${id}`)
.then(response => response.json())
.then(data => render(data))
}
}
    </script>
<body>