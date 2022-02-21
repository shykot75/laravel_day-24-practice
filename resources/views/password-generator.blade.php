@extends('master')


@section('title')
    Password Generator
@endsection


@section('body')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center bg-success font-weight-bold ">Password Generator</div>

                        <div class="card-body bg-dark">
                            <form action="{{route('make-password')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label text-white">Password Length</label>
                                    <div class="col-md-9">
                                        <input type="number" name="password_length" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label text-white">Your Password</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo isset($result) ? $result : '' ;?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
