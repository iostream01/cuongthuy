@extends('layout')
@section('stylesheets')
{!!Html::style('css/jobs.css')!!}
@section('content')
<div id="job">
      <h1>{!! $job['company'] !!}</h1>
      <h2>{!! $job['location'] !!}</h2>
      <h3>
        {!! $job['position'] !!}
        <small> - {!! $job['type'] !!}</small>
      </h3>
 
      @if ($job['logo'])
        <div class="logo">
          <a href="">
            {!! Html::image($job['logo'])!!}
          </a>
        </div>
      @endif
 
      <div class="description">
        {!! $job['description']!!}
      </div>
 
      <h4>How to apply?</h4>
 
      <p class="how_to_apply">{!! $job['how_to_apply'] !!}</p>
 
      <div class="meta">
        <small>posted on {!! $job['created_at']!!}</small>
      </div>
 
      <div style="padding: 20px 0">
        <a href="{!!URL::route('edit',array($job['id']))!!}">
          Edit
        </a>
      </div>
</div>
@stop
