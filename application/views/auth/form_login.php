<div class="limiter" id="login">
    <div class="container-login100" style="background-image:url(<?php echo base_url(); ?>assets/img/background_disdikbud.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="login_topimg"> </div>
                    <div class="wrap-login100">
                        <form method="post" action="<?php echo base_url('auth/login'); ?>" class="login100-form validate-form"> 
                            <span class="login100-form-title "> Login </span> 
                            <span class="login100-form-subtitle m-b-16"> Aplikasi LOPE (Layanan Online Pegawai) Dinas Pendidikan Kab. Lebak </span>
                            <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz"> 
                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username" name="username" autofocus>
                                <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>') ?>
                                    <span class="focus-input100"></span> <span class="symbol-input100"> 
                                        <span class="glyphicon glyphicon-user"></span> </span>
                            </div>
                            <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required"> 
                            <input type="password" class="form-control " id="exampleInputPassword" placeholder="Masukkan Password" name="password">
                                <?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>') ?>
                                <span class="focus-input100"></span> <span class="symbol-input100"> 
                                    <span class="glyphicon glyphicon-lock"></span> </span> 
                            </div>
                            <div class="flex-sb-m w-full p-b-30">
                                <div class="contact100-form-checkbox"> <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me"> <label class="label-checkbox100" for="ckb1"> Ingat Saya</label> </div>
                                <div> <a href="<?php echo base_url('auth/cari'); ?>" class="txt1"> Belum Punya Akun? 
                            </a> </div>
                            </div>
                            <div class="container-login100-form-btn p-t-25"> <button type="submit" class="btn btn-primary btn-user btn-block">Login</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    <?php 
    $a = 5;
    $b = 5;
    echo ($a === $b);
    ?>

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box
}

.limiter {
    width: 100%;
    margin: 0 auto
}

.container-login100 {
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    z-index: 1
}

.container-login100::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.80)
}

.login_topimg {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    width: 100%;
    min-height: 185px;
    position: relative;
    background: #ffffff url("<?php echo base_url(); ?>assets/img/logo_disdikbud.jpg") no-repeat center;
    background-size: 200px 185px;
    background-position: center
}

.login_topimg img {
    width: 100%;
    height: auto
}

.login_topimg .logo_wrap {
    border-radius: 5px;
    background: #fff;
    padding: 13px 55px;
    position: relative;
    top: -21px;
    margin: 10px auto;
    max-width: 255px
}

#login .wrap-login100 {
    background-color: #E2E8EE;
    padding: 20px 45px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    width: 100%
}

.login100-form {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap
}

.login100-form-title {
    font-size: 25px;
    color: #243762;
    line-height: 1.2;
    text-transform: uppercase;
    text-align: center;
    width: 100%;
    display: block
}

.login100-form-subtitle {
    font-size: 16px;
    color: #243762;
    line-height: 1.2;
    text-align: center;
    width: 100%;
    display: block
}

.wrap-input100 {
    position: relative;
    width: 100%;
    z-index: 1
}

#login input {
    outline: none;
    border: none
}

#login label {
    display: inline-block;
    margin-bottom: .5rem
}

.input-checkbox100 {
    display: none
}

input {
    outline: none;
    border: none
}

.wrap-input100 {
    position: relative;
    width: 100%;
    z-index: 1
}

.input100 {
    font-size: 15px;
    line-height: 1.2;
    color: #686868;
    display: block;
    width: 100%;
    background: #e6e6e6;
    height: 45px;
    border-radius: 3px;
    padding: 0 30px 0 55px
}

.focus-input100 {
    display: block;
    position: absolute;
    border-radius: 3px;
    bottom: 0;
    left: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    box-shadow: 0px 0px 0px 0px;
    color: rgba(211, 63, 141, 0.6)
}

.symbol-input100 {
    font-size: 15px;
    color: #999999;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    position: absolute;
    border-radius: 25px;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding-left: 23px;
    padding-bottom: 5px;
    pointer-events: none;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s
}

::-webkit-input-placeholder {
    opacity: 1;
    -webkit-transition: opacity .5s;
    transition: opacity .5s
}

:-moz-placeholder {
    opacity: 1;
    -moz-transition: opacity .5s;
    transition: opacity .5s
}

::-moz-placeholder {
    opacity: 1;
    -moz-transition: opacity .5s;
    transition: opacity .5s
}

:-ms-input-placeholder {
    opacity: 1;
    -ms-transition: opacity .5s;
    transition: opacity .5s
}

::placeholder {
    opacity: 1;
    transition: opacity .5s
}

*:focus::-webkit-input-placeholder {
    opacity: 0
}

*:focus:-moz-placeholder {
    opacity: 0
}

*:focus::-moz-placeholder {
    opacity: 0
}

*:focus:-ms-input-placeholder {
    opacity: 0
}

*:focus::placeholder {
    opacity: 0
}

.lnr {
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.flex-sb-m {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    -ms-align-items: center;
    align-items: center
}

.w-full {
    width: 100%
}

.p-b-30 {
    padding-bottom: 30px
}

.input-checkbox100:checked+.label-checkbox100::before {
    color: #09569B
}

.label-checkbox100::before {
    content: "\f00c";
    font-family: FontAwesome;
    font-size: 13px;
    color: transparent;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    width: 18px;
    height: 18px;
    border-radius: 2px;
    background: #fff;
    border: 1px solid #e6e6e6;
    left: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%)
}

.label-checkbox100 {
    font-size: 14px;
    font-weight: normal;
    color: #999999;
    line-height: 1.2;
    display: block;
    position: relative;
    padding-left: 26px;
    cursor: pointer
}

.m-b-16 {
    margin-bottom: 16px
}

.p-b-55 {
    padding-bottom: 55px
}

.container-login100-form-btn {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center
}

.login100-form-btn:hover {
    background: #333333
}

.label-checkbox100::before {
    content: "\f00c";
    font-family: FontAwesome;
    font-size: 13px;
    color: transparent;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    width: 18px;
    height: 18px;
    border-radius: 3px;
    background: #fff;
    border: 2px solid #09569B;
    left: 0;
    top: 48%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%)
}

#login button:hover {
    cursor: pointer
}

.login100-form-btn {
    font-size: 16px;
    line-height: 1.5;
    color: #fff;
    text-transform: uppercase;
    width: 100%;
    height: 45px;
    border-radius: 3px;
    background: #09569B;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 25px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s
}

#login button {
    outline: none !important;
    border: none
}

@media (max-width: 768px) {
    .container {
        width: 750px
    }

    #login .wrap-login100 {
        padding: 27px
    }

    .login_topimg .logo_wrap {
        padding: 5px 55px
    }
}
</style>