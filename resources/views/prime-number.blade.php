@extends('master')


@section('title')
    Prime Number Check
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Prime Number Check</div>

                        <div class="card-body">
                            <form action="{{route('prime')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-3">Enter Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="pm_number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{ isset($result) ? $result : '' }}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="prime_check" class="btn btn-outline-success" value="Check">
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


