<style>
    img.loading {
        position: absolute;
        z-index: 9;
        width: 80px;
        top: 43%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .loader {
        width: 110px;
        height: 112px;
        background: #00000096;
        position: fixed;
        z-index: 999;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        line-height: 150px;
        text-align: center;
        border-radius: 10px;
        display: none;
    }
    .loading {
        width: 23px !important;
    }
</style>
<div class="loader">
    <img src="{{asset('public/loading.gif')}}" alt="" class="loading">
</div>
<script>
    window.addEventListener("load", (event) => {
        setTimeout(function (){
            document.querySelector('.loader').style.display='none';
        }, 600);
    });
</script>
