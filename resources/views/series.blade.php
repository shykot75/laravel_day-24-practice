@extends('master')


@section('title')
    Series Number Addition
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card ">
                        <div class="card-header text-center bg-warning font-weight-bolder">Sum of Series</div>

                        <div class="card-body bg-info text-white">


                            <form action="{{route('series-addition')}}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label for="" class="col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="starting_number" required class="form-control" value = "">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="ending_number" required class="form-control" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" readonly >{{ isset($result) ? $result : '' }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="series_btn" class="btn btn-success btn-block" value="Submit" >
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
