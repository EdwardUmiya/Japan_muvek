<body>
<div class="container">
<h1>Mű eltávolítása</h1>
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
    <script >
        fetch('../server/readanimangak.php')
    .then(response=>response.json())
    .then(data=>render(data))

            function render(data){
        let tbl=""
        for(obj of data){
            tbl+=`<tr><td>${obj.animenev}</td><td>${obj.kiado}</td><td>${obj.reszek}</td><td>${obj.tipusnev}</td><td>${obj.kategorianev}</td>
            <td class="btn btn-danger" id="${obj.aaz}" onclick="del(this)">delete</td>
            </tr>`
            }
            document.querySelector("tbody").innerHTML=tbl
        }
        function del(obj){
            fetch(`../server/deleteanime.php?aaz=${obj.id}`)
    .then((response)=>response.text())
    .then(data=>console.log(data))
}

    </script>
<body>