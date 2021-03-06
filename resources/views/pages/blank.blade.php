@extends('template-layout.master')
@section('title', 'Blank')
@section('content')

   <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{URL('pages/index')}}">Home</a></li>
              <li><i class="fa fa-bars"></i>Pages</li>
              <li><i class="fa fa-square-o"></i>Pages</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        Page content goes here
        <!-- page end-->
      </section>
    </section>
  </section>
  <!-- container ends-->
  @endsection