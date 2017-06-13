<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
                
            <ul class="nav navbar-nav navbar-left">
                <li class="clr1 active"><img src="{!! asset('assets/image/logo_BMKGtwitter.jpg') !!}"/>
                </li>
                <li class="clr2 active"><a>Sistem Informasi Kegempaan<br>Badan Meteorologi, Klimatologi, dan Geofisika</a></li>
            </ul>
            <div class="navbar-right">
                <div class="input-group"  >
                    <div class="input-group-btn">
                        <a href="{{URL::to('/')}}"><button class="btn btn-warning pemisah-btnnav">Cari Data</button></a>
                        <a href="{{URL::to('/tambah_data')}}"><button class="btn btn-success">Tambah Data</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>