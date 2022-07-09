@extends('layouts.dashboard')


@section('content')

        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>Update perkembangan anak</strong>
                </div>
                
                <div class="card-body">
                  
                    <br/>
                    <form method="post" action="/child/growth/store/{{$growths->child_id}}"> 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                ID anak (percobaan) <input type="number" class="form-control form-control-user" name="child_id" required="required" value="{{$growths->child_id}}" readonly> <br/>
                            </div>
                            <div class="col-sm-6">
                                Umur anak (percobaan) <input type="number" class="form-control form-control-user" name="child_age" id="child_age" required="required" value="{{$age}}" onchange="zScore()" readonly> <br/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                panjang<input type="number" class="form-control form-control-user" name="height" id="height" onchange="zScore()" required="required">
                            </div>
                            <div class="col-sm-6">
                                berat<input type="number" class="form-control form-control-user" name="weight" id="weight" onchange="zScore()" required="required">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                Z Score<input type="number" class="form-control form-control-user" name="zscore" id="zscore" required="required" readonly>
                            </div>
                            <script type="text/javascript">
                                function zScore(){
                                    var height =parseFloat(document.getElementById('height').value);
                                    var weight =parseFloat(document.getElementById('weight').value);
                                    var age =parseFloat(document.getElementById('child_age').value);
                                    var zScore = (height+weight)*age;//Z Score Calculation here
                                    document.getElementById('zscore').value=zScore;
                                    
                                }
                            </script>
                        
                            <div class="col-sm-6">
                                <input type="submit" class="btn btn-success" value="Simpan">
                                <a href="/" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </form>
 
                </div>
            </div>
        </div>

        @endsection

