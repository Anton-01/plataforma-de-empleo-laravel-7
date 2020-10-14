


@section('name')
    <script>
        window.addEventListener('load',function(){
            document.getElementById("texto").addEventListener("keyup", () => {
            if((document.getElementById("texto").value.length)>=1)
                fetch(`/sefeco/buscar?texto=${document.getElementById("texto").value}`,{
                    method:'get'
                })
                .then(response => response.text() )
                .then(html => { document.getElementById("resultados").innerHTML = html })
            else
                document.getElementById("resultados").innerHTML = ""
            })
        });
    </script>
@endsection

linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(113,16,16,0.9612978980654762) 20%, rgba(0,212,255,1) 100%),url("http://devjobs.dev.com/front/img/hero/morelia_header.jpg";



background-image: url(), linear-gradient(;
background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(113,16,16,0.9612978980654762) 20%, rgba(0,212,255,1) 100%);
