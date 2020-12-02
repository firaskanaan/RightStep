
<div class="row justify-content-center" style="">
    <div class="demo-sh">
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <div data-notify="container" class="alert alert-dismissible alert-danger alert-notify animated fadeInDown"
                     role="alert" data-notify-position="top-center" style="">
                    <div class="alert-text">
                        <span class="alert-title" data-notify="title"> Error!</span>
                        <span data-notify="message"> {{$error}}</span>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif

        @if(session('success'))
            <div data-notify="container"
                 class="alert alert-dismissible alert-success alert-notify animated fadeInDown"
                 role="alert" data-notify-position="top-center"
                 style="">
                <span class="alert-icon ni ni-check-bold" data-notify="icon"></span>
                <div class="alert-text">
                    <span class="alert-title" data-notify="title"> Success!</span>
                    <span data-notify="message"> {{session('success')}}</span>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                     style="">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif

        @if(session('error'))
            <div data-notify="container"
                 class="alert alert-dismissible alert-warning alert-notify animated fadeInDown"
                 role="alert" data-notify-position="top-center"
                 style="">
                <span class="alert-icon ni ni-bell-55" data-notify="icon"></span>
                 <div class="alert-text">
                     <span class="alert-title" data-notify="title"> Error!</span>
                     <span data-notify="message">{{session('error')}}</span>
                 </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

        @endif

        @if(session()->has('message'))
            <div data-notify="container"
                 class="alert alert-dismissible alert-success alert-notify animated fadeInDown"
                 role="alert" data-notify-position="top-center"
                 style="">
                <span class="alert-icon ni ni-check-bold" data-notify="icon"></span>
                <div class="alert-text">
                    <span class="alert-title" data-notify="title"> Success!</span>
                    <span data-notify="message">  {{ session()->get('message') }}</span>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                        style="">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif

    </div>


</div>

<style>
    .demo-sh {
        position: fixed;
        z-index: 999999;
        justify-content: center!important;
    }
    .alert {
        width: 60%;
        display: inline-block; margin: 0px auto; position: fixed;
        transition: all 0.5s ease-in-out 0s; z-index: 1080; top: 15px; left: 0px;
        right: 0px; animation-iteration-count: 1;
    }
    .close {
        position: absolute; right: 10px; top: 5px; z-index: 1082;
    }
</style>
