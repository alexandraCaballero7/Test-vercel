@extends('layouts.app')

@section('template_title')
    {{ $article->name ?? "{{ __('Show') Article" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Article</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('articles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $article->title }}
                        </div>
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $article->content }}
                        </div>
                        <div class="form-group">
                            <strong>Author:</strong>
                            {{ $article->author }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $article->category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
