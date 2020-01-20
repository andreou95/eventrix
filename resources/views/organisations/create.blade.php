@extends('layouts.app')

@section('title')
    <title>Organisations</title>
@endsection

@section('content')
    <div class="container">
        <div style="margin-bottom:10px">
            <h1>Add Organisation</h1>
        </div>
        <div class="col-8">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
            @endif
            <form method="post" action="{{ route('organisations.store') }}">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" name="name" class="element text medium" type="text" maxlength="255"/>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" class="element textarea medium"></textarea>
                </div>

                <div class="form-group">
                    <label for="member_total">Member total</label>
                    <input id="member_total" name="member_total" class="element text medium" type="text"
                           maxlength="255"/>
                </div>

                <div class="form-group">
                    <label for="year_founded">Year Founded</label>
                    <input id="year_founded" name="year_founded" class="element text small" type="text"
                           maxlength="255"/>
                </div>

                <div class="form-group">
                    <label for="website_url">Website</label>
                    <input id="website_url" name="website_url" class="element text medium" type="text"
                           maxlength="255" value="http://"/>
                </div>

                <div class="form-group">
                    <label for="sic_division_id">SIC division</label>
                    <select type="text" class="form-control" name="sic_division_id">
                        <option value=""> -- Select One --</option>
                        @foreach ($sicDivisions as $sicDivision)
                            <option value="{{ $sicDivision->id }}">{{$sicDivision->code}}
                                : {{ $sicDivision->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input id="city" name="city" class="element text medium" type="text" maxlength="255"/>
                </div>

                <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input id="postcode" name="postcode" class="element text medium" type="text" maxlength="255"/>
                </div>

                <div class="form-group">
                    <label for="contact_name">contact_name</label>
                    <input id="contact_name" name="contact_name" class="element text medium" type="text"
                           maxlength="255"/>
                </div>

                <div class="form-group">
                    <label for="contact_email">contact_email</label>
                    <input id="contact_email" name="contact_email" class="element text medium" type="email"
                           maxlength="255"/>
                </div>

                <div class="form-group">
                    <label for="contact_phone">contact_phone</label>
                    <input id="contact_phone" name="contact_phone" class="element text medium" type="number"
                           maxlength="255"/>
                </div>

                <div class="form-group">
                    <label for="research_notes">research_notes</label>
                    <textarea id="research_notes" name="research_notes" class="element textarea medium" type="text"
                              maxlength="255"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('organisations.index')}}" class="btn btn-primary">Back</a>

            </form>
        </div>
    </div>
@endsection
