@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Task</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('tasks.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Command</label>
                            <input type="text" name="command" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Cron Expression</label>
                            <input type="text" name="expression" class="form-control" value="*****">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" name="notification_email" class="form-control">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="dont_overlap" value="1">
                            <label for="" class="form-check-label">Don't Overlap</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="run_in_maintainance" value="1">
                            <label for="" class="form-check-label">Run In Maintainace</label>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">
                                    Create Task
                                </button>
                                <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
