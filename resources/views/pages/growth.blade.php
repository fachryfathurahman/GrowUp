<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit Data</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>Update perkembangan anak</strong>
                </div>
                <div class="card-body">
                    <a href="/" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/child/growth/store/{{$growths->child_id}}"> 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                        ID anak (percobaan) <input type="number" name="child_id" required="required" value="{{$growths->child_id}}" readonly> <br/>
                        </div>

                        panjang<input type="number" name="height" id="height" onchange="zScore()" required="required">
                        berat<input type="number" name="weight" id="weight" onchange="zScore()" required="required">
                        Z Score<input type="number" name="zscore" id="zscore" required="required"readonly>
                        <script type="text/javascript">
                            function zScore(){
                                var height =parseFloat(document.getElementById('height').value);
                                var weight =parseFloat(document.getElementById('weight').value);
                                var zScore = height+weight;
                                document.getElementById('zscore').value=zScore;
                            }
                        </script>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>

