@extends('layouts.master')

@section('title')
    Inquiry | Wingman Grooming
@endsection

{{--META TAGS--}}
@section('meta-url')
	{{Request::url()}}
@endsection

@section('meta-title')
	Inquiry | Wingman Grooming
@endsection

@section('meta-description')
    Inquiry
@endsection

@section('meta-image')
	
@endsection

{{-- STYLES AND SCRIPTS--}}
@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')

    <div class="contact-title">
        <hr class="mobile-only">
            Contact Us
        <hr class="mobile-only">
    </div>

    <div class="quotes"> 
        <div class="contact-note">
            <p>
                If you have any questions, comments, wholesale inquiries or concerns, feel free to reach out us here. We would love to hear from you.
            </p>
        </div>    
    </div>

    {!! Form::open([      
        'method' => 'POST',
        'action' => 'InquiryController@store',
    ]) !!}

    <div class="contact-details">
        <h4>Get in Touch</h4>

        <div class="full">
            *Full Name
            <input type="text" name="fullname" required/>
        </div>

        <div class="full">
            *Email Address
            <input type="text" name="email" required/>
        </div>

        <div class="full">
            *Subject
            <input type="text" name="subject" required/>
        </div>

        <div class="full">
            *Comments, Questions, and Suggestions
            <textarea name="comments" style="resize:none;" rows="5" required ></textarea>
        </div>

        <div class="full">
            <input id="submit" type="submit" value="Submit"/>
        </div>

    </div>

    {!! Form::close() !!}

    <div class="quotes"> 
        <div class="contact-note">
            <p>
                Please feel free to reach out to us at (Insert Email here) with all general inquiries.<br>
                Call us at (Insert number here).
            </p>
        </div>    
    </div>

    <br><br><br>



@endsection