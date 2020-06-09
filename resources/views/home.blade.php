@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">REPORTES</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Seleccione un reporte
                    <div class="container-fluid">
                            <br>
                            <select name="select-reportes" id="select-reportes"  class="form-control" >
                            <option value="1">Reporte 1</option>
                            <option value="2">Reporte 2</option>
                            <option value="3">Reporte 3</option>
                            <option value="4">Reporte 4</option>
                            <option value="5">Reporte 5</option>
                            </select>
                            <br>
                            <button type="submit" onclick="verreporte()"  class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Ver
                            Reporte</button>
                </div>
                <script type="text/javascript">
                function verreporte(){
                var option = $("#select-reportes option:selected").val();
                        if(option==1){
                            window.open("http://electiva2.jelastic.saveincloud.net/informe.jsp?nombre=Reporte1","_blank");
                        }else if(option==2){
                            window.open("http://electiva2.jelastic.saveincloud.net/informe.jsp?nombre=Reporte2","_blank");
                        }else if(option==3){
                               window.open("http://electiva2.jelastic.saveincloud.net/informe.jsp?nombre=Reporte3","_blank");
                        }else if(option==4){
                               window.open("http://electiva2.jelastic.saveincloud.net/informe.jsp?nombre=Reporte4","_blank");
                        }
                    
                    }
                </script>
            </div>
        </div>
    </div>
</div>
@endsection
