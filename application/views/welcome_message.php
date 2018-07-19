<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>9jatunes - Home of Nigeria Ring Back Tunes</title>

    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 5rem;
      }
      .main-content{
        padding: 3rem 1.5rem;
        text-align: center;
      }

    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">9jatunes.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MTN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">GLO</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search for Tunes</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container-fluid">
      <div class="main-content">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <p class="lead">Subscribe to your favourite tunes...</p>
            <table class="table table-hover table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tune Name</th>
                  <th scope="col">Tune Author</th>
                  <th scope="col">Genre</th>
                  <th scope="col">Listen</th>
                  <th scope="col">Subscribe</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Arise and Shine</td>
                  <td>Coignsoft</td>
                  <td>Meditation</td>
                  <td>{{Play Button}}</td>
                  <td>{{Subscribe Button}}</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Yes I Can</td>
                  <td>Coignsoft</td>
                  <td>Motivation</td>
                  <td>{{Play Button}}</td>
                  <td>{{Subscribe Button}}</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>ABCDERF....</td>
                  <td>Tope Alabi</td>
                  <td>Inspiration</td>
                  <td>{{Play Button}}</td>
                  <td>{{Subscribe Button}}</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>If</td>
                  <td>Davido</td>
                  <td>Afro Pop</td>
                  <td>{{Play Button}}</td>
                  <td>{{Subscribe Button}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </main><!-- /.container -->

    <!-- <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Copyright - 2018 Coignsoft</p>
      </div>
    </footer> -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="static/js/jquery-slim.min.js"><\/script>')</script>
    <script src="static/js/popper.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
  </body>
</html>
