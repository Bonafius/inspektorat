        <div class="page-content--bge5" style="background-image:url(<?php echo base_url()?>/templatebkn/images/office2.jpg); background-repeat:no-repeat; background-position:center; background-size:cover;">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url()?>/templatebkn/images/icon/logobkn.png" alt="logobkn">
                            </a>
                        </div>

                        <div class="login-form">
                            <form action="<?= base_url('login/cek_login')?>" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="reset">reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>