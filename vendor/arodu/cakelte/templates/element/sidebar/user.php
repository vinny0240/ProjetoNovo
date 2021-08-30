<div class="user-panel mt-3 pb-3 mb-3 d-flex" style="color: #E1E7E0">
  <!-- <div class="image">
    <?= $this->Html->image('CakeLte./AdminLTE/dist/img/user2-160x160.jpg', ['class'=>'img-circle elevation-2', 'alt'=>'User Image']) ?>
  </div> -->

  <div class="info" style="color: #E1E7E0; overflow: auto;">
   <a href="#" class="d-block" style="color: #E1E7E0">
   <?php
    $service = $this->request->getAttribute('authentication');

    // Will be null on authentication failure, or an authenticator.
    $authenticator = $service->getAuthenticationProvider();
    $identifier = $service->getIdentificationProvider();
    $user = $service->getIdentity();
    echo 'Bem vindo, '.$user->username;
   ?>
  </a>
  </div>
</div>
