<body>
<div class="container">
<h1>Mű frissítése</h1>
        <table id="tabla" class="table table-striped">
            <thead class="thead-dark sticky-top">
                <th>Név</th>
                <th>Kiadó</th>
                <th>Részek</th>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <script>
fetch('../server/readanimangak.php')
    .then(response=>response.json())
    .then(data=>render(data))

            function render(data){
        let tbl=""
        for(obj of data){
            tbl+=`<tr><td contenteditable>${obj.animenev}</td><td contenteditable>${obj.kiado}</td><td contenteditable>${obj.reszek}</td>
            <td class="btn btn-primary" id="${obj.aaz}" onclick="update(this)">Update</td>
            </tr>`
            }
            document.querySelector("tbody").innerHTML=tbl
        }
        function update(obj){
            //console.log(obj.parentNode.cells.length)
                let cellak=obj.parentNode.cells
                let id = obj.id
                let i=0;
                let nev;
                let kiado;
                let reszek;
                for(let obj of cellak){
                //console.log(obj.textContent)
               if(i==0) nev=obj.textContent;
               if(i==1) kiado=obj.textContent;
               if(i==2) reszek=obj.textContent;
               i++;
                }
            fetch(`../server/updateanime.php?aaz=${id}&nev=${nev}&kiado=${kiado}&reszek=${reszek}`)
    .then((response)=>response.text())
    .then(data=>console.log(data))
}
    </script>
<body>


