<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php echo $this->Html->charset(); ?>
  <title>
  Zav-DBRB
  </title>
  <?php
    echo $this->Html->script(array(
        '/js/jquery-1.11.1.min.js',
        '/js/cakebootstrap.js',
        '/js/bootstrap.min.js',
        '/js/find-book.js'
    ));
    echo $this->Html->css(array('bootstrap.min','bootstrap-theme.min','layout'));
    ?>


</head>
<body style="background-color: #efefef">

  <div id="container-fluid">
    <div id="header">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container-fluid" style="max-width: 1170px;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">ZAV-DBRB</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><?php
                if($this->Session->read('Books.status') != null){
                echo $this->Html->link('Books', array('action'=>'../books/index/status:'.$this->Session->read('Books.status').'/stream:'.$this->Session->read('Books.stream')));
                 }
                 else{
                  echo $this->Html->link('Books', array('action'=>'../books/index/status:Available/stream:School books'));

                 }

                 ?></li>

                <li><?php echo $this->Html->link('Donate', array('action'=>'../donate/')); ?></li>
                <li><?php echo $this->Html->link('Institute', array('action'=>'../institute/')); ?></li>
               <li><?php echo $this->Html->link('Admin', array('action'=>'../admin/index?limit=5')); ?></li>
               <li><?php echo $this->Html->link('Stats', array('action'=>'../info/')); ?></li>
               <li><?php if($this->Session->read('Admin.username') != null) {
               echo $this->Html->link('Logout', array('action'=>'../users/logout'));}
               ?></li>
              </ul>

      <form class="navbar-form navbar-left" role="form" method="post" action="/dbrb/books/">
        <div class="form-group">
          <input type="text" class="form-control" name="data[Book][titleAndAuthor]" placeholder="Book title or author">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
              <ul class="nav navbar-nav navbar-right">
                <li></li>
                <li><?php echo $this->Html->link('Contact', array('action'=>'../contact/')); ?></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
      </nav>
    </div>

    <div id="content"  class="container-fluid" style="margin-top:50px;min-height: 700px;max-width: 1170px;background-color: #ffffff">

      <?php echo $this->Session->flash(); ?>

      <?php echo $this->fetch('content'); ?>
    </div>
    <footer>
        <div class="foot-fixed-bottom">
        <div class="container" style="text-align:center;">
        <p style="font-color:white">© zavfoundation.org</p></div>
        </div>
        </footer>
  </div>

</body>
</html>
