@extends('master')


@section('title')
    Calculator Check
@endsection


@section('body')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Simple Calculator</div>

                        <div class="card-body">
                            <form action="{{route('make-calculator')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label  class="col-md-3 col-form-label">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="first_number" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Second Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="second_number" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Select Actions</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="operator" value="+" > Addition (+) </label>
                                        <label><input type="radio" name="operator" value="-" > Substruction (-) </label>
                                        <label><input type="radio" name="operator" value="*" > Multipication (*) </label>
                                        <label><input type="radio" name="operator" value="/" > Division (/) </label>
                                        <label><input type="radio" name="operator" value="%" > Reminder (%) </label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Result</label>
                                    <div class="col-md-9">
                                        <input type="text" readonly class="form-control" value="<?php echo isset($value) ? $value : ''; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-outline-success " value="submit">
                                        <!--                                            <input type="submit" name="operator" class="btn btn-outline-success " value="-">-->
                                        <!--                                            <input type="submit" name="operator" class="btn btn-outline-success " value="*">-->
                                        <!--                                            <input type="submit" name="operator" class="btn btn-outline-success " value="/">-->
                                        <!--                                            <input type="submit" name="operator" class="btn btn-outline-success " value="%">-->
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
