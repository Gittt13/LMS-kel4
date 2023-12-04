@extends('layouts.teacher')

@section('content')
<div class="container mt-5">

    <!-- Customized Calendar Widget -->
    <div class="card">
        <div class="card-header bg-primary text-white text-center">
            <h3 class="mb-0">Schedule</h3>
        </div>
        <div class="card-body">
            <div id="calendarContainer" class="calendar-container">
                <!-- Embed your Google Calendar iframe here -->
                <iframe src="https://calendar.google.com/calendar/embed?height=630&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FJakarta&title=Schedule&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=Y18wZGFkMDJkYjdlZTY3MjhmNTljMWJhNGIxZDRlYTVjZGY0ZmVjYzc3ZDE0MDk0MDNiMTc5OWNjZTVmYmRjNDUyQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&color=%2333B679&color=%238E24AA" style="border:solid 1px #777;" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>

</div>

<style>
    .card {
        margin-bottom: 20px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        border-bottom: none;
    }

    .calendar-container {
        position: relative;
        padding-bottom: 75%; /* Adjust the aspect ratio */
        overflow: hidden;
        border-radius: 15px;
    }
</style>

@endsection
