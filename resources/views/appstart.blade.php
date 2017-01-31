@extends('layouts.default')

@section('content')
<div class="app-page full-height">
    @section('logo')
        @parent
    @endsection
    <h1 style="text-align: center;">Let's Get Started</h1>
    <form id="secret-santa-form" action="/api/generateSecretSantas" method="get">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <p><em><span>*</span>Required Fields</em></p>
        <div class="fields">
            <div class="form-group form-inline" data-index="2">
                <label for="name-1">Name<span>*</span>: <input type="text" class="form-control" name="name-1" required></label>
                <label for="email-1">Email<span>*</span>: <input type="text" class="form-control" name="email-1" required></label>
                <label for="phone-1">Phone: <input type="text" class="form-control" name="phone-1" ></label>
            </div>
            <div class="form-group form-inline" data-index="2">
                <label for="name-2">Name<span>*</span>: <input type="text" class="form-control" name="name-2" required></label>
                <label for="email-2">Email<span>*</span>: <input type="text" class="form-control" name="email-2" required></label>
                <label for="phone-2">Phone: <input type="text" class="form-control" name="phone-2" ></label>
            </div>
            <div class="form-group form-inline" data-index="3">
                <label for="name-3">Name<span>*</span>: <input type="text" class="form-control" name="name-3" required></label>
                <label for="email-3">Email<span>*</span>: <input type="text" class="form-control" name="email-3" required></label>
                <label for="phone-3">Phone: <input type="text" class="form-control" name="phone-3" ></label>
            </div>
        </div>
        <div class="clear-fix"></div>
        <div class="create-new">
            <a href="#" class="add-more"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add More...</a>
        </div>
        <div class="button-wrap">    
            <button type="submit">Submit</button>
        </div>
    </form>
    <div class="links">
        <a href="/home">Go Home</a>
    </div>
</div>
@endsection
