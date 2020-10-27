<?php require_once 'partials/_header.php' ?>
    <main role="main" class="login-pages">
        <div class="container">
                <form class="form-signin">
                    <h2>Create your account</h2>
                    <div class="form-label-group">
                        <input type="text" id="inputUser" class="form-control" placeholder="UserName" required autofocus>
                        <label for="userName">User Name</label>
                    </div>

                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputEmail">Email address</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Password</label>
                    </div>

                        <input type="file" id="inputPhoto" class="form-control" require>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
        </div>     
    </main>
           
    <?php require_once 'partials/_footer.php'?>